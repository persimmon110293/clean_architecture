<?php

namespace App\Packages\Infrastructure\Repositories;

use App\Packages\Domain\User\Repositories\IUserRepository;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

/**
 * データの永続化を行うファイル
 */
class UserRepository implements IUserRepository
{
    public function save(array $params)
    {
        DB::table('users')
            ->insert([
                'name'       => $params['name'],
                'age'        => $params['age'],
                'email'      => $params['email'],
                'password'   => $params['password'],
                'crated_at'  => Carbon::now(),
                'updated_at' => Carbon::now()
            ]);
    }
}
