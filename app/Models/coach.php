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
        'phone', // Tambahkan jika ada di migrasi coaches
    ];

    public function kelasOlahragas()
    {
        return $this->hasMany(KelasOlahraga::class, 'coach_id');
    }
}