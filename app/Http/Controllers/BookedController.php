<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class BookedController extends Controller
{
    // public function booked1()
    // {
    //     return view('guest.booked1');
    // }

    // public function booked2()
    // {
    //     return view('guest.booked2');
    // }

    // public function booked3()
    // {
    //     return view('guest.booked3');
    // }

    // public function booked4()
    // {
    //     return view('guest.booked4');
    // }

    // public function booked5()
    // {
    //     return view('guest.booked5');
    // }

    // public function booked6()
    // {
    //     return view('guest.booked6');
    // }


public function show($jenis, $coach)
{
    // Cari coach berdasarkan nama (slug)
    $coachData = Coach::whereRaw("LOWER(REPLACE(name, ' ', '-')) = ?", [$coach])->firstOrFail();

    // Ambil kelas olahraga sesuai jenis & coach
    $kelas = $coachData->kelasOlahraga()
                ->where('jenis_kelas', $jenis)
                ->with('jadwalKelas') // eager load jadwal
                ->get();

    return view('guest.booked.show', [
        'coach' => $coachData,
        'kelas' => $kelas,
        'jenis' => $jenis
    ]);
}


}
