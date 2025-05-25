<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class NotificationSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $userIds = DB::table('users')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            DB::table('notifications')->insert([
                'id' => $faker->uuid,
                'type' => $faker->randomElement(['ComplaintUpdate', 'FeedbackReceived', 'RatingSubmitted']),
                'notifiable_type' => 'App\\Models\\User',
                'notifiable_id' => $faker->randomElement($userIds),
                'data' => json_encode(['message' => $faker->sentence]),
                'read_at' => $faker->optional()->dateTimeThisYear(),
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
