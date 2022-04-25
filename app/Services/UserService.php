<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\Interfaces\IUserServiceInterface;

class UserService extends BaseService implements IUserServiceInterface
{
    public function __construct()
    {
        static::$repository = new UserRepository();
    }
}
