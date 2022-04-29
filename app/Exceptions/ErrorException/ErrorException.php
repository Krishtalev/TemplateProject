<?php

namespace App\Exceptions\ErrorException;

use Exception;
use Throwable;

class ErrorException extends Exception
{
    public function __construct(string $message = "", int $code = 422, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render(): \Illuminate\Http\JsonResponse
    {
        return response()->json(['succes' => 'false', 'message' => $this->message], $this->code);
    }
}
