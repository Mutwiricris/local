<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();
        User::create([
            'name' => 'writer',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'writer'
        ]);

//        User::create([
//            'name' => 'Agent',
//            'email' => 'agent@gmail.com',
//            'password' => Hash::make('123456'),
//            'role' => 'agent'
//        ]);

        User::create([
            'name' => 'User',
            'email' => 'user@gmail.com',
            'password' => Hash::make('123456'),
            'role' => 'user'
        ]);
    }
}
