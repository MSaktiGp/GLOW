<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JadwalKelas extends Model
{
    protected $fillable = ['user_id', 'kelas_olahraga_id', 'tanggal', 'jam_mulai', 'jam_selesai', 'status'];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function kelasOlahraga()
    {
        return $this->belongsTo(KelasOlahraga::class);
    }
    public function coach()
    {
        return $this->belongsTo(Coach::class);
    }

}
