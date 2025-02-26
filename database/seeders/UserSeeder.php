<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            [
                'name' => 'Admin User',
                'username' => 'Admin',
                'email' => 'admin@test.com',
                'role' => 'admin',
                'status' => 'active',
                'password' => bcrypt('admin'),
            ],
            [
                'name' => 'Vendor user',
                'username' => 'Vendor',
                'email' => 'vendor@test.com',
                'role' => 'vendor',
                'status' => 'active',
                'password' => bcrypt('vendor'),
            ],
            [
                'name' => 'User User',
                'username' => 'User',
                'email' => 'user@test.com',
                'role' => 'user',
                'status' => 'active',
                'password' => bcrypt('user'),
            ],
        ]);
    }
}
