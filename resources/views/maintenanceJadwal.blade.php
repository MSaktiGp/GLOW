<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Maintenance Jadwal & Coach</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="{{ asset('bootstrap-5.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
  <style>
    body {
      background-color: #FFF5FF;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      padding: 0;
      min-height: 100vh;
    }

    .navbar {
      background-color: #F189B8;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand {
      font-weight: bold;
      color: white;
    }

    .nav-link {
      color: white !important;
      margin-right: 1rem;
    }

    .nav-link:hover {
      color: #ffeaf6 !important;
    }

    .card {
      background-color: #ffeaf6;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(241, 137, 184, 0.2);
    }

    .section-title {
      color: #F189B8;
      font-weight: bold;
      text-align: center;
      margin-top: 1.5rem;
    }

    .sub-section-title {
    color: #F189B8;
    font-weight: bold;
    font-size: 1.25rem;
    margin: 0;
    }


    .btn-outline-pink {
      border: 1px solid #DB3D91;
      color: #DB3D91;
    }

    .btn-outline-pink:hover {
      background-color: #DB3D91;
      color: white;
    }

    table thead {
      background-color: #fce0ef;
      color: #F189B8;
    }

    table tbody tr:hover {
      background-color: #f9dce7;
    }

    footer {
      background-color: #F189B8;
      color: white;
      text-align: center;
      padding: 10px 0;
      margin-top: 3rem;
    }

    .btn-logout svg {
      transition: transform 0.2s ease;
    }

    .btn-logout:hover svg {
      transform: translateX(4px);
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid px-4">
      <a class="navbar-brand" href="#">GLOW</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
        <span class="navbar-toggler-icon"></span>
      </button>

      <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
          <li class="nav-item"><a class="nav-link text-white" href="{{ route('dashboard.owner') }}">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ route('owner.profile') }}">Profile</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/maintenance-jadwal') }}">Maintenance Jadwal dan Coach</a></li>
        </ul>
        
        <!-- Logout button di kanan atas -->
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-outline-light rounded-pill d-flex align-items-center gap-2 px-3 py-2 btn-logout">
            <i class="bi bi-box-arrow-right"></i> Logout
          </button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Content -->
  <div class="container mt-4">
    <h2 class="section-title">Maintenance Jadwal dan Coach</h2>

    <!-- Jadwal Kelas -->
    <div class="card p-4 my-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="section-title fs-5 text-start mb-0">Jadwal Kelas</h5>
        <button class="btn btn-sm btn-outline-pink">Tambah</button>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Peserta</th>
              <th>Jenis Kelas</th>
              <th>Jam Mulai</th>
              <th>Jam Selesai</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Ayu</td>
              <td>Yoga</td>
              <td>08:00</td>
              <td>09:00</td>
              <td>Aktif</td>
              <td>
                <button class="btn btn-sm btn-outline-primary">Edit</button>
                <button class="btn btn-sm btn-outline-danger">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Jadwal Coach -->
    <div class="card p-4 mb-5">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="section-title fs-5 text-start mb-0">Jadwal Coach</h5>
        <button class="btn btn-sm btn-outline-pink">Tambah</button>
      </div>
      <div class="table-responsive">
        <table class="table table-bordered text-center align-middle">
          <thead>
            <tr>
              <th>No</th>
              <th>Nama Coach</th>
              <th>Jenis Kelas</th>
              <th>Jam Mulai</th>
              <th>Jam Selesai</th>
              <th>Status</th>
              <th>Aksi</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>1</td>
              <td>Siska</td>
              <td>Pilates</td>
              <td>10:00</td>
              <td>11:00</td>
              <td>Aktif</td>
              <td>
                <button class="btn btn-sm btn-outline-primary">Edit</button>
                <button class="btn btn-sm btn-outline-danger">Delete</button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

  </div>

  <!-- Footer -->
  <footer>
    <p class="mb-0">&copy; 2025 glowithus.com</p>
    <small>Designed by glowithus</small>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
