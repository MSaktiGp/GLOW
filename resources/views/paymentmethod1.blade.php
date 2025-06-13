@extends ('layout')

@section('content')

<style>
    .text-custom {
        color: #79455c;
    }

    .class-card {
        min-height: 210px;
        display: flex;
        flex-direction: column;
        justify-contect: space-between;
    }

    .btn-outline-secondary:hover {
        background-color: #f189B8;
        color: white;
        border-color: #f189B8;
    }

    strong {
        color: #79455c;
    }
</style>

<!-- Section Pembayaran -->
<div class="container mt-4">
  <div class="row justify-content-center">
    <div class="col-md-10">
      <div class="bg-white p-4 rounded shadow-sm">
        <h5 class="text-center text-custom fw-bold mb-3">Pembayaran</h5>
        <div class="d-flex justify-content-between mb-3">
          <span class="fw-bold text-custom">Total Pembayaran</span>
          <span class="fw-bold text-custom">IDR150.000</span>
        </div>

        <!-- Metode Pembayaran dan Petunjuk Transfer -->
        <div class="border rounded p-3 mb-3">
          <div class="d-flex align-items-center justify-content-between mb-3 flex-wrap">
            <div class="d-flex align-items-center gap-2">
              <img src="{{ asset('images/Brimo.png') }}" alt="Logo BRI" style="height: 24px;">
              <span class="fw-bold text-custom">BRImo</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <span class="fw-semibold text-custom">128 0856 4318 1606</span>
              <button class="btn btn-sm btn-outline-secondary">SALIN</button>
            </div>
          </div>

          <hr>
          <h6 class="text-custom fw-bold">Petunjuk Transfer M-Banking</h6>
          <ol class="mb-0 ps-3">
            <li>Buka aplikasi <strong>BRImo</strong> dan login.</li>
            <li>Pilih menu <strong>BRIVA</strong> atau <strong>Pembayaran</strong>.</li>
            <li>Masukkan nomor virtual account : <strong>128 0856 4318 1606</strong>.</li>
            <li>Pastikan jumlah pembayaran <strong>Rp21.000</strong>.</li>
            <li>Konfirmasi detail pembayaran.</li>
            <li>Masukkan <strong>PIN BRImo</strong> untuk menyelesaikan transaksi.</li>
            <li>Simpan <strong>bukti pembayaran</strong> jika diperlukan.</li>
          </ol>
        </div>
         
      </div>
    </div>
  </div>
</div>
