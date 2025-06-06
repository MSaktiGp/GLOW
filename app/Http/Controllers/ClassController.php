<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function yoga()
    {
        return view('yoga');
    }

    public function pilates()
    {
        return view('pilates');
    }

    public function poundfit()
    {
        return view('poundfit');
    }
}
