<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('kelas_olahragas', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coach_id')->constrained('coaches')->onDelete('cascade');
            $table->string('nama_kelas');
            $table->string('jenis_kelas')->nullable(); // Ditambahkan berdasarkan tabel blade Anda
            $table->integer('kapasitas');
            $table->date('tanggal'); // Ditambahkan berdasarkan tabel blade Anda
            $table->time('jam_mulai'); // Diubah menjadi time
            $table->time('jam_selesai'); // Diubah menjadi time
            $table->integer('kapasitas')->default(0);
            $table->text('deskripsi')->nullable();
            $table->integer('harga');

            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kelas_olahragas');
    }
};