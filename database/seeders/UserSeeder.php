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
            'name' => 'Shazia Putri Pratiwi',
            'username' => 'shazptri',
            'email' => 'ptwishaa@gmail.com',
            'password' => Hash::make('Owner1234'),
            'phone' => '0812783143293',
            'address' => 'Jl. Semangka, Perumahan Nanas No. 123',
            'role' => 'owner',
            'email_verified_at' => now(),
        ]);

        $names = ['John', 'Emma', 'Michael', 'Sophia', 'William', 'Olivia', 'James', 'Ava', 'Alexander', 'Isabella'];
        $streets = ['Maple', 'Oak', 'Pine', 'Cedar', 'Elm', 'Birch', 'Willow', 'Spruce', 'Cherry', 'Ash'];
        
        for ($i = 1; $i <= 40; $i++) {
            $randomName = $names[array_rand($names)] . ' ' . chr(rand(65, 90));
            $phoneNumber = '08' . rand(1000000000, 9999999999);
            $streetNumber = rand(1, 999);
            $randomStreet = $streets[array_rand($streets)];
            
            DB::table('users')->insert([
                'name' => $randomName,
                'username' => 'user' . $i,
                'email' => 'user' . $i . '@gmail.com',
                'password' => Hash::make('user1234'),
                'phone' => $phoneNumber,
                'address' => 'Jl. ' . $randomStreet . ' No. ' . $streetNumber,
                'role' => 'user',
                'email_verified_at' => now(),
            ]);
        }    }
}
