<?php

namespace Pilulka\CoreApiClient\Command\User;

use Pilulka\CoreApiClient\Request\Http;
use Pilulka\CoreApiClient\Request\Request;

class ViewUserByEmailPassword implements Request
{
    private const URI = '/user/auth';

    /**
     * @var string
     */
    private $email;

    /**
     * @var string
     */
    private $password;

    /**
     * @var string
     */
    private $fields;

    /**
     * ViewUserByEmailPassword constructor.
     * @param $email
     * @param $password
     * @param $fields
     */
    public function __construct($email, $password, $fields)
    {
        $this->email = $email;
        $this->password = $password;
        $this->fields = $fields;
    }

    /**
     * @return string
     */
    public function getMethod(): string
    {
        return Http::GET;
    }

    /**
     * @return string
     */
    public function getUrl(): string
    {
        return self::URI . '?'
            . http_build_query(['email' => $this->email, 'password' => $this->password, 'fields' => $this->fields]);
    }

    /**
     * @return string
     */
    public function getBody(): string
    {
        return '';
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getPassword()
    {
        return $this->password;
    }

    /**
     * @return string
     */
    public function getFields()
    {
        return $this->fields;
    }
}
