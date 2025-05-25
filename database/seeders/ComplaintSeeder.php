<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComplaintSeeder extends Seeder
{
    public function run()
    {
        $faker = Faker::create();
        $userIds = DB::table('users')->pluck('id')->toArray();

        for ($i = 0; $i < 10; $i++) {
            $status = $faker->randomElement(['pending', 'resolved', 'closed']);
            $resolvedBy = $status === 'resolved' || $status === 'closed' ? $faker->randomElement($userIds) : null;
            $closedBy = $status === 'closed' ? $faker->randomElement($userIds) : null;

            DB::table('complaints')->insert([
                'user_id' => $faker->randomElement($userIds),
                'title' => $faker->sentence(4),
                'description' => $faker->paragraph,
                'status' => $status,
                'attachment' => $faker->optional()->filePath(),
                'priority' => $faker->randomElement(['low', 'medium', 'high']),
                'resolution' => $status !== 'pending' ? $faker->sentence(5) : null,
                'resolved_by' => $resolvedBy,
                'resolved_at' => $status === 'resolved' || $status === 'closed' ? $faker->dateTimeThisYear() : null,
                'closed_by' => $closedBy,
                'closed_at' => $status === 'closed' ? $faker->dateTimeThisYear() : null,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
