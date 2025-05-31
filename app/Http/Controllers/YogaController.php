<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class YogaController extends Controller
{
    public function index()
    {
        return view('yoga');
    }
}
