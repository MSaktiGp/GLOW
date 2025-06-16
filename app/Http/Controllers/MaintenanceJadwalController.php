<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\KelasOlahraga;
use App\Models\Coach;
use App\Models\JadwalKelas;
use Carbon\Carbon;

class MaintenanceJadwalController extends Controller
{
    public function index()
    {
        $jadwalKelas = JadwalKelas::with(['kelasOlahraga.coach'])->get();
        $kelasOlahragaList = KelasOlahraga::with('coach')->get();
        $coachList = Coach::all();

        return view('owner.maintenanceJadwal', compact('jadwalKelas', 'kelasOlahragaList', 'coachList'));
    }

    public function storeJadwalKelas(Request $request)
    {
        $validatedData = $request->validate([
            'kelas_olahraga_id' => 'required|exists:kelas_olahraga,id',
            'waktu_mulai' => 'required|date_format:Y-m-d\TH:i',
            'waktu_selesai' => 'required|date_format:Y-m-d\TH:i|after:waktu_mulai',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        JadwalKelas::create($validatedData);

    return redirect()->route(route: 'maintenance.jadwal')->with('success', 'Jadwal Kelas berhasil ditambahkan!');
    }

    public function editJadwalKelas(JadwalKelas $jadwalKelas)
    {
        $kelasOlahragaList = KelasOlahraga::with('coach')->get();
        return response()->json([
            'jadwal' => $jadwalKelas,
            'kelas_olahraga_list' => $kelasOlahragaList,
        ]);
    }

    public function updateJadwalKelas(Request $request, JadwalKelas $jadwalKelas)
    {
        $validatedData = $request->validate([
            'kelas_olahraga_id' => 'required|exists:kelas_olahraga,id',
            'waktu_mulai' => 'required|date_format:Y-m-d\TH:i',
            'waktu_selesai' => 'required|date_format:Y-m-d\TH:i|after:waktu_mulai',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $jadwalKelas->update($validatedData);

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Kelas berhasil diperbarui!');
    }

    public function destroyJadwalKelas(JadwalKelas $jadwalKelas)
    {
        $jadwalKelas->delete();

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Kelas berhasil dihapus!');
    }

    public function storeKelasOlahraga(Request $request)
    {
        $request->validate([
            'coach_id' => 'required|exists:coaches,id',
            'nama_kelas' => 'required|string|max:255',
            'jenis_kelas' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'kapasitas' => 'required|integer|min:1',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
            'harga' => 'required|integer|min:0',
        ]);

        // Simpan ke kelas_olahragas
        $kelas = KelasOlahraga::create([
            'coach_id' => $request->coach_id,
            'nama_kelas' => $request->nama_kelas,
            'jenis_kelas' => $request->jenis_kelas,
            'kapasitas' => $request->kapasitas,
            'harga' => $request->harga,
        ]);

        // Simpan ke jadwal_kelas
        JadwalKelas::create([
            'kelas_olahraga_id' => $kelas->id,
            'waktu_mulai' => $request->waktu_mulai,
            'waktu_selesai' => $request->waktu_selesai,
            'status' => $request->status,
        ]);

        return redirect()->route('maintenance.jadwal')
                        ->with('success', 'Kelas dan Jadwal berhasil ditambahkan!');
    }

    public function editKelasOlahraga(KelasOlahraga $kelasOlahraga)
    {
        return response()->json([
            'kelas' => $kelasOlahraga,
            'coach_list' => Coach::all(),
        ]);
    }

    public function updateKelasOlahraga(Request $request, KelasOlahraga $kelasOlahraga)
    {
        $request->validate([
            'coach_id' => 'required|exists:coaches,id',
            'nama_kelas' => 'required|string|max:255',
            'jenis_kelas' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'kapasitas' => 'required|integer|min:1',
            'jam_mulai' => 'required|date_format:H:i',
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai',
            'harga' => 'required|integer|min:0',
        ]);

        $kelasOlahraga->update($request->all());

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Coach (Kelas Olahraga) berhasil diperbarui!');
    }

    public function destroyKelasOlahraga(KelasOlahraga $kelasOlahraga)
    {
        $kelasOlahraga->delete();
        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Coach (Kelas Olahraga) berhasil dihapus!');
    }
}