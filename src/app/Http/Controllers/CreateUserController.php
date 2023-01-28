<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateUserRequest;
use App\Packages\UseCases\User\Create\ICreateUserUseCase;

class CreateUserController extends Controller
{
    public function __invoke(CreateUserRequest $request, ICreateUserUseCase $interactor)
    {
        $params = $request->all();
        return $interactor->createUser($params);
    }
}
