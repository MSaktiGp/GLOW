<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class KelasOlahragaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $kelasOlahraga = [
            [
                'id' => 1,
                'coach_id' => 1,
                'nama_kelas' => 'Yoga Pagi',
                'jenis_kelas' => 'Yoga',
                'kapasitas' => 20,
                'harga' => 150000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'coach_id' => 2,
                'nama_kelas' => 'Zumba Dance',
                'jenis_kelas' => 'Zumba',
                'kapasitas' => 25,
                'harga' => 120000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'coach_id' => 3,
                'nama_kelas' => 'Pilates Basic',
                'jenis_kelas' => 'Pilates',
                'kapasitas' => 15,
                'harga' => 180000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'coach_id' => 4,
                'nama_kelas' => 'Trampoline Fitness',
                'jenis_kelas' => 'Trampoline',
                'kapasitas' => 15,
                'harga' => 160000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'coach_id' => 5,
                'nama_kelas' => 'PoundFit Workout',
                'jenis_kelas' => 'poundfit',
                'kapasitas' => 20,
                'harga' => 140000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'coach_id' => 6,
                'nama_kelas' => 'Tabata Training',
                'jenis_kelas' => 'tabata',
                'kapasitas' => 18,
                'harga' => 170000,
                'created_at' => now(),
                'updated_at' => now()
            ]

        ];
        DB::table('kelas_olahragas')->insert($kelasOlahraga);
    }
}
