<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Faker\Factory as Faker;

class UserSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();

        for ($i = 0; $i < 10; $i++) {
            DB::table('users')->insert([
                'firstname' => $faker->firstName,
                'lastname' => $faker->lastName,
                'gender' => $faker->randomElement(['male', 'female', 'other']),
                'username' => $faker->unique()->userName,
                'email' => $faker->unique()->safeEmail,
                'email_verified_at' => $faker->optional(0.8)->dateTimeThisYear(),
                'password' => Hash::make('password123'), // Default password for testing
                'remember_token' => \Str::random(10),
                'current_team_id' => null,
                'profile_photo_path' => $faker->optional(0.3)->imageUrl(200, 200),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
