<?php

namespace App\Exceptions\CustomException;

use Exception;
use Throwable;

class CustomException extends Exception
{
    public function __construct(string $message = "", int $code = 422, ?Throwable $previous = null)
    {
        parent::__construct($message, $code, $previous);
    }

    public function render()
    {
        return response(['error_message' => $this->message], $this->code, ['Content-Type' => 'application/json']);
    }
}
