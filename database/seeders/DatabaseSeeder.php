<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // Create admin user
        \App\Models\User::create([
            'name' => 'Admin User',
            'email' => 'admin@gmail.com',
            'password' => bcrypt('admin123'),
            'is_admin' => true,
        ]);

        // Create demo regular users
        \App\Models\User::create([
            'name' => 'Demo User',
            'email' => 'user@gmail.com',
            'password' => bcrypt('user123'),
            'is_admin' => false,
        ]);

        \App\Models\User::create([
            'name' => 'Test User',
            'email' => 'test@gmail.com',
            'password' => bcrypt('test123'),
            'is_admin' => false,
        ]);
    }
}
