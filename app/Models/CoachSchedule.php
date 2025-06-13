<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CoachSchedule extends Model
{
    use HasFactory;

    protected $table = 'coach_schedules';

    protected $fillable = [
        'coach_id',
        'kelas_olahraga_id',
        'waktu_mulai',
        'waktu_selesai',
        'status',
    ];

    public function coach()
    {
        return $this->belongsTo(Coach::class, 'coach_id');
    }

    public function kelasOlahraga()
    {
        return $this->belongsTo(KelasOlahraga::class, 'kelas_olahraga_id');
    }
}