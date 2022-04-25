<?php

namespace App\Repositories;

abstract class BaseRepository
{
    public static $model;

    public static function getAll(): array
    {
        return static::$model->all()->toArray();
    }
}
