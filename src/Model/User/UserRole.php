<?php


namespace Pilulka\CoreApiClient\Model\User;


class UserRole
{
    const ROLE_DEVELOPER = 1;
    const ROLE_ADMIN = 2;
    const ROLE_EDITOR = 3;
    const ROLE_REGISTERED = 4;

    const ROLE = [
        'developer' => self::ROLE_DEVELOPER,
        'admin' => self::ROLE_ADMIN,
        'editor' => self::ROLE_EDITOR,
        'registered' => self::ROLE_REGISTERED
    ];
}