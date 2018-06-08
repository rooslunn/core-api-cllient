<?php

namespace Pilulka\CoreApiClient\Command\User;

use Pilulka\CoreApiClient\Model\Comment\Comment;
use Pilulka\CoreApiClient\Model\User\User;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class UpdateUser implements Request
{
    private const URI = '/user';

    /**
     * @var int
     */
    private $id;

    /** @var Comment */
    private $user;

    public function __construct(User $user, $id)
    {
        $this->user = $user;
        $this->id = $id;
    }
    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::POST;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URI . "/{$this->id}" ;
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        $data = [
            'email' => $this->user->getEmail(),
            'role' => $this->user->getRole(),
            'password' => $this->user->getPassword(),
            'firstName' => $this->user->getFirstName(),
            'lastName' => $this->user->getLastName(),
            'contact' => [
                'phone' => $this->user->getPhone(),
                'address' => $this->user->getAddress(),
                'city' => $this->user->getCity(),
                'zip' => $this->user->getZip(),
                'company' => $this->user->getCompany(),
                'ico' => $this->user->getIco(),
                'dic' => $this->user->getDic(),
            ],
            'delivery' => [
                'firstName' => $this->user->getDFirstName(),
                'lastName' => $this->user->getDLastName(),
                'company' => $this->user->getDCompany(),
                'address' => $this->user->getDAddress(),
                'city' => $this->user->getDCity(),
                'zip' => $this->user->getDZip(),
            ],
            'isActive' => $this->user->isActive(),
        ];

        return \GuzzleHttp\json_encode($data);
    }
}
