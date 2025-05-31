<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profile - Dashboard Owner</title>
  <link href="{{ asset('bootstrap-5.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet" />
  <style>
    body {
      background-color: #FFF5FF;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      margin: 0;
      display: flex;
      flex-direction: column;
      min-height: 100vh;
    }

    .navbar {
      background-color: #F189B8;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .navbar-brand, .nav-link {
      color: white !important;
      font-weight: 500;
    }

    .nav-link:hover {
      text-decoration: underline;
      color: #ffeaf6 !important;
    }

    .main-content {
      flex: 1;
      padding-top: 2rem;
      padding-bottom: 3rem;
    }

    .profile-card {
      background-color: #ffeaf6;
      border-radius: 16px;
      padding: 2rem;
      box-shadow: 0 6px 15px rgba(241, 137, 184, 0.2);
      max-width: 600px;
      margin: auto;
      text-align: center;
    }

    .profile-avatar {
      width: 100px;
      height: 100px;
      background-color: #f189b8;
      border-radius: 50%;
      margin: auto;
      display: flex;
      align-items: center;
      justify-content: center;
      color: white;
      font-size: 2.5rem;
      margin-bottom: 1rem;
    }

    .profile-title {
      color: #F189B8;
      font-weight: bold;
      margin-bottom: 1rem;
    }

    .profile-table th {
      width: 40%;
      color: #F189B8;
      font-weight: 600;
    }

    .profile-table td {
      color: #555;
    }

    footer {
      background-color: #F189B8;
      color: white;
      text-align: center;
      padding: 15px 0;
      margin-top: auto;
    }
  </style>
</head>
<body>

  <!-- Navbar -->
  <nav class="navbar navbar-expand-lg">
    <div class="container-fluid px-4">
      <a class="navbar-brand" href="#">GLOW</a>
      <button class="navbar-toggler text-white" type="button" data-bs-toggle="collapse" data-bs-target="#navbarContent">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
          <li class="nav-item"><a class="nav-link" href="#">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Profile</a></li>
          <li class="nav-item"><a class="nav-link" href="#">Maintenance Jadwal dan Coach</a></li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-outline-light rounded-pill d-flex align-items-center gap-2 px-3 py-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="18" height="18" fill="white" class="bi bi-box-arrow-right" viewBox="0 0 16 16">
              <path fill-rule="evenodd" d="M10 15a1 1 0 0 0 1-1v-2a.5.5 0 0 1 1 0v2a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h7a2 2 0 0 1 2 2v2a.5.5 0 0 1-1 0V3a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v10a1 1 0 0 0 1 1h7z"/>
              <path fill-rule="evenodd" d="M15.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L14.293 7.5H5.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3z"/>
            </svg>
            Logout
          </button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Main Profile Content -->
  <div class="main-content">
    <h2 class="text-center profile-title">Profile Owner!</h2>
    <div class="profile-card">
      <div class="profile-avatar">
        <i class="bi bi-person-fill"></i>
      </div>
      <h5 class="mb-3">Informasi Pengguna</h5>
      <table class="table profile-table table-borderless">
        <tbody>
          <tr><th>Nama</th><td>Nama Owner</td></tr>
          <tr><th>Email</th><td>owner@example.com</td></tr>
          <tr><th>Role</th><td>Owner</td></tr>
          <tr><th>Terdaftar Sejak</th><td>Januari 2025</td></tr>
        </tbody>
      </table>
    </div>
  </div>

  <!-- Footer -->
  <footer>
    <p class="mb-0">&copy; 2025 glowithus.com</p>
    <small>Designed by glowithus</small>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Bootstrap Icon -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</body>
</html>
