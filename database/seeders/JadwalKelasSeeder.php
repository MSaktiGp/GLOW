<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class JadwalKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jadwalKelas = [
            [
                'kelas_olahraga_id' => 1,
                'tanggal' => '2024-01-15',
                'jam_mulai' => '08:00:00',
                'jam_selesai' => '09:00:00',
                'status' => 'Aktif',
            ],
            [
                'kelas_olahraga_id' => 2,
                'tanggal' => '2024-01-15',
                'jam_mulai' => '10:00:00',
                'jam_selesai' => '11:00:00',
                'status' => 'Aktif',
            ],
            [
                'kelas_olahraga_id' => 3,
                'tanggal' => '2024-01-15',
                'jam_mulai' => '13:00:00',
                'jam_selesai'=> '14:00:00',
                'status' => 'Aktif',
            ],
        ];
        
        DB::table('jadwal_kelas')->insert($jadwalKelas);
    }
}
