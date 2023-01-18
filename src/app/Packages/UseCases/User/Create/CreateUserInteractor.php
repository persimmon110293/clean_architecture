<?php

namespace App\Packages\UseCases\User\Create;

use App\Packages\UseCases\User\Create\ICreateUserUseCase;
use App\Packages\Domain\User\Services\UserService;

class CreateUserInteractor implements ICreateUserUseCase
{
    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function createUser(array $params)
    {
        return $this->service->createUser($params);
    }
}
