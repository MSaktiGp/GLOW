<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CoachSchedule;
use App\Models\Coach;
use App\Models\KelasOlahraga;
use Carbon\Carbon;

class CoachScheduleController extends Controller
{
    /**
     * Store a newly created Coach Schedule resource in storage.
     */
    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'coach_id' => 'required|exists:coaches,id',
            'kelas_olahraga_id' => 'nullable|exists:kelas_olahragas,id',
            'waktu_mulai' => 'required|date',
            'waktu_selesai' => 'required|date|after:waktu_mulai',
            'status' => 'required|in:Available,Booked,Off',
        ]);

        CoachSchedule::create($validatedData);

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Coach berhasil ditambahkan!');
    }

    /**
     * Show the form for editing the specified Coach Schedule resource.
     */
    public function edit(CoachSchedule $coachSchedule)
    {
        $coachList = Coach::all();
        $kelasOlahragaList = KelasOlahraga::all();
        return response()->json([
            'coach_schedule' => $coachSchedule,
            'coach_list' => $coachList,
            'kelas_olahraga_list' => $kelasOlahragaList,
        ]);
    }

    /**
     * Update the specified Coach Schedule resource in storage.
     */
    public function update(Request $request, CoachSchedule $coachSchedule)
    {
        $validatedData = $request->validate([
            'coach_id' => 'required|exists:coaches,id',
            'kelas_olahraga_id' => 'nullable|exists:kelas_olahragas,id',
            'waktu_mulai' => 'required|date',
            'waktu_selesai' => 'required|date|after:waktu_mulai',
            'status' => 'required|in:Available,Booked,Off',
        ]);

        $coachSchedule->update($validatedData);

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Coach berhasil diperbarui!');
    }

    /**
     * Remove the specified Coach Schedule resource from storage.
     */
    public function destroy(CoachSchedule $coachSchedule)
    {
        $coachSchedule->delete();

        return redirect()->route('maintenance.jadwal')->with('success', 'Jadwal Coach berhasil dihapus!');
    }
}