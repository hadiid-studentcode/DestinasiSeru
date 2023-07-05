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
        // \App\Models\User::factory(10)->create();

        \App\Models\User::factory()->create([
            'username' => 'fikri',
            'email' => 'fikri@gmail.com',
            'first_name' => 'Fikri',
            'last_name' => 'Hidayat',
            'password' => bcrypt('admin123'),
            'picture' => ''
        ]);
    }
}
