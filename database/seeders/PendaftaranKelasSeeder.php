<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PendaftaranKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        for ($i = 1; $i <= 60; $i++) {
            try {
                DB::table('pendaftaran_kelas')->insert([
                    'user_id' => $i,
                    'kelas_olahraga_id' => rand(1, 3),
                    'tanggal_daftar' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } catch (\Exception $e) {
                continue;
            }
        }        
    }
}
