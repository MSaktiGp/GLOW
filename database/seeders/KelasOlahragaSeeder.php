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
                'nama_kelas' => 'Silence in the Heart',
                'jenis_kelas_id' => 1,
                'kapasitas' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 2,
                'coach_id' => 2,
                'nama_kelas' => 'Zumba Dance',
                'jenis_kelas_id' => 2,
                'kapasitas' => 25,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 3,
                'coach_id' => 3,
                'nama_kelas' => 'Pilates Basic',
                'jenis_kelas_id' => 3,
                'kapasitas' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 4,
                'coach_id' => 4,
                'nama_kelas' => 'Trampoline Fitness',
                'jenis_kelas_id' => 4,
                'kapasitas' => 15,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 5,
                'coach_id' => 5,
                'nama_kelas' => 'PoundFit Workout',
                'jenis_kelas_id' => 5,
                'kapasitas' => 20,
                'created_at' => now(),
                'updated_at' => now()
            ],
            [
                'id' => 6,
                'coach_id' => 6,
                'nama_kelas' => 'Tabata Training',
                'jenis_kelas_id' => 6,
                'kapasitas' => 18,
                'created_at' => now(),
                'updated_at' => now()            
            ]

            // $table->id();
            // $table->foreignId('coach_id')->constrained('coaches')->onDelete('cascade');
            // $table->foreignId('jenis_kelas_id')->constrained('jenis_kelas')->onDelete('cascade');
            // $table->string('nama_kelas');
            // $table->integer('kapasitas')->default(0);
            // $table->timestamps();

        ];
        DB::table('kelas_olahragas')->insert($kelasOlahraga);
    }
}
