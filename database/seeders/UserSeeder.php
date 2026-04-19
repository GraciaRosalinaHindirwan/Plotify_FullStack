<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::firstOrCreate(
            ['email' => 'admin@gmail.com'],
            [
            'fullname' => 'Admin',
            'username' => 'admin',
            'telp_number' => '081234567890',
            'profile' => 'profile/1775103083.jpg',
            'role' => 'admin',
            'email_verified_at' => now(),
            'password' => '12345678',]);
    }
}
