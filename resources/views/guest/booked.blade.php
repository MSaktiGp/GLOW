@extends ('guest.layouts.layout')

@section ('content')

<div class="container mt-5">
  <div class="row align-items-start bg-light p-4 rounded shadow-sm">
    <div class="col-md-4 text-center">
      <img src="{{ asset('images/instruktur1.jpg') }}" alt="{{ $coach->name }}" class="img-fluid rounded">
    </div>
    <div class="col-md-8 text-custom">
      <h4 class="fw-bold mb-1">{{ $coach->name }}</h4>
      <p class="fw-semibold mb-2"><i class="bi bi-telephone-fill"></i> {{ $coach->phone }}</p>
      <p class="fw-semibold mb-2"><i class="bi bi-geo-alt-fill"></i> {{ $coach->address }}</p>
      <p class="fw-semibold mb-2"><i class="bi bi-person-badge-fill"></i> {{ ucfirst($jenis) }} Coach</p>
    </div>
  </div>
</div>

<div class="container mt-5">
  <section class="py-5 px-5" style="background: #F189B8;">
    <div class="container text-center text-white">
      <h2 class="mb-3">Book a {{ ucfirst($jenis) }} Class</h2>

      <div class="row justify-content-center g-4">
        @forelse ($kelas as $kls)
          <div class="col-md-4">
            <div class="card shadow-sm class-card">
              <div class="card-body">
                <h5 class="card-title">{{ $kls->nama_kelas }}</h5>
                <span class="badge {{ $kls->jadwalKelas->where('status', 'available')->count() ? 'bg-success' : 'bg-danger text-dark' }}">
                  {{ $kls->jadwalKelas->where('status', 'available')->count() ? 'Available' : 'Fully Booked' }}
                </span>

                @foreach ($kls->jadwalKelas as $jadwal)
                  <div class="mb-2 text-start">
                    <div><i class="bi bi-calendar-heart me-2"></i> {{ $jadwal->tanggal->format('l, d F Y') }}</div>
                    <div><i class="bi bi-clock me-2"></i> {{ $jadwal->jam_mulai->format('H:i') }} - {{ $jadwal->jam_selesai->format('H:i') }}</div>
                  </div>
                @endforeach

                <div class="d-flex align-items-center justify-content-between">
                  <span>Kapasitas: {{ $kls->kapasitas }}</span>
                  <span><strong>Rp{{ number_format($kls->harga,0,',','.') }}</strong></span>
                </div>

                @if ($kls->jadwalKelas->where('status', 'available')->count())
                  <a href="{{ route('payment') }}" class="btn btn-outline-secondary w-100 mt-3">Book Class</a>
                @else
                  <button disabled class="btn btn-outline-secondary w-100 mt-3">Book Class</button>
                @endif
              </div>
            </div>
          </div>
        @empty
          <p class="text-white">Belum ada kelas {{ ucfirst($jenis) }} tersedia.</p>
        @endforelse
      </div>

    </div>
  </section>
</div>

@endsection
