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
        'address',
        'specialization',
    ];

    public function kelasOlahragas()
    {
        return $this->hasMany(KelasOlahraga::class, 'coach_id');
    }

    public function schedules()
    {
        return $this->hasMany(Schedule::class, 'coach_id');
    }

    public function members()
    {
        return $this->belongsToMany(Member::class, 'coach_member', 'coach_id', 'member_id');
    }
}