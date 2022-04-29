<?php

namespace App\Responses;

interface IResponse
{
    static public function response(array|null $data, ?string $message, int $status);
}
