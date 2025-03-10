<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\AdminUser;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        AdminUser::updateOrCreate([
            'name' => 'John Doe',
            'email' => 'jon@gmail.com',
            'password' => bcrypt('1234'),
        ]);

        AdminUser::factory()->count(1)->create();
    }
}
