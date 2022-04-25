<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Interfaces\IUserServiceInterface;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Events\ExampleEvent;
use App\Exceptions\CustomException\CustomException;
use Illuminate\Support\Facades\Lang;

class UserController extends Controller
{
    private $userService;

    public function __construct(IUserServiceInterface $userService)
    {
        $this->userService = $userService;
    }

    public function getUsers(): array
    {
        return $this->userService->getAll();
        //ExampleEvent::dispatch("message");
    }

    public function sendPush()
    {
        ExampleEvent::dispatch("message");
    }

    public function throwException()
    {
        throw new CustomException(__('exceptions.notFound.user'));
        // Или так
        // throw new CustomException(Lang::get('exceptions.notFound.user'));
    }
}
