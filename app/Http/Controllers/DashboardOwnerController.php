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
    $jadwalKelas = DB::table('kelas_olahragas')->get();
    // Ambil data jumlah per jenis kelas (Yoga, Zumba, dll.)
    $chartData = DB::table('kelas_olahragas')
        ->select('nama_kelas', DB::raw('count(*) as total'))
        ->groupBy('nama_kelas')
        ->get();

    return view('owner.dashboard-owner', [
        'jadwalKelas' => $jadwalKelas,
        'chartData' => $chartData
    ]);
}
}
