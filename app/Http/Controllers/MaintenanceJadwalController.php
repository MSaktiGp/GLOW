<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\JadwalKelas;
use App\Models\KelasOlahraga;
use App\Models\Coach;
use Carbon\Carbon; // Pastikan Carbon diimpor jika Anda menggunakannya untuk parsing/pemformatan

class MaintenanceJadwalController extends Controller
{
    /**
     * Menampilkan daftar resource.
     */
    public function index()
    {
        // Data untuk tabel "Jadwal Kelas"
        // Kita eager load 'kelasOlahraga' dan 'coach'nya untuk tujuan tampilan.
        $jadwalKelas = JadwalKelas::with(['kelasOlahraga.coach'])->get();

        // Data untuk tabel "Jadwal Coach"
        // Ini didasarkan pada model KelasOlahraga itu sendiri, yang sekarang mencakup bidang tanggal dan waktu.
        $kelasOlahragaList = KelasOlahraga::with('coach')->get();

        // Data untuk dropdown di modal (misalnya, modal "Tambah Jadwal Kelas")
        // Pastikan Anda memuat coach jika dropdown memerlukannya
        $coaches = Coach::all();

         return view('maintenanceJadwal', compact('jadwalKelas', 'kelasOlahragaList', 'coaches'));
    }

    /**
     * Menyimpan resource Jadwal Kelas yang baru dibuat ke penyimpanan.
     * Tindakan ini tampaknya untuk menambahkan entri baru ke tabel "Jadwal Kelas" secara spesifik.
     * Modal untuk "Tambah Jadwal Kelas" saat ini mengarah ke ini.
     */
    public function storeJadwalKelas(Request $request)
    {
        $validatedData = $request->validate([
            'kelas_olahraga_id' => 'required|exists:kelas_olahragas,id',
            'waktu_mulai' => 'required|date_format:Y-m-d\TH:i', // Sesuaikan format datetime-local
            'waktu_selesai' => 'required|date_format:Y-m-d\TH:i|after:waktu_mulai', // Sesuaikan format datetime-local
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        JadwalKelas::create($validatedData);

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Kelas berhasil ditambahkan!');
    }

    /**
     * Mengambil data untuk mengedit catatan Jadwal Kelas melalui AJAX.
     */
    public function editJadwalKelas(JadwalKelas $jadwalKela) // Laravel's route model binding akan menyuntikkannya
    {
        // Kita mengembalikan objek jadwalKela. JS frontend akan mengisi modal.
        return response()->json($jadwalKela);
    }

    /**
     * Memperbarui resource Jadwal Kelas yang ditentukan di penyimpanan.
     */
    public function updateJadwalKelas(Request $request, JadwalKelas $jadwalKela) // route model binding
    {
        $validatedData = $request->validate([
            'kelas_olahraga_id' => 'required|exists:kelas_olahragas,id',
            'waktu_mulai' => 'required|date_format:Y-m-d\TH:i',
            'waktu_selesai' => 'required|date_format:Y-m-d\TH:i|after:waktu_mulai',
            'status' => 'required|in:Aktif,Tidak Aktif',
        ]);

        $jadwalKela->update($validatedData);

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Kelas berhasil diperbarui!');
    }

    /**
     * Menghapus resource Jadwal Kelas yang ditentukan dari penyimpanan.
     */
    public function destroyJadwalKelas(JadwalKelas $jadwalKela) // route model binding
    {
        $jadwalKela->delete();

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Kelas berhasil dihapus!');
    }

    // --- Metode untuk bagian "Jadwal Coach" (KelasOlahraga) ---

    /**
     * Menyimpan resource Kelas Olahraga yang baru dibuat (dan Jadwal Kelas terkait) ke penyimpanan.
     * Ini untuk tombol "Tambah Jadwal" di bagian "Jadwal Coach".
     */
    public function storeKelasOlahraga(Request $request)
    {
        $request->validate([
            'coach_id' => 'required|exists:coaches,id',
            'nama_kelas' => 'required|string|max:255',
            'jenis_kelas' => 'required|string|max:255', // Menambahkan validasi untuk jenis_kelas
            'tanggal' => 'required|date',               // Menambahkan validasi untuk tanggal
            'kapasitas' => 'required|integer|min:1',
            'jam_mulai' => 'required|date_format:H:i',  // Asumsi input waktu seperti "10:00"
            'jam_selesai' => 'required|date_format:H:i|after:jam_mulai', // Asumsi input waktu
        ]);

        // Gabungkan tanggal dan waktu untuk JadwalKelas
        $tanggal = Carbon::parse($request->tanggal)->format('Y-m-d');
        $waktuMulai = Carbon::parse($tanggal . ' ' . $request->jam_mulai)->format('Y-m-d H:i:s');
        $waktuSelesai = Carbon::parse($tanggal . ' ' . $request->jam_selesai)->format('Y-m-d H:i:s');

        // Simpan ke tabel kelas_olahragas
        $kelas = KelasOlahraga::create([
            'coach_id' => $request->coach_id,
            'nama_kelas' => $request->nama_kelas,
            'jenis_kelas' => $request->jenis_kelas,
            'tanggal' => $tanggal,
            'kapasitas' => $request->kapasitas,
            'jam_mulai' => $request->jam_mulai, // Menyimpan hanya waktu di KelasOlahraga
            'jam_selesai' => $request->jam_selesai, // Menyimpan hanya waktu di KelasOlahraga
        ]);

        // Simpan ke tabel jadwal_kelas (menghubungkan ke KelasOlahraga yang baru dibuat)
        JadwalKelas::create([
            'kelas_olahraga_id' => $kelas->id,
            'waktu_mulai' => $waktuMulai,
            'waktu_selesai' => $waktuSelesai,
            'status' => 'Aktif', // Status default saat menambahkan jadwal kelas baru
        ]);

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Coach (Kelas) berhasil ditambahkan!');
    }
}