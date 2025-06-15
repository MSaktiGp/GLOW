<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\JadwalKelas;
use Illuminate\Support\Facades\DB;


class DashboardOwnerController extends Controller
{
   public function index()
{
    // Ambil data semua jadwal kelas beserta info kelas
    $jadwalKelas = JadwalKelas::with('kelasOlahraga')->get();

    // Ambil data jumlah per jenis kelas (Yoga, Zumba, dll.)
    $chartData = DB::table('jadwal_kelas')
        ->join('kelas_olahragas', 'jadwal_kelas.kelas_olahraga_id', '=', 'kelas_olahragas.id')
        ->select('kelas_olahragas.jenis_kelas', DB::raw('count(*) as total'))
        ->groupBy('kelas_olahragas.jenis_kelas')
        ->get();

    return view('dashboard-owner', [
        'jadwalKelas' => $jadwalKelas,
        'chartData' => $chartData
    ]);
}
}
