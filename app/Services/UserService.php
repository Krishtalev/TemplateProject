<?php

namespace App\Services;

use App\Repositories\UserRepository;
use App\Services\Interfaces\IUserServiceInterface;

class UserService implements IUserServiceInterface
{
    public UserRepository $repository; # спросить как заставить прогера определять Repository type

    public function __construct()
    {
        $this->repository = new UserRepository();
    }
}
