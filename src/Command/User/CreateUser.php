<?php

namespace Pilulka\CoreApiClient\Command\User;

use Pilulka\CoreApiClient\Model\User\User;
use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class CreateUser implements Request
{
    private const URI = '/user';

    /**
     * @var User
     */
    private $user;

    /**
     * CreateUser constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
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
        return self::URI;
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
