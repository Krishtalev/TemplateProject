<?php

declare(strict_types=1);

namespace App\Responses;

use Illuminate\Http\JsonResponse;

class ErrorResponse implements IResponse
{
    /**
     * @param array|null $data
     * @param string|null $message
     * @param int $status
     * @return JsonResponse
     */
    static public function response(array|null $data, ?string $message, int $status): JsonResponse
    {
        return new JsonResponse(["errors" => $data, "message" => $message, "success" => false], $status);
    }
}
