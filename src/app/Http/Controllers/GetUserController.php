<?php

namespace App\Http\Controllers;

use App\Http\Requests\GetUserRequest;
use App\Packages\UseCases\User\Get\IGetUserUseCase;

class GetUserController extends Controller
{
    public function __invoke(GetUserRequest $request, IGetUserUseCase $interactor)
    {
        $user = $interactor->getUser($request->all());
        dd($user);
        // return $interactor->getUser($request->all());
    }
}
