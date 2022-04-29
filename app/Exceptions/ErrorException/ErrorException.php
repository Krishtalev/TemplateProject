<?php

namespace App\Exceptions\ErrorException;

use App\Responses\ErrorResponse;
use Exception;

class ErrorException extends Exception
{
    public function render(): \Illuminate\Http\JsonResponse
    {
        return ErrorResponse::response(null, __('exceptions.notFound.user'),422);
    }
}
