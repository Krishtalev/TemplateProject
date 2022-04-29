<?php

declare(strict_types=1);

namespace App\Responses;

use Illuminate\Http\JsonResponse;

class SuccessResponse implements IResponse
{
    /**
     * @param array|null $data
     * @param string|null $message
     * @param int $status
     * @return JsonResponse
     */
    static public function response(array|null $data, ?string $message, int $status): JsonResponse
    {
        return new JsonResponse(["data" => $data, "message" => $message, "success" => true], $status);
    }
}
