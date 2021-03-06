<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    public function run()
    {
        User::create([
            'name' => "Gustavo Silva",
            'email' => "gusttavo212@gmail.com",
            'password' => Hash::make('12345678'),
        ]);
        User::factory(5)->create();
    }
}
