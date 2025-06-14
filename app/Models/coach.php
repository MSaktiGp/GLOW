<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;

    protected $fillable = [
        'name',
        'specialty',
        // Tambahkan field fillable lainnya sesuai tabel coaches Anda
    ];

    public function kelasOlahraga()
    {
        return $this->hasMany(KelasOlahraga::class, 'coach_id');
    }
}