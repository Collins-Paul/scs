<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    public function run()
    {
        $this->call([
            UserSeeder::class,
            ComplaintCategorySeeder::class,
            ComplaintSeeder::class,
            FeedbackSeeder::class,
            RatingSeeder::class,
            NotificationSeeder::class,
            RoleSeeder::class,
            ComplaintResponseSeeder::class,
        ]);
    }
}
