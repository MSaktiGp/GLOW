<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CustomerPaymentController extends Controller
{
    public function payment()
    {
        return view('user.payment');
    }
    
    public function paymentmethod1()
    {
        return view('user.paymentmethod1');
    }

    public function paymentmethod2()
    {
        return view('user.paymentmethod2');
    }

     public function paymentmethod3()
    {
        return view('user.paymentmethod3');
    }

     public function paymentmethod4()
    {
        return view('user.paymentmethod4');
    }

    public function paymentmethod5()
    {
        return view('user.paymentmethod5');
    }

    public function paymentmethod6()
    {
        return view('user.paymentmethod6');
    }

    public function paymentconfirm()
    {
        return view('user.paymentconfirm');
    }

    public function invoice()
    {
        return view('user.invoice');
    }
}