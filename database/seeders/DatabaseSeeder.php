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

        User::factory()->create([
            'first_name' => 'First',
            'last_name' => 'Last',
            'email' => 'test@example.com',
            'password' => 'password',
        ]);

        // Job::factory(10)->create();

        $this->call(JobSeeder::class);

        // php artisan db:seed --class=JobSeeder
    }
}
