<?php

use App\User;
use Illuminate\Database\Seeder;

class UsersTableSeeder extends Seeder
{
    public function run()
    {
        $users = [
            [
                'id'             => 1,
                'name'           => 'Admin',
                'email'          => 'admin@admin.com',
                'password'       => '$2y$10$z3PoYDBg5vczwRbRR7YWmeB6JvrKzXx4oEDUvHmCfcyUnvE5l82mW',
                'remember_token' => null,
                'created_at'     => '2019-09-11 03:53:58',
                'updated_at'     => '2019-09-11 03:53:58',
            ],
        ];

        User::insert($users);
    }
}
