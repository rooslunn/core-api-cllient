<?php


namespace Pilulka\CoreApiClient\Command\Card;

use Pilulka\CoreApiClient\Model\Card\Card;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateCard implements Request
{
    private const url = '/brand';

    /** @var Card */
    private $card;

    public function __construct(Card $card)
    {
        $this->card = $card;
    }
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::PUT;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::url;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return \GuzzleHttp\json_encode([
            'userId' => $this->card->getUserId(),
            'isVip' => false,
            'credits' => $this->card->getCredits(),
            'cards' => $this->card->getCards(),
        ]);
    }
}