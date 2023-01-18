<?php

namespace App\Packages\Domain\User\Repositories;

interface IUserRepository
{
    public function save(array $params);
}
