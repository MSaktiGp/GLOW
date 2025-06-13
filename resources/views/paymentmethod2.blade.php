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

        <!-- Metode Pembayaran: BNI -->
        <div class="border rounded p-3 mb-3">
          <div class="d-flex justify-content-between align-items-center mb-2">
            <div class="d-flex align-items-center gap-2">
              <img src="{{ asset('images/Bni.png') }}" alt="BNI" style="height: 24px;">
              <span class="fw-bold text-custom">BNI</span>
            </div>
            <div class="d-flex align-items-center gap-2">
              <span class="fw-semibold text-dark">456 1234 7890</span>
              <button class="btn btn-sm btn-outline-secondary">SALIN</button>
            </div>
          </div>
          <hr>
          <h6 class="text-custom fw-bold">Petunjuk Transfer BNI</h6>
          <ol class="mb-0 ps-3">
            <li>Masuk ke aplikasi BNI Mobile.</li>
            <li>Pilih menu <strong>Transfer</strong>.</li>
            <li>Masukkan nomor rekening: <strong>456 1234 7890</strong>.</li>
            <li>Masukkan nominal: <strong>IDR 150.000</strong>.</li>
            <li>Konfirmasi dan masukkan PIN.</li>
            <li>Simpan <strong>bukti pembayaran</strong>.</li>
          </ol>
        </div>

        </div>
    </div>
  </div>
</div>

@endsection
