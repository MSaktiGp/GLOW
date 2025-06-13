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