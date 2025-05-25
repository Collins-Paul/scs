<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class RatingSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $userIds = DB::table('users')->pluck('id')->toArray();
        $complaintIds = DB::table('complaints')->pluck('id')->toArray();
        $feedbackIds = DB::table('feedback')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            DB::table('ratings')->insert([
                'user_id' => $faker->randomElement($userIds),
                'complaint_id' => $faker->randomElement($complaintIds),
                'feedback_id' => $faker->randomElement($feedbackIds),
                'rating' => $faker->numberBetween(1, 5),
                'comment' => $faker->optional()->sentence(5),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
