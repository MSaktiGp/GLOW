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
            $table->enum('jenis_kelas', ['pilates', 'zumba', 'tabata', 'trampoline', 'poundfit', 'yoga'])->nullable();
            $table->integer('kapasitas')->default(0);
            $table->integer('harga')->default(0);
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