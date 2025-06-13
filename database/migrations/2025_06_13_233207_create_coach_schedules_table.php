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
        Schema::create('coach_schedules', function (Blueprint $table) {
            $table->id();
            $table->foreignId('coach_id')->constrained('coaches')->onDelete('cascade');
            $table->foreignId('kelas_olahraga_id')->nullable()->constrained('kelas_olahragas')->onDelete('set null'); // Opsional: Kelas yang akan diajar pada jadwal ini
            $table->dateTime('waktu_mulai');
            $table->dateTime('waktu_selesai');
            $table->string('status')->default('Available'); // Contoh status: 'Available', 'Booked', 'Off'
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('coach_schedules');
    }
};