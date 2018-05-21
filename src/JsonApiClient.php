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

    /**
     * @param Request $request
     * @return array
     * @throws \Exception
     */
    public function send(Request $request): array
    {
        return $this->sendRequest($request)->toArray();
    }

    /**
     * @param Request $request
     * @return Response
     * @throws \Exception
     */
    private function sendRequest(Request $request): Response
    {
        try {
            $response = (new Client())->send(
                $this->request($request)
            );

            if ($response->getStatusCode() === Http::CODE_404) {
                throw new HttpException();
            }

            $responseArray = $this->responseArray($response);
            $className = $this->responseClass($request);

            return new $className($responseArray);

        } catch (GuzzleException $e) {
            //TODO return ErrorResponse
            return new ResponseException(Http::CODE_500);
        } catch (HttpException $e) {
            //TODO return ErrorResponse
            return new ResponseException(Http::CODE_404);
        }
    }

    /**
     * @param Request $request
     * @return \GuzzleHttp\Psr7\Request
     */
    private function request(Request $request): RequestInterface
    {
        return new \GuzzleHttp\Psr7\Request(
            $request->getMethod(),
            $request->getUrl(),
            [],
            $request->getBody()
        );
    }

    /**
     * @param $response
     * @return array
     */
    private function responseArray(ResponseInterface $response): array
    {
        return \GuzzleHttp\json_decode($response->getBody(), true);
    }

    /**
     * @param Request $request
     * @return string
     * @throws \Exception
     */
    private function responseClass(Request $request): string
    {
        $className = get_class($request) . 'Response';
        if (!class_exists($className)) {
            throw new \Exception($className . ' not found');
        }
        return $className;
    }

}