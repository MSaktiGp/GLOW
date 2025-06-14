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
                        'coach_id' => 1,
                        'nama_kelas' => 'Yoga',
                        'kapasitas' => 20,
                        'deskripsi' => 'Kelas yoga yang menenangkan',
                        'harga' => 150000,
                    ],
                    [
                        'coach_id' => 2,
                        'nama_kelas' => 'Zumba',
                        'kapasitas' => 25,
                        'deskripsi' => 'Kelas dance fitness yang menyenangkan',
                        'harga' => 120000,
                    ],
                    [
                        'coach_id' => 3,
                        'nama_kelas' => 'Body Combat',
                        'kapasitas' => 15,
                        'deskripsi' => 'Kelas cardio dengan gerakan bela diri',
                        'harga' => 180000,                    
                    ],
                ];
        
                DB::table('kelas_olahragas')->insert($kelasOlahraga);
        
    }
}
