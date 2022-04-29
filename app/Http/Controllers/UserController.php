<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Responses\SuccessResponse;
use App\Services\Interfaces\IUserServiceInterface;
use App\Services\UserService;
use App\Events\ExampleEvent;
use App\Exceptions\ErrorException\ErrorException;
use Illuminate\Http\JsonResponse;

class UserController extends Controller
{
    private $userService;

    public function __construct(IUserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function getUsers(): JsonResponse
    {
        $data = $this->userService->repository->getAll();
        return SuccessResponse::response($data, __('exceptions.notFound.user'), 200);
        //ExampleEvent::dispatch("message");
    }

    public function sendPush()
    {
        ExampleEvent::dispatch("message");
    }

    public function throwException()
    {
        throw new ErrorException(__('exceptions.notFound.user'));
    }
}
