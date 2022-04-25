<?php

namespace App\Repositories;

use App\Models\User;
use App\Repositories\Interfaces\IUserRepositoryInterface;

class UserRepository extends BaseRepository implements IUserRepositoryInterface
{
    public function __construct()
    {
        static::$model = new User();
    }
}
