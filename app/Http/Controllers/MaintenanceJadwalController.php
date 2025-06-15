<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKelas;
use App\Models\KelasOlahraga;
use App\Models\Coach; // Pastikan Coach di-import
use Carbon\Carbon; // Pastikan Carbon di-import

class MaintenanceJadwalController extends Controller
{
    public function index()
    {
        $jadwalKelas = JadwalKelas::with(['kelasOlahraga.coach'])->get();
        $kelasOlahragaList = KelasOlahraga::with('coach')->get(); // Ini untuk tabel jadwal coach DAN dropdown modal
        $coachList = Coach::all(); // Untuk dropdown coach di modal

        return view('maintenanceJadwal', compact('jadwalKelas', 'kelasOlahragaList', 'coachList'));
    }

    // --- Metode untuk Jadwal Kelas (CRUD) ---

    public function storeJadwalKelas(Request $request)
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

    public function editJadwalKelas(JadwalKelas $jadwalKela) // Menggunakan jadwalKela sesuai rute
    {
        $kelasOlahragaList = KelasOlahraga::with('coach')->get();
        return response()->json([
            'jadwal' => $jadwalKela,
            'kelas_olahraga_list' => $kelasOlahragaList,
        ]);
    }

    public function updateJadwalKelas(Request $request, JadwalKelas $jadwalKela) // Menggunakan jadwalKela
    {
        $validatedData = $request->validate([
            'kelas_olahraga_id' => 'required|exists:kelas_olahragas,id',
            'waktu_mulai' => 'required|date_format:Y-m-d\TH:i', // Gunakan format yang konsisten
            'waktu_selesai' => 'required|date_format:Y-m-d\TH:i|after:waktu_mulai', // Gunakan format yang konsisten
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $jadwalKela->update($validatedData);

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Kelas berhasil diperbarui!');
    }

    public function destroyJadwalKelas(JadwalKelas $jadwalKela) // Menggunakan jadwalKela
    {
        $jadwalKela->delete();

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Kelas berhasil dihapus!');
    }

    // --- Metode untuk Kelas Olahraga (Jadwal Coach CRUD) ---

    public function storeKelasOlahraga(Request $request)
    {
        $request->validate([
            'coach_id' => 'required|exists:coaches,id',
            'nama_kelas' => 'required|string|max:255',
            'jenis_kelas' => 'required|string|max:255', // Tambahkan validasi jenis_kelas dan tanggal
            'tanggal' => 'required|date',
            'kapasitas' => 'required|integer|min:1',
            'jam_mulai' => 'required|date_format:H:i', // Hanya jam, sesuaikan dengan migration
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai', // Hanya jam, sesuaikan dengan migration
            'deskripsi' => 'nullable|string',
            'harga' => 'required|integer|min:0',
        ]);

        // Simpan ke tabel kelas_olahragas
        $kelas = KelasOlahraga::create([
            'coach_id' => $request->coach_id,
            'nama_kelas' => $request->nama_kelas,
            'jenis_kelas' => $request->jenis_kelas,
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'kapasitas' => $request->kapasitas,
            'deskripsi' => $request->deskripsi,
            'harga' => $request->harga,
        ]);

        // Catatan: Jika 'Jadwal Kelas' secara otomatis dibuat dari 'Kelas Olahraga',
        // maka logika ini benar. Jika 'Jadwal Kelas' bisa terpisah, maka ini opsional.
        // Saat ini, blade Anda tidak memiliki tombol tambah untuk jadwal kelas terpisah.
        // JadwalKelas::create([
        //     'kelas_olahraga_id' => $kelas->id,
        //     'waktu_mulai' => $request->tanggal . ' ' . $request->jam_mulai, // Gabungkan tanggal & jam
        //     'waktu_selesai' => $request->tanggal . ' ' . $request->jam_selesai, // Gabungkan tanggal & jam
        //     'status' => 'Aktif',
        // ]);

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Coach (Kelas Olahraga) berhasil ditambahkan!');
    }

    // TODO: Tambahkan method editKelasOlahraga, updateKelasOlahraga, destroyKelasOlahraga
    // Jika Anda ingin owner bisa mengedit/menghapus jadwal coach dari tabel 'Jadwal Coach'

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
            'deskripsi' => 'nullable|string',
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