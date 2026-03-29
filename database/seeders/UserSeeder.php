<?php

namespace Database\Seeders;

use app\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        user::firstOrCreate([
            'fullname' => 'Admin',
            'email' => 'admin@gmail.com',
            'username' => 'admin',
            'telp_number' => '081234567890',
            'profile' => 'default.png',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => '12345678',]);
    }
}
