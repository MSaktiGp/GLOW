<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasOlahraga extends Model
{
    use HasFactory;

    protected $table = 'kelas_olahragas';

    protected $fillable = [
        'coach_id',
        'nama_kelas',
        'jenis_kelas', // Ditambahkan
        'kapasitas',
        'tanggal',     // Ditambahkan
        'jam_mulai',   // Ditambahkan
        'jam_selesai', // Ditambahkan
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class, 'coach_id');
    }

    public function jadwalKelas()
    {
        return $this->hasMany(JadwalKelas::class, 'kelas_olahraga_id');
    }
}