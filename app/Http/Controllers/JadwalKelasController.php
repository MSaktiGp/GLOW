<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKelas;
use App\Models\KelasOlahraga;
use App\Models\Coach;
use App\Models\CoachSchedule; 
use Carbon\Carbon;

class JadwalKelasController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // Data untuk Jadwal Kelas
        $jadwalKelas = JadwalKelas::with(['kelasOlahraga.coach'])->get();

        // Data untuk Jadwal Coach
        $coachSchedules = CoachSchedule::with(['coach', 'kelasOlahraga'])->get(); // Eager load relationships

        // Data untuk dropdown di modal
        $kelasOlahragaList = KelasOlahraga::with('coach')->get(); // Load coach juga untuk tampilan di dropdown
        $coachList = Coach::all();

        return view('maintenanceJadwal', compact('jadwalKelas', 'coachSchedules', 'kelasOlahragaList', 'coachList'));
    }

    /**
     * Store a newly created Jadwal Kelas resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'kelas_olahraga_id' => 'required|exists:kelas_olahragas,id',
            'waktu_mulai' => 'required|date_format:Y-m-d\TH:i',
            'waktu_selesai' => 'required|date_format:Y-m-d\TH:i|after:waktu_mulai',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        JadwalKelas::create($validatedData);

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Kelas berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified Jadwal Kelas resource.
     */
    public function edit(JadwalKelas $jadwalKelas)
    {
        $kelasOlahragaList = KelasOlahraga::with('coach')->get();
        return response()->json([
            'jadwal' => $jadwalKelas,
            'kelas_olahraga_list' => $kelasOlahragaList,
        ]);
    }

    /**
     * Update the specified Jadwal Kelas resource in storage.
     */
    public function update(Request $request, JadwalKelas $jadwalKelas)
    {
        $validatedData = $request->validate([
            'kelas_olahraga_id' => 'required|exists:kelas_olahragas,id',
            'waktu_mulai' => 'required|date',
            'waktu_selesai' => 'required|date|after:waktu_mulai',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $jadwalKelas->update($validatedData);

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Kelas berhasil diperbarui!');
    }

    /**
     * Remove the specified Jadwal Kelas resource from storage.
     */
    public function destroy(JadwalKelas $jadwalKelas)
    {
        $jadwalKelas->delete();

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Kelas berhasil dihapus!');
    }
}
