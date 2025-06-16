<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class PendaftaranKelas extends Model
{
    protected $table = 'pendaftaran_kelas';

    protected $fillable = [
        'user_id',
        'kelas_olahraga_id',
        'tanggal_daftar'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
        ;
    }

    public function kelasOlahraga()
    {
        return $this->belongsTo(KelasOlahraga::class, 'kelas_olahraga_id');
        ;
    }
    public function jadwalKelas()
    {
        return $this->hasManyThrough(
            JadwalKelas::class,
            KelasOlahraga::class,
            'id', // Foreign key di kelas_olahragas
            'kelas_olahraga_id', // Foreign key di jadwal_kelas
            'kelas_olahraga_id', // Local key di pendaftaran_kelas
            'id' // Local key di kelas_olahragas
        );
    }

}