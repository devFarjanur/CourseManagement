<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use DB;
use Illuminate\Support\Facades\Hash;


class UsersTableSeeder extends Seeder
{
   

    public function run(): void
    {
        DB::table('users')->insert([

            // admin

            [
                'email' => 'admin@gmail.com',
                'name' => 'Admin',
                'username' => 'admin',
                'password' => hash::make(111),
                'role' => 'admin',
                'status' => 'active',
            ],

            // user
            [
                'email' => 'user@gmail.com',
                'name' => 'User',
                'username' => 'user',
                'password' => hash::make(111),
                'role' => 'user',
                'status' => 'active',
            ],
        ]);
    }
}
