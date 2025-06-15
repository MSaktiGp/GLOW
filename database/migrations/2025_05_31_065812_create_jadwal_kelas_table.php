<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    public function up(): void
    {
        
        Schema::create('jadwal_kelas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('kelas_olahraga_id')->constrained('kelas_olahragas')->onDelete('cascade');
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->string('status')->default('Aktif');
            // Asumsi 'Nama Peserta' di Jadwal Kelas mengacu pada peserta dari jadwal spesifik itu.
            // Jika Anda memiliki tabel 'participants', Anda mungkin ingin menambahkan foreign key di sini.
            // Untuk saat ini, mari kita asumsikan itu berasal dari KelasOlahraga (yang memiliki coach).
            $table->timestamps();
        });
    }
    public function down(): void
    {
        Schema::dropIfExists('jadwal_kelas');
    }
};