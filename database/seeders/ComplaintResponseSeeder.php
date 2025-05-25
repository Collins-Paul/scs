<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComplaintResponseSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $userIds = DB::table('users')->pluck('id')->toArray();
        $complaintIds = DB::table('complaints')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            DB::table('complaint_responses')->insert([
                'user_id' => $faker->randomElement($userIds),
                'complaint_id' => $faker->randomElement($complaintIds),
                'response' => $faker->paragraph,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
