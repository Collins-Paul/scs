<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    public function run()
    {
        $userIds = DB::table('users')->pluck('id')->toArray();
        $roles = [
            ['user_id' => $userIds[0], 'role' => 'admin'],
            ['user_id' => $userIds[1], 'role' => 'admin'],
            ['user_id' => $userIds[2], 'role' => 'supervisor'],
            ['user_id' => $userIds[3], 'role' => 'supervisor'],
            ['user_id' => $userIds[4], 'role' => 'student'],
            ['user_id' => $userIds[5], 'role' => 'student'],
            ['user_id' => $userIds[6], 'role' => 'student'],
            ['user_id' => $userIds[7], 'role' => 'student'],
            ['user_id' => $userIds[8], 'role' => 'student'],
            ['user_id' => $userIds[9], 'role' => 'student'],
        ];

        foreach ($roles as $role) {
            DB::table('roles')->insert([
                'user_id' => $role['user_id'],
                'role' => $role['role'],
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
