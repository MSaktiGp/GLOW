@extends('layout')

@section('content')

@push('css')
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

    .btn-outline-secondary {
        border-color: #f189B8;
        color: #f189B8;
        transition: all 0.3s ease;
    }

    .btn-outline-secondary:hover {
        background-color: #f189B8;
        color: white;
    }

    strong {
        color: #79455c;
    }

    .payment-box {
        background-color: #fff;
        padding: 2rem;
        border-radius: 1rem;
        box-shadow: 0 4px 16px rgba(0, 0, 0, 0.06);
    }

    .payment-instruction ol {
        padding-left: 1.2rem;
        margin-bottom: 0;
    }

    .payment-instruction li {
        margin-bottom: 0.5rem;
    }

    .va-box {
        background-color: #fdf1f6;
        border: 1px solid #f5c2d4;
        padding: 1rem;
        border-radius: 0.75rem;
    }

    .btn-copy {
        font-size: 0.85rem;
        padding: 0.3rem 0.75rem;
    }

    @media (max-width: 576px) {
        .va-box {
            flex-direction: column !important;
            align-items: flex-start !important;
            gap: 0.5rem;
        }
    }
</style>
@endpush

<!-- Section Pembayaran -->
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="payment-box">
                <h5 class="text-center text-custom fw-bold mb-4">Pembayaran</h5>

                <div class="d-flex justify-content-between mb-3">
                    <span class="fw-semibold text-custom">Total Pembayaran</span>
                    <span class="fw-bold text-custom">Rp150.000</span>
                </div>

                <div class="va-box d-flex justify-content-between align-items-center flex-wrap mb-4">
                    <div class="d-flex align-items-center gap-2">
                        <img src="{{ asset('images/Dana.png') }}" alt="Logo DANA" style="height: 28px;">
                        <span class="fw-bold text-custom">DANA</span>
                    </div>
                    <div class="d-flex align-items-center gap-2">
                        <span class="fw-semibold text-custom">128 0856 4318 1606</span>
                        <button class="btn btn-outline-secondary btn-copy">SALIN</button>
                    </div>
                </div>

                <div class="payment-instruction">
                    <h6 class="text-custom fw-bold mb-3">Petunjuk Pembayaran via DANA</h6>
                    <ol>
                        <li>Buka aplikasi <strong>DANA</strong> dan login.</li>
                        <li>Pilih menu <strong>Transfer</strong></li>
                        <li>Masukkan kode pembayaran: <strong>128 0856 4318 1606</strong></li>
                        <li>Masukkan jumlah pembayaran: <strong>Rp150.000</strong></li>
                        <li>Konfirmasi detail pembayaran dan lanjutkan.</li>
                        <li>Masukkan <strong>PIN DANA</strong> untuk menyelesaikan transaksi.</li>
                        <li>Simpan <strong>bukti pembayaran</strong> jika diperlukan</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
