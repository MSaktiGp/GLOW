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

}

