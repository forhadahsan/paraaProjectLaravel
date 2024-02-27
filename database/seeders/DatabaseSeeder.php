<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use App\Models\Website;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // \App\Models\User::factory(10)->create();

        \App\Models\User::create([
            'name' => 'Admin',
            'email' => 'admin@test.com',
            'password' => bcrypt('123123'),
            'role' => 'superadmin'
        ]);

        Website::create([
            'name' => "Paraa",
            'email' => "info@paraa.com",
            'url' => "https://paraa.com",
            'phone' => "(555) 123-4567",
            'address' => "21 Pine Street,New York, NY 10001"
        ]);
    }
}
