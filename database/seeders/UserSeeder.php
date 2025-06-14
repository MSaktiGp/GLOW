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
            'role' => 'owner'
        ]);
        
        DB::table('users')->insert([
            'name' => 'UserA',
            'username' => 'user123',
            'email' => 'user123@gmail.com', 
            'password' => Hash::make('user1234'),
            'role' => 'user'
        ]);
        
    }
}
