<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKelas extends Model
{
    use HasFactory;

    protected $table = 'jadwal_kelas';

    protected $fillable = [
        'kelas_olahraga_id',
        'waktu_mulai',
        'waktu_selesai',
        'status',
    ];

    public function kelasOlahraga()
    {
        return $this->belongsTo(KelasOlahraga::class, 'kelas_olahraga_id');
    }
}