<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class UserSeeder extends Seeder

{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('users')->insert([
            'name' => 'OwnerX',
            'username' => 'owner123',
            'email' => 'owner123@gmail.com',
            'password' => Hash::make('Owner1234'),
            'phone' => '081234567890',
            'address' => 'Jl. Owner No. 123',
            'role' => 'owner',
            'email_verified_at' => now(),
        ]);

        for ($i = 1; $i <= 20; $i++) {
            DB::table('users')->insert([
                'name' => 'UserA',
                'username' => 'user' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'password' => Hash::make('user1234'),
                'phone' => '081234567890',
                'address' => 'Jl. User No. 123',
                'role' => 'user',
                'email_verified_at' => now(),
            ]);
        }
    }
}
