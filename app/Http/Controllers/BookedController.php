<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class BookedController extends Controller
{

public function show($jenis, $coach)
{
    // Daftar jenis yang valid
    $allowedJenis = ['yoga', 'pilates', 'zumba', 'trampoline', 'tabata', 'poundfit'];
    if (!in_array($jenis, $allowedJenis)) {
        abort(404);
    }

    // Jika ingin cari coach berdasarkan slug dari nama (contoh: claura-sintiya)
    $coachData = Coach::whereRaw("LOWER(REPLACE(name, ' ', '-')) = ?", [$coach])->firstOrFail();

    // Ambil kelas berdasarkan jenis & relasi jadwal
    $kelas = $coachData->kelasOlahraga()
        ->where('jenis_kelas', $jenis)
        ->with('jadwal')
        ->get();

    return view('guest.booked', [
        'coach' => $coachData,
        'kelas' => $kelas,
        'jenis' => $jenis
    ]);
}

public function booked1()
{
    return view('guest.booked1');
}
public function booked2()
{
    return view('guest.booked2');
}
public function booked3()
{
    return view('guest.booked3');
}
public function booked4()
{
    return view('guest.booked4');
}
public function booked5()
{
    return view('guest.booked5');
}
public function booked6()
{
    return view('guest.booked6');
}
}
