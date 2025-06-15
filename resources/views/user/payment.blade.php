@extends('user.layouts.dashboard-user-layout')

@section('content')

@push('css')
<style>
    .text-custom {
        color: #79455c;
    }

    .payment-card {
        background-color: #fff;
        padding: 40px 20px;
        border-radius: 24px;
        box-shadow: 0 8px 24px rgba(0,0,0,0.05);
        max-width: 900px;
        margin: 0 auto;
    }

    .payment-btn {
        width: 100px;
        height: 100px;
        border: 2px solid #f5a5c3;
        background-color: #fff;
        border-radius: 16px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        transition: all 0.3s ease-in-out;
        text-decoration: none;
    }

    .payment-btn:hover {
        background-color: #f189B8;
        color: #fff;
        border-color: #f189B8;
        transform: translateY(-3px);
        box-shadow: 0 4px 12px rgba(0,0,0,0.1);
    }

    .payment-btn img {
        height: 30px;
        margin-bottom: 8px;
    }

    .payment-btn span {
        font-size: 14px;
        font-weight: 500;
        color: #79455c;
    }

    .payment-btn:hover span {
        color: #fff;
    }

    @media (max-width: 576px) {
        .payment-btn {
            width: 100%;
            height: auto;
            flex-direction: row;
            justify-content: flex-start;
            padding: 10px;
        }

        .payment-btn img {
            margin-right: 12px;
        }
    }
</style>
@endpush

<!-- Section Check Out -->
<div class="container mt-5 mb-5">
    <div class="text-center text-custom mb-4">
        <h4 class="fw-bold">Pembayaran</h4>
        <p><small>Pilih metode pembayaran</small></p>
    </div>

    <div class="payment-card">
        <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-3 justify-content-center">

            <div class="col text-center">
                <a class="payment-btn" href="{{ route('payment.bri') }}">
                    <img src="{{ asset('images/Brimo.png') }}" alt="BRImo">
                    <span>BRImo</span>
                </a>
            </div>

            <div class="col text-center">
                <a class="payment-btn" href="{{ route('payment.bni') }}">
                    <img src="{{ asset('images/Bni.png') }}" alt="BNI Mobile">
                    <span>BNI Mobile</span>
                </a>
            </div>

            <div class="col text-center">
                <a class="payment-btn" href="{{ route('payment.mandiri') }}">
                    <img src="{{ asset('images/Mandiri.png') }}" alt="Mandiri">
                    <span>Mandiri</span>
                </a>
            </div>

            <div class="col text-center">
                <a class="payment-btn" href="{{ route('payment.bca') }}">
                    <img src="{{ asset('images/Bca.png') }}" alt="BCA">
                    <span>BCA</span>
                </a>
            </div>

            <div class="col text-center">
                <a class="payment-btn" href="{{ route('payment.dana') }}">
                    <img src="{{ asset('images/Dana.png') }}" alt="DANA">
                    <span>DANA</span>
                </a>
            </div>

            <div class="col text-center">
                <a class="payment-btn" href="{{ route('payment.ovo') }}">
                    <img src="{{ asset('images/OVO.png') }}" alt="OVO">
                    <span>OVO</span>
                </a>
            </div>

        </div>
    </div>
</div>

@endsection
