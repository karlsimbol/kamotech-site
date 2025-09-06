<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // Default customer user
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
            'role' => 'customer',
        ]);

        // Sample technician user
        User::factory()->create([
            'name' => 'Tech User',
            'email' => 'tech@example.com',
            'role' => 'technician',
            'password' => 'password', // hashed by model cast
        ]);
    }
}
