@extends('user.layouts.dashboard-user-layout')

@section('content')

<style>
    .text-custom {
        color: #79455c;
    }

    .class-card {
        min-height: 210px;
        display: flex;
        flex-direction: column;
        justify-content: space-between;
    }

    .btn-outline-secondary:hover {
        background-color: #f189B8;
        color: white;
        border-color: #f189B8;
    }

    .confirmation-message {
        font-size: 1rem;
        color: #666;
    }

    .confirmation-title {
        font-size: 1.5rem;
        font-weight: 700;
        color: #79455c;
    }

    .btn-selesai {
        background-color: #f189B8;
        border: none;
        color: white;
        font-weight: 600;
        padding: 0.5rem 1.8rem;
        border-radius: 2rem;
        transition: all 0.3s ease;
        box-shadow: 0 4px 10px rgba(241, 137, 184, 0.3);
        font-size: 0.95rem;
    }

    .btn-selesai:hover {
        background-color: #e075a5;
        transform: translateY(-2px);
    }

    .confirmation-card {
        max-width: 420px;
        margin: 0 auto;
    }
</style>

<!-- Section Konfirmasi Pesanan -->
<div class="container my-5">
    <div class="bg-white p-4 rounded shadow-sm text-center confirmation-card">
        <h5 class="confirmation-title mb-3">Pesanan Berhasil Dikonfirmasi</h5>
        <div class="mb-3">
            <svg xmlns="http://www.w3.org/2000/svg" width="65" height="65" fill="none" stroke="#00C853" stroke-width="2" class="bi bi-check-circle" viewBox="0 0 16 16">
                <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05L7.477 11.53a.75.75 0 0 1-1.08.02L4.324 9.384a.75.75 0 1 1 1.06-1.06l1.568 1.568 4.018-4.018z"/>
                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14z"/>
            </svg>
        </div>
        <p class="confirmation-message mb-4">
            Terima kasih! Pesanan Anda telah berhasil dikonfirmasi dan sedang diproses.
        </p>
        <a class="btn btn-selesai" href="{{ route('invoice') }}" >Selesai</a>
    </div>
</div>

@endsection
