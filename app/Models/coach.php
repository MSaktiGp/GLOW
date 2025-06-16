<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $table = 'coaches';

    protected $fillable = [
        'name',
        'phone',
        'adddress',
        'specialization',
    ];

    public function kelasOlahraga()
    {
        return $this->hasMany(KelasOlahraga::class, 'coach_id');
    }
    public function jadwalKelas()
    {
        return $this->hasMany(JadwalKelas::class);
    }
}