<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Category;
use App\Models\Todo;
use Illuminate\Database\Seeder;
use App\Models\User;
use Illuminate\Support\Str;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        user::create(
            [
                'name'              => fake()->name(),
                'email'             => fake()->unique()->safeEmail(),
                'email_verified_at' => now(),
                'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                // password
                'remember_token'    => Str::random(10),
                'is_admin'          => true,
            ]
        );

        user::create(
            [
                'name'              => 'admin',
                'email'             => 'admin@admin.com',
                'email_verified_at' => now(),
                'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                // password
                'remember_token'    => Str::random(10),
                'is_admin'          => true,
            ]
        );

        user::create(
            [
                'name'              => 'Askar Kadir',
                'email'             => 'askar@admin.com',
                'email_verified_at' => now(),
                'password'          => '$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi',
                // password
                'remember_token'    => Str::random(10),
                'is_admin'          => false,
            ]
        );



        user::factory(100)->create();
        Category::factory(100)->create();
        Todo::factory(500)->create();
    }
}