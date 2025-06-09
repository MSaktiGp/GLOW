<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerPaymentController extends Controller
{
    public function payment()
    {
        return view('payment');
    }
    
    public function paymentmethod1()
    {
        return view('paymentmethod1');
    }
}