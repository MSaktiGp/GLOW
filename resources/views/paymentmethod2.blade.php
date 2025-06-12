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

<!-- Section Instruktur -->
<div class="container mt-5">
  <div class="row align-items-start bg-light p-4 rounded shadow-sm">
    <div class="col-md-4 text-center">
      <img src="{{ asset('images/Instruktur3.jpg') }}" alt="Instruktur Yoga" class="img-fluid rounded">
    </div>
    <div class="col-md-8 text-custom">
      <h4 class="fw-bold mb-1">Claura Sintiya</h4>
      <p class="mb-1"><i class="bi bi-star-fill text-warning"></i> <strong>4/5</strong></p>
      <p class="fw-semibold mb-2"> <i class="bi bi-telephone-fill"></i> 081234567890</p>
      <p class="fw-semibold mb-2"> <i class="bi bi-instagram"></i> claurasintiya_ </p>
      <p>“Temukan keseimbangan tubuh dan pikiran bersama Claura, instruktur bersertifikat dengan pengalaman lebih dari 5 tahun di bidang yoga mindfulness”</p>
    </div>
  </div>
</div>

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

@endsection
