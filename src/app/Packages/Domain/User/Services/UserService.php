<?php

namespace App\Packages\Domain\User\Services;

use App\Packages\Domain\User\Repositories\IUserRepository;

class UserService
{
    private $repository;
    private $adapter;

    public function __construct(IUserRepository $repository)
    {
        $this->repository = $repository;
    }

    public function createUser(array $params)
    {
        return $this->repository->save($params);
    }

    public function getUser(array $params)
    {
        return $this->repository->findById($params);
    }
}
