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

<!-- Section Check Out -->
<div class="container mt-5 mb-5">
  <div class="text-center text-custom">
    <h4 class="fw-bold">Check Out</h4>
    <p class="mb-4">Metode Pembayaran<br><small>Pilih Bank/e-Wallet</small></p>
  </div>

  <div class="row row-cols-1 row-cols-md-2 g-3">
    <div class="col">
      <button class="btn btn-outline-secondary w-100 py-3">BRImo</button>
    </div>
    <div class="col">
      <button class="btn btn-outline-secondary w-100 py-3">BNI Mobile</button>
    </div>
    <div class="col">
      <button class="btn btn-outline-secondary w-100 py-3">Livin by Mandiri</button>
    </div>
    <div class="col">
      <button class="btn btn-outline-secondary w-100 py-3">BCA Mobile</button>
    </div>
    <div class="col">
      <button class="btn btn-outline-secondary w-100 py-3">DANA</button>
    </div>
    <div class="col">
      <button class="btn btn-outline-secondary w-100 py-3">OVO</button>
    </div>
  </div>
</div>

@endsection