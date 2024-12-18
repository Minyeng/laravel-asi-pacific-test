<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

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

        DB::table('users')->insert([
            'name' => 'Fulan',
            'email' => 'fulan@email.com',
            'password' => bcrypt('123456'),
            'remember_token' => bcrypt('123456'),
        ]);

        for ($x = 0; $x < 5; $x++) {
            DB::table('products')->insert([
                'name' => ucfirst(fake()->word()),
                'description' => fake()->sentence(),
                'price' => fake()->randomNumber(2, false)*100,
            ]);
        }


    }
}
