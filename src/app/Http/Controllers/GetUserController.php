<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetUserRequest;
use App\Packages\UseCases\User\Get\IGetUserUseCase;

class GetUserController extends Controller
{
    public function __invoke(GetUserRequest $request, IGetUserUseCase $interactor)
    {
        return $interactor->getUser($request->all());
    }
}
