<?php

namespace App\Packages\Domain\User\Services;

use App\Packages\Domain\User\Repositories\IUserRepository;

class UserService
{
    private $repository;

    public function __construct(IUserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createUser(array $params)
    {
        return $this->repository->save($params);
    }
}
