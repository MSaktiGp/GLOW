<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JenisKelasSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $jenisKelas = [
            [
                'jenis_kelas' => 'Yoga',
                'harga' => 150000,
            ],
            [
                'jenis_kelas' => 'Trampoline',
                'harga' => 100000,
            ],
            [
                'jenis_kelas' => 'Zumba',
                'harga' => 120000,
            ],
            [
                'jenis_kelas' => 'Pilates',
                'harga' => 180000,
            ],
            [
                'jenis_kelas' => 'Poundfit',
                'harga' => 100000,
            ],
            [
                'jenis_kelas' => 'Tabata',
                'harga' => 100000,            ],
        ];
        DB::table('jenis_kelas')->insert($jenisKelas);
    }
}
