<?php

namespace Pilulka\CoreApiClient\Tests\utils;

use Pilulka\CoreApiClient\Model\User\User;

/**
 * Class UserUtility
 * @package Pilulka\CoreApiClient\tests\util
 */
class UserUtility
{
    /**
     * @return User
     */
    public static function createUser(): User
    {
        $user = new User();

        $user->setEmail('');
        $user->setRole(1);
        $user->setPassword('');
        $user->setFirstName('');
        $user->setLastName('');
        $user->setPhone('');
        $user->setAddress('');
        $user->setCity('');
        $user->setZip('');
        $user->setCompany('');
        $user->setIco('');
        $user->setDic('');
        $user->setDFirstName('');
        $user->setDLastName('');
        $user->setDCompany('');
        $user->setDAddress('');
        $user->setDCity('');
        $user->setDZip('');
        $user->setIsActive(true);

        return $user;
    }
}
