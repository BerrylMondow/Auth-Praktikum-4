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
        \App\Models\User::factory()->create ([
            'name' => 'Berryl Mondow',
            'email' => 'admin@admin',
            'password' => bcrypt('adminadmin')
        ]);

        $this->call([
            PositionSeeder::class,
            EmployeeSeeder::class
        ]);
    }
}
