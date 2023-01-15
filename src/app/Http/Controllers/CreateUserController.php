<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Packages\UseCases\User\Create\ICreateUserUseCase;

class CreateUserController extends Controller
{
    public function __invoke(ICreateUserUseCase $interactor)
    {
        return $interactor->createUser();
    }
}
