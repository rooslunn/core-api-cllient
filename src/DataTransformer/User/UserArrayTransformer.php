<?php

namespace Pilulka\CoreApiClient\DataTransformer\User;

use Pilulka\CoreApiClient\DataTransformer\DataTransformer;
use Pilulka\CoreApiClient\Model\User\User;

/**
 * Class UserArrayTransformer
 * @package Pilulka\CoreApiClient\DataTransformer\User
 */
class UserArrayTransformer implements DataTransformer
{
    /**
     * @var User
     */
    private $user;

    /**
     * UserArrayTransformer constructor.
     * @param User $user
     */
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    /**
     * @return array
     */
    public function transform(): array
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

        return $data;
    }
}
