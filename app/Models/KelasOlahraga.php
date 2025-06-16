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
        'nama_kelas',
        'jenis_kelas',
        'kapasitas',
        'tanggal',
        'jam_mulai',
        'jam_selesai',
        'harga',
        'status',
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