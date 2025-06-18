<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class DashboardOwnerController extends Controller
{
    public function index()
    {
        // Ambil semua jadwal dengan info kelas dan coach
        $jadwalKelas = DB::table('jadwal_kelas')
            ->join('kelas_olahragas', 'jadwal_kelas.kelas_olahraga_id', '=', 'kelas_olahragas.id')
            ->join('coaches', 'kelas_olahragas.coach_id', '=', 'coaches.id')
            ->join('jenis_kelas', 'kelas_olahragas.jenis_kelas_id', '=', 'jenis_kelas.id')
            ->select(
                'jadwal_kelas.*',
                'kelas_olahragas.nama_kelas',
                'jenis_kelas.jenis_kelas',
                'jenis_kelas.harga',
                'kelas_olahragas.kapasitas',
                'coaches.name as coach_name'
            )
            ->get();

        // Ambil data pendaftaran_kelas untuk pie chart
        $pendaftaranKelas = DB::table('pendaftaran_kelas')
            ->join('kelas_olahragas', 'pendaftaran_kelas.kelas_olahraga_id', '=', 'kelas_olahragas.id')
            ->join('jadwal_kelas', 'jadwal_kelas.kelas_olahraga_id', '=', 'kelas_olahragas.id')
            ->join('jenis_kelas', 'kelas_olahragas.jenis_kelas_id', '=', 'jenis_kelas.id')
            ->select(
                'jenis_kelas.jenis_kelas',
                DB::raw('count(*) as total')
            )
            ->groupBy('jenis_kelas.jenis_kelas')
            ->get();

        $pendaftaranKelasList = 
        DB::table('pendaftaran_kelas')
        ->join('users', 'pendaftaran_kelas.user_id', '=', 'users.id')
        ->join('kelas_olahragas', 'pendaftaran_kelas.kelas_olahraga_id', '=', 'kelas_olahragas.id')
        ->join('jadwal_kelas', 'jadwal_kelas.kelas_olahraga_id', '=', 'kelas_olahragas.id')
        ->join('jenis_kelas', 'kelas_olahragas.jenis_kelas_id', '=', 'jenis_kelas.id')
        ->select(
            'users.name',
            'jenis_kelas.jenis_kelas',
            'jadwal_kelas.jam_mulai',
            'jadwal_kelas.jam_selesai',
            'jadwal_kelas.status'
        )
        ->orderBy('jadwal_kelas.tanggal', 'asc')
        ->paginate(10);

        return view('owner.dashboard-owner', [
            'jadwalKelas' => $jadwalKelas,
            'pendaftaranKelas' => $pendaftaranKelas,
            'pendaftaranKelasList' => $pendaftaranKelasList,
        ]);
    }
}