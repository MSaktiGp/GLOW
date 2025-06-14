<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CoachSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $coaches = [
            [
                'name' => 'John Doe',
                'phone' => '1234567890',
                'address' => 'Jl. Contoh No. 123',
                'specialization' => 'Yoga',
            ],
            [
                'name' => 'Jane Smith',
                'phone' => '9876543210',
                'address' => 'Jl. Lainnya No. 456',
                'specialization' => 'Pilates',
            ],
        ];
    }
}
