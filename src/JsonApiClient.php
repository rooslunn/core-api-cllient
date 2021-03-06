<?php
declare(strict_types=1);

namespace Pilulka\CoreApiClient;

use GuzzleHttp\Client;
use GuzzleHttp\Exception\GuzzleException;
use Pilulka\CoreApiClient\Exception\HttpException;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;
use Pilulka\CoreApiClient\Response\Response;
use Pilulka\CoreApiClient\Response\ResponseException;
use Psr\Http\Message\RequestInterface;
use Psr\Http\Message\ResponseInterface;

class JsonApiClient
{
    /** @var string */
    private $urlBase;
    private $temp;

    public function __construct(string $urlBase)
    {
        $this->urlBase = $urlBase;
    }

    /**
     * @param Request $request
     * @return object|array
     * @throws \Exception
     */
    public function send(Request $request)
    {
        return $this->sendRequest($request)->toModel();
    }

    /**
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    private function sendRequest(Request $request): Response
    {
        try {
            $response = (new Client(['verify' => false]))->send(
                $this->request($request)
            );

            if ($response->getStatusCode() === Http::CODE_404) {
                throw new HttpException('You stuck with 404 :-(');
            }

            $responseArray = $this->responseArray($response);
            $className = $this->responseClass($request);

            return new $className($responseArray);

        } catch (GuzzleException $e) {
            return new ResponseException(Http::CODE_500);
        } catch (HttpException $e) {
            return new ResponseException(Http::CODE_404);
        }
    }

    private function getFullUrl(string $uri): string
    {
        return $this->urlBase . $uri;
    }

    /**
     * @param Request $request
     * @return \GuzzleHttp\Psr7\Request
     */
    private function request(Request $request): RequestInterface
    {
        return new \GuzzleHttp\Psr7\Request(
            $request->getMethod(),
            $this->getFullUrl($request->getUrl()),
            [],
            $request->getBody()
        );
    }

    /**
     * @param $response
     * @return object
     */
    private function responseArray(ResponseInterface $response)
    {
        $uncommented = JsonArtisan::uncomment((string) $response->getBody());
        return \GuzzleHttp\json_decode($uncommented);
    }

    /**
     * @param Request $request
     * @return string
     * @throws \Exception
     */
    private function responseClass(Request $request): string
    {
        $className = \get_class($request) . 'Response';
        if (!class_exists($className)) {
            throw new \InvalidArgumentException($className . ' not found');
        }
        return $className;
    }

}
