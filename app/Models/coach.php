<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Coach extends Model
{
    use HasFactory;
    protected $table = 'coaches';

    protected $table = 'coaches';
    
    protected $fillable = [
        'name',
        'phone',
        'adddress',
        'specialization',
    ];

    public function kelasOlahraga()
    {
        return $this->hasMany(KelasOlahraga::class, 'coaches_id');
    }
}