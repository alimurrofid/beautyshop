<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use Illuminate\Database\Seeder;
use Database\Seeders\ProductSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::create([
            'name' => 'admin',
            'phone_number' => '081234567890',
            'email' => 'admin@testing.com',
            'password' => bcrypt('admin'),
            'role' => 1,
        ]);
        User::factory(10)->create();

        $this->call([
            // ProductSeeder::class,
        ]);
    }
}
