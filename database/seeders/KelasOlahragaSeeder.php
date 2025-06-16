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
                'jenis_kelas' => 'yoga',
                'kapasitas' => 20,
                'harga' => 150000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'coach_id' => 2,
                'nama_kelas' => 'Zumba Dance',
                'jenis_kelas' => 'zumba',
                'kapasitas' => 25,
                'harga' => 120000,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'coach_id' => 3,
                'nama_kelas' => 'Pilates Basic',
                'jenis_kelas' => 'pilates',
                'kapasitas' => 15,
                'harga' => 180000,
                'created_at' => now(),
                'updated_at' => now()
            ],
        ];
        DB::table('kelas_olahragas')->insert($kelasOlahraga);
    }
}
