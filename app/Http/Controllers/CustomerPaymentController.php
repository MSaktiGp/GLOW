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

    public function paymentmethod2()
    {
        return view('paymentmethod2');
    }

     public function paymentmethod3()
    {
        return view('paymentmethod3');
    }

     public function paymentmethod4()
    {
        return view('paymentmethod4');
    }

    public function paymentmethod5()
    {
        return view('paymentmethod5');
    }

    public function paymentmethod6()
    {
        return view('paymentmethod6');
    }

    public function paymentconfirm()
    {
        return view('paymentconfirm');
    }
}