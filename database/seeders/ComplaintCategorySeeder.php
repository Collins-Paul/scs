<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Faker\Factory as Faker;

class ComplaintCategorySeeder extends Seeder
{
    public function run()
    {
        $categories = [
            'Academic Issues',
            'Facility Maintenance',
            'Student Services',
            'Financial Concerns',
            'Staff Misconduct',
            'Campus Safety',
            'Food Services',
            'Housing Issues',
            'Transportation',
            'Other',
        ];

        foreach ($categories as $category) {
            DB::table('complaint_categories')->insert([
                'name' => $category,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
