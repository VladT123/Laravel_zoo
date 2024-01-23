<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Animal;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory(10)->create();

        Animal::factory(7)->create();
        // Animal::create([
        //     'title' => 'Zebra',
        //     'name' => 'Marty',
        //     'age' => 22,
        //     'description' => 'White in black stripes'
        // ]);

        // Animal::create([
        //     'title' => 'Lion',
        //     'name' => 'Simba',
        //     'age' => 24,
        //     'description' => 'Hungry'
        // ]);


        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
