<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class JenisKelas extends Model
{
    protected $table = 'jenis_kelas';

    protected $guarded = [];
    public function kelasOlahraga()
    {
        return $this->hasMany(KelasOlahraga::class, 'jenis_kelas_id');
    }
}
