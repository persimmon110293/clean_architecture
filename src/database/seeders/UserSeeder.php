<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        for($i = 1; $i <= 10; $i++) {
            DB::table('users')
                ->insert(
                    [
                        'name' => 'test'.$i,
                        'age' => $i,
                        'email' => 'test'.$i.'@test.com',
                        'password' => 'testtest'.$i,
                    ],
                );
        }
    }
}
