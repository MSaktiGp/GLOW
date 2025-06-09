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

<!-- Section Konfirmasi Pesanan -->
<div class="container my-5">
  <div class="bg-white p-4 rounded shadow-sm text-center">
    <h5 class="fw-bold mb-4 text-secondary">Pesanan Dikonfirmasi</h5>
    <div class="mb-3">
      <svg xmlns="http://www.w3.org/2000/svg" width="80" height="80" fill="none" stroke="#00C853" stroke-width="2" class="bi bi-check-circle" viewBox="0 0 16 16">
        <path d="M10.97 4.97a.75.75 0 0 1 1.07 1.05L7.477 11.53a.75.75 0 0 1-1.08.02L4.324 9.384a.75.75 0 1 1 1.06-1.06l1.568 1.568 4.018-4.018z"/>
        <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0-1A6 6 0 1 0 8 2a6 6 0 0 0 0 12z"/>
      </svg>
    </div>
    <p class="mb-4 text-muted">Pesanan Anda telah dibuat :)</p>
    <button class="btn btn-danger px-4 py-2 fw-semibold" style="background-color: #f189B8; border: none;">Selesai</button>
  </div>
</div>

@endsection
