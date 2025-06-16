<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Coach;

class BookedControllerUser extends Controller
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

    return view('user.booked', [
        'coach' => $coachData,
        'kelas' => $kelas,
        'jenis' => $jenis
    ]);
}

public function booked1()
{
    return view('user.booked1');
}
public function booked2()
{
    return view('user.booked2');
}
public function booked3()
{
    return view('user.booked3');
}
public function booked4()
{
    return view('user.booked4');
}
public function booked5()
{
    return view('user.booked5');
}
public function booked6()
{
    return view('user.booked6');
}
}
