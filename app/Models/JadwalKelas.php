<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalKelas extends Model
{
    protected $fillable = [
        'kelas_olahraga_id', 
        'tanggal', 
        'jam_mulai', 
        'jam_selesai', 
        'status'
    ];

    public function kelasOlahraga()
    {
        return $this->belongsTo(KelasOlahraga::class);
    }
}
