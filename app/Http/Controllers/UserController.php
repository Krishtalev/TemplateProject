<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Services\Interfaces\IUserServiceInterface;
use Illuminate\Http\Request;
use App\Services\UserService;
use App\Events\ExampleEvent;

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
}
