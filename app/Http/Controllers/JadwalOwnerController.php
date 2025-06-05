<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Jadwal;

class JadwalOwnerController extends Controller
{
    public function index()
    {
        $jadwals = Jadwal::all();
        return view('owner.jadwal.index', compact('jadwals'));
    }

    public function create()
    {
        return view('owner.jadwal.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nama_peserta' => 'required',
            'jenis_kelas' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'status' => 'required',
        ]);

        Jadwal::create($request->all());
        return redirect()->route('jadwal.owner.index')->with('success', 'Jadwal berhasil ditambahkan.');
    }

    public function edit($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        return view('owner.jadwal.edit', compact('jadwal'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_peserta' => 'required',
            'jenis_kelas' => 'required',
            'jam_mulai' => 'required',
            'jam_selesai' => 'required',
            'status' => 'required',
        ]);

        $jadwal = Jadwal::findOrFail($id);
        $jadwal->update($request->all());
        return redirect()->route('jadwal.owner.index')->with('success', 'Jadwal berhasil diperbarui.');
    }

    public function destroy($id)
    {
        $jadwal = Jadwal::findOrFail($id);
        $jadwal->delete();
        return redirect()->route('jadwal.owner.index')->with('success', 'Jadwal berhasil dihapus.');
    }
}
