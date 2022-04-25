<?php

namespace App\Services;

abstract class BaseService
{
    protected static $repository;

    public static function getAll()
    {
        return static::$repository->getAll();
    }
}
