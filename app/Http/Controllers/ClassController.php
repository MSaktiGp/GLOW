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

    public function uYoga()
    {
        $user = auth()->user();
        return view('user.yoga', compact('user'));
    }

    public function uPilates()
    {
        $user = auth()->user();
        return view('user.pilates', compact('user'));
    }

    public function uPoundfit()
    {
        $user = auth()->user();
        return view('user.poundfit', compact('user'));
    }

    public function uZumba()
    {
        $user = auth()->user();
        return view('user.zumba', compact('user'));
    }

    public function uTabata()
    {
        $user = auth()->user();
        return view('user.tabata', compact('user'));
    }

    public function uTrampoline()
    {
        $user = auth()->user();
        return view('user.trampoline', compact('user'));
    }
}
