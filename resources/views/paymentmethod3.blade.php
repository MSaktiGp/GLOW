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
              <img src="{{ asset('images/Mandiri.png') }}" alt="Logo Livin' by Mandiri" style="height: 24px;">
              <span class="fw-bold text-custom">Livin' by Mandiri</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <span class="fw-semibold text-custom">128 0856 4318 1606</span>
              <button class="btn btn-sm btn-outline-secondary">SALIN</button>
            </div>
          </div>

          <hr>
          <h6 class="text-custom fw-bold">Petunjuk Transfer via Livin' by Mandiri</h6>
          <ol class="mb-0 ps-3">
            <li>Buka aplikasi <strong>Livin' by Mandiri</strong> dan login</li>
            <li>Pilih menu <strong>Bayar</strong> > <strong>Multipayment.</strong></li>
            <li>Masukkan nomor virtual account: <strong>128 0856 4318 1606.</strong></li>
            <li>Masukkan jumlah pembayaran <strong> Rp150.000.</strong></li>
            <li>Konfirmasi transaksi dan masukkan <strong>MPIN.</strong></li>
            <li>Simpan <strong>bukti pembayaran</strong>jika diperlukan</li>
          </ol>
        </div>
         
      </div>
    </div>
  </div>
</div>

@endsection
