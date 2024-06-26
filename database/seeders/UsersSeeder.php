<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

use App\Models\User;


class UsersSeeder extends Seeder
{
 function run(): void
    {
        User::create([
            'id' => 1,
            'name' => 'admin',
            'email' => 'admin@email.com',
            'password' => Hash::make('password'),
        ]);
    }
}
