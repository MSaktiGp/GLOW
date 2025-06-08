@extends ('layout')

@section ('content')

<style>
  .text-custom {
    color: #79455C;
  }
</style>

<!-- Section Instruktur -->
<div class="container mt-5">
  <div class="row align-items-start bg-light p-4 rounded shadow-sm">
    <div class="col-md-4 text-center">
      <img src="{{ asset('images/coach1.jpeg') }}" alt="Instruktur Yoga" class="img-fluid rounded">
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

<div class="container mt-5">
<h5>Cek Jadwal Kelas</h5>
</div>
@endsection



