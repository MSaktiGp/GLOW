<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KelasOlahraga extends Model
{
    use HasFactory;

    protected $table = 'kelas_olahragas'; // Pastikan nama tabel benar

    protected $fillable = [
        'coach_id',
        'jenis_kelas_id',
        'nama_kelas',
        'kapasitas',
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class, 'coach_id');
    }

    public function jadwalKelas()
    {
        return $this->hasMany(JadwalKelas::class, 'kelas_olahraga_id');
    }
    public function jenisKelas()
    {
        return $this->belongsTo(JenisKelas::class, 'jenis_kelas_id');
    }
}