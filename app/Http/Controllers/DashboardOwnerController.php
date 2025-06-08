<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashboardOwnerController extends Controller
{
    public function index()
    {
        // Kirim data dummy (bisa diganti dengan database)
        $peserta = [
            ['nama' => 'Ani', 'kelas' => 'Yoga', 'mulai' => '07:00', 'selesai' => '08:00', 'status' => 'Selesai'],
            ['nama' => 'Budi', 'kelas' => 'Pilates', 'mulai' => '08:00', 'selesai' => '09:00', 'status' => 'Belum'],
        ];

        return view('dashboard-owner', compact('peserta'));
    }
}
