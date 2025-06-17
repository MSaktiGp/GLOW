<?php

namespace App\Http\Controllers;

use Carbon\Carbon;
use App\Models\Coach;
use App\Models\JadwalKelas;
use Illuminate\Http\Request;
use App\Models\KelasOlahraga;
use Illuminate\Support\Facades\DB;

class MaintenanceJadwalController extends Controller
{
    public function index()
    {
        $jadwalKelas = 
        DB::table('jadwal_kelas')
        ->join('kelas_olahragas', 'jadwal_kelas.kelas_olahraga_id', '=', 'kelas_olahragas.id')
        ->join('coaches', 'kelas_olahragas.coach_id', '=', 'coaches.id')
        ->join('jenis_kelas', 'kelas_olahragas.jenis_kelas_id', '=', 'jenis_kelas.id')
        ->select(
            'coaches.name',
            'jenis_kelas.jenis_kelas',
            'kelas_olahragas.nama_kelas',
            'jadwal_kelas.jam_mulai',
            'jadwal_kelas.jam_selesai',
            'jadwal_kelas.status'
        )
        ->get();

        // $jadwalKls = JadwalKelas::with(['kelasOlahraga.coach'])->get();

        $kelasOlahragaList = 
        DB::table('kelas_olahragas')
        ->join('jadwal_kelas', 'jadwal_kelas.kelas_olahraga_id', '=', 'kelas_olahragas.id')
        ->join('coaches', 'kelas_olahragas.coach_id', '=', 'coaches.id')
        ->join('jenis_kelas', 'kelas_olahragas.jenis_kelas_id', '=', 'jenis_kelas.id')
        ->select(
            'jadwal_kelas.id',
            'kelas_olahragas.id as kelas_olahragas_id',
            'jadwal_kelas.tanggal',
            'coaches.name',
            'kelas_olahragas.nama_kelas',
            'jenis_kelas.jenis_kelas',
            'jadwal_kelas.jam_mulai',
            'jadwal_kelas.jam_selesai',
            'kelas_olahragas.kapasitas',
            'jenis_kelas.harga'
        )
        ->get();
        $coachList = Coach::all();
        // dd($kelasOlahragaList);
        return view('owner.maintenanceJadwal', compact('jadwalKelas', 'kelasOlahragaList', 'coachList'));
    }

    public function storeJadwalKelas(Request $request)
    {
        $validatedData = $request->validate([
            'kelas_olahraga_id' => 'required|exists:kelas_olahraga,id',
            'jam_mulai' => 'required|date_format:Y-m-d\TH:i',
            'jam_selesai' => 'required|date_format:Y-m-d\TH:i|after:waktu_mulai',
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
            'jam_mulai' => 'required|date_format:Y-m-d\TH:i',
            'jam_selesai' => 'required|date_format:Y-m-d\TH:i|after:waktu_mulai',
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
            'jenis_kelas_id' => 'required|string|max:255',
            'tanggal' => 'required|date',
            'kapasitas' => 'required|integer|min:1',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required|after:jam_mulai',
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        // Simpan ke kelas_olahragas
        DB::table('kelas_olahragas')->insert([
            'coach_id' => $request->coach_id,
            'jenis_kelas_id' => $request->jenis_kelas_id,
            'nama_kelas' => $request->nama_kelas,
            'kapasitas' => $request->kapasitas,
        ]);
        $idOlahraga=DB::getPdo()->lastInsertId();

        // Simpan ke jadwal_kelas
        DB::table('jadwal_kelas')->insert([
            'kelas_olahraga_id' => $idOlahraga,
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'status' => $request->status,
        ]);


        return redirect()->route('maintenance.jadwal')
            ->with('success', 'Kelas dan Jadwal berhasil ditambahkan!');
    }

    public function editKelasOlahraga(KelasOlahraga $kelasOlahraga)
    {
        $kelasOlahraga->load(['jadwalKelas', 'coach']);
        dd($kelasOlahraga);


        return response()->json([
            'kelas' => $kelasOlahraga,
            'coach_list' => Coach::all(),
        ]);
    }


    public function updateKelasOlahraga(Request $request, KelasOlahraga $kelasOlahraga)
    {
        // dd($request->all());
        $request->validate([
            'coach_id' => 'required|exists:coaches,id',
            'nama_kelas' => 'required|string|max:255',
            'jenis_kelas_id' => 'required|string|max:255',
            'kelas_olahraga_id'=> 'required|exists:kelas_olahragas,id',
            'tanggal' => 'required|date',
            'kapasitas' => 'required|integer|min:1',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required|after:jam_mulai',
            'status' => 'required|in:Aktif,Nonaktif',
        ]);

        // Update kelas
        $kelasOlahraga = KelasOlahraga::find($request->kelas_olahraga_id)->update([
            'coach_id' => $request->coach_id,
            'jenis_kelas_id' => $request->jenis_kelas_id,
            'nama_kelas' => $request->nama_kelas,
            'kapasitas' => $request->kapasitas,
        ]);

        $kelasOlahraga = JadwalKelas::find($request->id)->update([
            'tanggal' => $request->tanggal,
            'jam_mulai' => $request->jam_mulai,
            'jam_selesai' => $request->jam_selesai,
            'status' => $request->status,
        ]);

        return redirect()->route('maintenance.jadwal')
            ->with('success', 'Kelas dan Jadwal berhasil diperbarui!');
    }


    public function destroyKelasOlahraga(Request $request, JadwalKelas $jadwalKelas)
    {
        // dd($request->id);
        DB::beginTransaction();
        try {
            $jadwalKelas = JadwalKelas::where('id' , $request->id);
            $jadwalKelas->delete();
            DB::commit();
            return redirect()->route('maintenance.jadwal')
                ->with('success', 'Kelas dan Jadwal berhasil dihapus!');
        }catch (\Exception $e) {
            return redirect()->route('maintenance.jadwal')
                ->with('error', 'Terjadi kesalahan saat menghapus: ' . $e->getMessage());
        }
    }

}