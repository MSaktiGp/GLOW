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
            return $this->belongsTo(User::class,  'user_id');;
        }
    
        public function kelasOlahraga()
        {
            return $this->belongsTo(KelasOlahraga::class, 'kelas_olahraga_id');;
        }
    
}
