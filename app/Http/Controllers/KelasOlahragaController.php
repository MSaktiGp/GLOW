<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelasOlahraga;
use App\Models\JadwalKelas;

class KelasOlahragaController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'coach_id' => 'required|exists:coaches,id',
            'nama_kelas' => 'required|string|max:255',
            'kapasitas' => 'required|integer|min:1',
            'jam_mulai' => 'required|date',
            'jam_selesai' => 'required|date|after:jam_mulai',
        ]);

        // Simpan ke tabel kelas_olahragas
        $kelas = KelasOlahraga::create([
            'coach_id' => $request->coach_id,
            'nama_kelas' => $request->nama_kelas,
            'kapasitas' => $request->kapasitas,
        ]);

        // Simpan ke tabel jadwal_kelas
        JadwalKelas::create([
            'kelas_olahraga_id' => $kelas->id,
            'waktu_mulai' => $request->jam_mulai,
            'waktu_selesai' => $request->jam_selesai,
            'status' => 'aktif',
        ]);

        return redirect()->back()->with('success', 'Jadwal coach berhasil ditambahkan!');
    }
}
