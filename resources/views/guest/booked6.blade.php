@extends ('guest.layouts.layout')

@section ('content')

<style>
  .text-custom {
    color: #79455C;
  }

  .class-card {
    min-height: 210px; /* sesuaikan sesuai kebutuhan */
    display: flex;
    flex-direction: column;
    justify-content: space-between;
  }

  .btn-outline-secondary:hover {
      background-color: #F189B8;
      color: white;
      border-color: #F189B8;
    }
</style>

<!-- Section Instruktur -->
<div class="container mt-5">
  <div class="row align-items-start bg-light p-4 rounded shadow-sm">
    <div class="col-md-4 text-center">
      <img src="{{ asset('images/Instruktur3.jpg') }}" alt="Instruktur Trampoline" class="img-fluid rounded">
    </div>
    <div class="col-md-8 text-custom">
      <h4 class="fw-bold mb-1">Stevi Putri</h4>
      <p class="mb-1"><i class="bi bi-star-fill text-warning"></i> <strong>4/5</strong></p>
      <p class="fw-semibold mb-2"> <i class="bi bi-telephone-fill"></i> 081234567890</p>
      <p class="fw-semibold mb-2"> <i class="bi bi-instagram"></i> stevput_ </p>
      <p>"Rasakan keseruan dan manfaat kebugaran yang luar biasa di setiap lompatan bersama Stevi, instruktur Trampoline Fit bersertifikat dengan pengalaman lebih dari 5 tahun dalam memadukan latihan kardio dengan gerakan ceria dan aman."</p>
    </div>
  </div>
</div>

<div class="container mt-5">

<!-- Section Jadwal Kelas -->
<section class="py-5 px-5" style="background: #F189B8;">
  <div class="container text-center text-white">
    <h2 class="mb-3">Book a Trampoline Fit Class</h2>
    <p class="mb-4">Bergabunglah dengan kelas pound fit kami. Temukan waktu latihan yang tepat untuk Anda dan tingkatkan koneksi pikiran dan tubuh Anda.</p>


    <!-- Class Cards -->
    <div class="row justify-content-center g-4">
      <!-- Card 1 -->
      <div class="col-md-4">
        <div class="card shadow-sm class-card">
          <div class="card-body">
            <span class="badge bg-success mb-2">Available</span>

            <div class="d-flex justify-content-between">
              <h5 class="card-title mb-1">Gravity Glyde</h5>
              <span class="text-muted">60 menit</span>
            </div>

            <div class="mb-2">
              <!-- Tanggal -->
              <div class="d-flex align-items-center mb-1">
                <i class="bi bi-calendar-heart me-2"></i>
                <span>Sabtu, 07 Juni 2025</span>
              </div>

              <!-- Waktu -->
              <div class="d-flex align-items-center">
                <i class="bi bi-clock me-2"></i>
                <span>08:00 - 09:00 WIB</span>
              </div>

               {{-- kapasitas --}}
              <div class="d-flex align-items-center">
                <i class="bi bi-people me-2"></i>
                <span>30</span>
              </div>
               <br>
              <!-- harga -->
              <div class="d-flex align-items-center">
                <span><strong>Rp45.000</strong></span>
              </div>
            </div>

            <button class="btn btn-outline-secondary w-100 mt-3">Book Class</button>
          </div>
        </div>
      </div>

      <!-- Card 2 -->
      <div class="col-md-4">
        <div class="card shadow-sm class-card">
          <div class="card-body">
            <span class="badge bg-success mb-2">Available</span>
            <div class="d-flex justify-content-between">
              <h5 class="card-title">Aero Rebound</h5>
              <span class="text-muted">75 menit</span>
            </div>
            <div class="mb-2">
              <!-- Tanggal -->
              <div class="d-flex align-items-center mb-1">
                <i class="bi bi-calendar-heart me-2"></i>
                <span>Minggu, 07 Juni 2025</span>
              </div>

              <!-- Waktu -->
              <div class="d-flex align-items-center">
                <i class="bi bi-clock me-2"></i>
                <span>10:30 - 11:30 WIB</span>
              </div>

               {{-- kapasitas --}}
              <div class="d-flex align-items-center">
                <i class="bi bi-people me-2"></i>
                <span>30</span>
              </div>
               <br>
              <!-- harga -->
              <div class="d-flex align-items-center">
                <span><strong>Rp65.000</strong></span>
              </div>
            </div>
            <button class="btn btn-outline-secondary w-100 mt-3">Book Class</button>
          </div>
        </div>
      </div>

      <!-- Card 3 -->
      <div class="col-md-4">
        <div class="card shadow-sm class-card">
          <div class="card-body">
            <span class="badge bg-danger text-dark mb-2">Fully Booked</span>
            <div class="d-flex justify-content-between">
              <h5 class="card-title">Skybound Flow</h5>
              <span class="text-muted">60 Menit</span>
            </div>

           <div class="mb-2">
              <!-- Tanggal -->
              <div class="d-flex align-items-center mb-1">
                <i class="bi bi-calendar-heart me-2"></i>
                <span>Sabtu, 14 Juni 2025</span>
              </div>

              <!-- Waktu -->
              <div class="d-flex align-items-center">
                <i class="bi bi-clock me-2"></i>
                <span>15:30 - 16:30 WIB</span> 
              </div>

               {{-- kapasitas --}}
              <div class="d-flex align-items-center">
                <i class="bi bi-people me-2"></i>
                <span>30</span>
              </div>

              <br>
              <!-- harga -->
              <div class="d-flex align-items-center">
                <span><strong>Rp50.000</strong></span>
              </div>
            </div>
            <button disabled class="btn btn-outline-secondary w-100 mt-3">Book Class</button>
          </div>
        </div>
      </div>

      <!-- Tambahkan card lainnya sesuai kebutuhan -->
      
    </div>

    
  </div>
</section>

</div>
@endsection



