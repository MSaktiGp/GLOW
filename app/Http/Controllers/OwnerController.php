<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Owner;

class OwnerController extends Controller
{
    public function showLoginForm()
    {
        return view('loginOwner');
    }

    public function profile()
    {
        // Data dummy - nanti bisa diganti dari database (model Owner misalnya)
        $owner = [
            'nama' => 'Shakila Rama Wulandari',
            'nomor_hp' => '08987654321',
            'alamat' => 'Jl. Kenangan, Kota Jambi',
        ];

        return view('profileOwner', compact('owner'));
    }

}

