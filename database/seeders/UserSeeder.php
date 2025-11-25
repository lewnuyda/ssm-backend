<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Admin user
        User::create([
            'name' => 'Admin User',
            'email' => 'admin@example.com',
            'password' => Hash::make('password'), // default password
        ]);

        // Normal user
        User::create([
            'name' => 'John Doe',
            'email' => 'lewnuyda@gmail.com',
            'password' => Hash::make('password'),
        ]);

        // Generate 10 random users
        User::factory(10)->create();
    }
}
