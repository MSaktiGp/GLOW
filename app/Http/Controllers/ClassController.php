<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ClassController extends Controller
{
    public function yoga()
    {
        return view('guest.yoga');
    }

    public function pilates()
    {
        return view('guest.pilates');
    }

    public function poundfit()
    {
        return view('guest.poundfit');
    }

    public function zumba()
    {
        return view('guest.zumba');
    }

    public function tabata()
    {
        return view('guest.tabata');
    }

    public function trampoline()
    {
        return view('guest.trampoline');
    }
}
