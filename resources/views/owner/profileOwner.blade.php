<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>Profile - Dashboard Owner</title>
  <link href="{{ asset('bootstrap-5.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet" />
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
  <style>
    html, body {
      height: 100%;
      margin: 0;
      padding: 0;
    }

    body {
      display: flex;
      flex-direction: column;
      background-color: #FFF5FF;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }

    .wrapper {
      flex: 1;
      display: flex;
      flex-direction: column;
      padding-top: 80px; /* untuk navbar fixed */
    }

    .navbar {
      background-color: #F189B8;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
      position: fixed;
      top: 0;
      left: 0;
      width: 100%;
      z-index: 1030;
      padding-top: 0.5rem;
      padding-bottom: 0.5rem;
    }

    .navbar-brand {
      font-weight: bold;
      color: white;
      letter-spacing: 1px;
    }

    .nav-link {
      color: white !important;
      margin-right: 1rem;
      transition: all 0.3s ease;
    }

    .nav-link:hover {
      color: #ffeaf6 !important;
      text-decoration: underline;
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
      transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .profile-card:hover {
      transform: translateY(-5px);
      box-shadow: 0 12px 20px rgba(241, 137, 184, 0.3);
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
      margin-bottom: 2rem;
      font-size: 1.8rem;
    }

    .text-pink {
      color: #F189B8;
    }

    footer {
      background-color: #F189B8;
      color: white;
      text-align: center;
      padding: 15px 0;
    }

    .btn-logout svg {
      transition: transform 0.2s ease;
    }

    .btn-logout:hover svg {
      transform: translateX(4px);
    }

    @media (max-width: 575.98px) {
      .profile-card {
        padding: 1.5rem;
      }
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
          <li class="nav-item"><a class="nav-link" href="{{ route('dashboard.owner') }}">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('owner.profile') }}">Profile</a></li>
          <li class="nav-item"><a class="nav-link" href="{{ route('maintenance.jadwal') }}">Maintenance Jadwal dan Coach</a></li>
        </ul>
        <form method="POST" action="{{ route('logout') }}">
          @csrf
          <button type="submit" class="btn btn-outline-light rounded-pill d-flex align-items-center gap-2 px-3 py-2 btn-logout">
            <i class="bi bi-box-arrow-right"></i> Logout
          </button>
        </form>
      </div>
    </div>
  </nav>

  <!-- Wrapper -->
  <div class="wrapper">

    <!-- Main Profile Content -->
    <div class="main-content">
      <h2 class="text-center profile-title">Profile Owner</h2>
      <div class="profile-card">
        <div class="profile-avatar">
          <i class="bi bi-person-fill"></i>
        </div>
        <div class="text-start">
          <div class="d-flex justify-content-between mb-2 px-2">
            <span class="text-pink fw-semibold">Nama</span>
            <span class="text-pink">{{$owner->name}}</span>
          </div>
          <div class="d-flex justify-content-between mb-2 px-2">
            <span class="text-pink fw-semibold">Username</span>
            <span class="text-pink">{{$owner->username}}</span>
          </div>
          <div class="d-flex justify-content-between mb-2 px-2">
            <span class="text-pink fw-semibold">Email</span>
            <span class="text-pink">{{$owner->email}}</span>
          </div>
        </div>
      </div>
    </div>

    <!-- Footer -->
    <footer>
      <p class="mb-0">&copy; 2025 glowithus.com</p>
      <small>Designed by glowithus</small>
    </footer>

  </div>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
