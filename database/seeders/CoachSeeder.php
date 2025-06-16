<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coaches = [];
        $names = ['Claura Sintiya', 'Kayla Zahra', 'Rebeca Laura', 'Dela Putri', 'Rachel Salsabila', 'Stevi Putri'];
        $specializations = ['Yoga', 'Pilates', 'Zumba', 'Poundfit', 'Tabata', 'Trampoline'];
        
        for ($i = 0; $i < 5; $i++) {
            $coaches[] = [
                'name' => $names[$i],
                'phone' => '08' . rand(1000000000, 9999999999),
                'address' => 'Jl. ' . chr(rand(65, 90)) . ' No. ' . rand(1, 999),
                'specialization' => $specializations[$i],
                'created_at' => now(),
                'updated_at' => now()
            ];
        }        DB::table('coaches')->insert($coaches);
    }
}
