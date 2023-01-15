<?php

namespace App\Packages\UseCases\User\Create;

use App\Packages\UseCases\User\Create\ICreateUserUseCase;

class CreateUserInteractor implements ICreateUserUseCase
{
    public function createUser()
    {
        return 'test from interactor';
    }
}
