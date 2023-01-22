<?php

namespace App\Packages\UseCases\User\Get;

use App\Packages\UseCases\User\Get\IGetUserUseCase;
use App\Packages\Domain\User\Services\UserService;

class GetUserInteractor implements IGetUserUseCase
{
    private $service;

    public function __construct(UserService $service)
    {
        $this->service = $service;
    }

    public function getUser(array $params)
    {
        return $this->service->getUser($params);
    }
}
