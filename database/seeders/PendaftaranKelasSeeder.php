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
        $users = DB::table('users')->where('role', 'user')->pluck('id');
        
        foreach ($users as $userId) {
            try {
                DB::table('pendaftaran_kelas')->insert([
                    'user_id' => $userId,
                    'kelas_olahraga_id' => rand(1, 6),
                    'tanggal_daftar' => now(),
                    'created_at' => now(),
                    'updated_at' => now()
                ]);
            } catch (\Exception $e) {
                continue;
            }
        }        
    }}
