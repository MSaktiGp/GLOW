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
            $table->foreignId('coach_id')->nullable()->constrained('coaches')->onDelete('set null'); // Coach yang mengajar kelas ini
            $table->string('nama_kelas');
            $table->integer('kapasitas')->default(0);
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