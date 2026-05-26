<?php

namespace Database\Seeders;

use App\Models\User;
use App\Models\Agent;
use App\Models\Agent_regency;
use App\Models\Province;
use App\Models\Regency;
use App\Models\District;
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

        User::firstOrCreate(
            ['email' => 'catluminate@gmail.com'],
            [
                'fullname' => 'Catluminate',
                'username' => 'catluminate',
                'telp_number' => '081234567891',
                'profile' => 'profile/1775103083.jpg',
                'role' => 'users',
                'email_verified_at' => now(),
                'password' => '12345',
            ]);
        
        User::firstOrCreate(
            ['email' => 'notary@gmail.com'],
            [
                'fullname' => 'Notary',
                'username' => 'notary',
                'telp_number' => '081234567892',
                'profile' => 'profile/1775103083.jpg',
                'role' => 'notary',
                'email_verified_at' => now(),
                'password' => '12345',
            ]);
        
            $user = User::firstOrCreate(
                ['email' => 'agent@gmail.com'],
                [
                    'fullname' => 'Agent',
                    'username' => 'agent',
                    'telp_number' => '081234567893',
                    'profile' => 'profile/1775103083.jpg',
                    'role' => 'agent',
                    'email_verified_at' => now(),
                    'password' => '12345',
                ]);

                if ($user->role === 'agent') {
                    $agent = Agent::firstOrCreate([
                        'user_id' => $user->id
                    ]);

                    $province = Province::create([
                        'name' => 'Jawa Barat'
                    ]);

                    $regency = Regency::create([
                        'province_id' => $province->id,
                        'name' => 'Bandung'
                    ]);

                    $district = District::create([
                        'regency_id' => $regency->id,
                        'name' => 'Coblong',
                        'postal_code' => '40135'
                    ]);

                    Agent_regency::firstOrCreate([
                        'agent_id' => $agent->id,
                        'regency_id' => $regency->id
                    ]);

                }
            }
}
