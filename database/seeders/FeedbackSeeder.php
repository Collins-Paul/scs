<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class FeedbackSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $userIds = DB::table('users')->pluck('id')->toArray();
        $complaintIds = DB::table('complaints')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            DB::table('feedback')->insert([
                'user_id' => $faker->randomElement($userIds),
                'complaint_id' => $faker->randomElement($complaintIds),
                'comment' => $faker->paragraph,
                'status' => $faker->randomElement(['pending', 'resolved', 'closed']),
                'attachment' => $faker->optional()->filePath(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
