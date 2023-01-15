<?php

namespace App\Packages\Infrastructure\Repositories;

use App\Packages\Domain\User\Repositories\IUserRepository;

class UserRepository implements IUserRepository
{
    public function save()
    {
        return 'test from repository';
    }
}
