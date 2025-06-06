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

    public function zumba()
    {
        return view('zumba');
    }

    public function tabata()
    {
        return view('tabata');
    }

    public function trampoline()
    {
        return view('trampoline');
    }
}
