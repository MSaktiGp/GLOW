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
            ->select(
                'jadwal_kelas.*',
                'kelas_olahragas.nama_kelas',
                'kelas_olahragas.jenis_kelas',
                'kelas_olahragas.harga',
                'kelas_olahragas.kapasitas',
                'coaches.name as coach_name'
            )
            ->get();

        // Ambil data pendaftaran_kelas untuk pie chart
        $pendaftaranKelas = DB::table('pendaftaran_kelas')
            ->join('kelas_olahragas', 'pendaftaran_kelas.kelas_olahraga_id', '=', 'kelas_olahragas.id')
            ->select(
                'kelas_olahragas.jenis_kelas',
                DB::raw('count(*) as total')
            )
            ->groupBy('kelas_olahragas.jenis_kelas')
            ->get();

        $pendaftaranKelasList = \App\Models\PendaftaranKelas::with([
            'user',
            'kelasOlahraga.jadwalKelas' => function ($query) {
                $query->where('status', 'Aktif')->orderBy('tanggal')->orderBy('jam_mulai');
            }
        ])->get();


        return view('owner.dashboard-owner', [
            'jadwalKelas' => $jadwalKelas,
            'pendaftaranKelas' => $pendaftaranKelas,
            'pendaftaranKelasList' => $pendaftaranKelasList,
        ]);
    }
}