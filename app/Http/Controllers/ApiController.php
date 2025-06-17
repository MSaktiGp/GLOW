<?php

namespace App\Http\Controllers;

use App\Models\Coach;
use App\Models\JenisKelas;
use App\Models\JadwalKelas;
use Illuminate\Http\Request;
use App\Models\KelasOlahraga;
use Illuminate\Support\Facades\DB;

class ApiController extends Controller
{
    public function showModalBody(Request $request)
    {
        $id = $request->id;
        $kelas = DB::table('jadwal_kelas')
            ->join('kelas_olahragas', 'jadwal_kelas.kelas_olahraga_id', '=', 'kelas_olahragas.id')
            ->join('coaches', 'kelas_olahragas.coach_id', '=', 'coaches.id')
            ->join('jenis_kelas', 'kelas_olahragas.jenis_kelas_id', '=', 'jenis_kelas.id')
            ->select(
                'jenis_kelas.id as jenis_kelas_id',
                'jenis_kelas.jenis_kelas',
                'kelas_olahragas.id as kelas_olahragas_id',
                'kelas_olahragas.nama_kelas',
                'kelas_olahragas.kapasitas',
                'coaches.id as coach_id',
                'coaches.name',
                'jadwal_kelas.id',
                'jadwal_kelas.tanggal',
                'jadwal_kelas.jam_mulai',
                'jadwal_kelas.jam_selesai',
                'jenis_kelas.harga',
                'jadwal_kelas.status',
            )
            ->where('jadwal_kelas.id', '=', $id)->first();
        $jenisKelas = JenisKelas::all();
        $jadwalKelas = JadwalKelas::all();
        $kelasOlahraga = KelasOlahraga::all();
        $coach = Coach::all();
        $data = [
            'jenisKelas' => $jenisKelas,
            'kelas' => $kelas,
            'jadwalKelas' => $jadwalKelas,
            'coach' => $coach,
            'kelasOlahraga' => $kelasOlahraga,
        ];
        // return response()->json($data);
        return view('partial.modal-edit', $data)->render();
    }
}
