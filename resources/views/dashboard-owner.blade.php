<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Dashboard Owner</title>
  <link href="{{ asset('bootstrap-5.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet" />
  <script src="https://cdn.jsdelivr.net/npm/echarts@5.4.2/dist/echarts.min.js"></script>
  <style>
    body {
      background-color: #FFF5FF;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      min-height: 100vh;
      margin: 0;
    }

    .navbar {
      background-color: #F189B8;
      box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
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

    .logout-icon {
      color: white;
      font-size: 1.5rem;
      cursor: pointer;
    }

    .card {
      background-color: #ffeaf6;
      border: none;
      border-radius: 20px;
      box-shadow: 0 4px 12px rgba(241, 137, 184, 0.2);
      transition: transform 0.3s ease;
    }

    .card:hover {
      transform: translateY(-3px);
    }

    .table thead {
      background-color: #fce0ef;
      color: #F189B8;
    }

    .table tbody tr:hover {
      background-color: #f9dce7;
    }

    .search-box {
      border: 1px solid #F189B8;
      color: #F189B8;
    }

    .search-box::placeholder {
      color: #F189B8;
    }

    footer {
      background-color: #F189B8;
      color: white;
      text-align: center;
      padding: 10px 0;
      margin-top: 3rem;
    }

    .legend {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
      gap: 10px;
      margin-top: 10px;
    }

    .legend span {
      display: flex;
      align-items: center;
      font-size: 14px;
      font-weight: 500;
    }

    .legend span::before {
      content: '';
      display: inline-block;
      width: 15px;
      height: 15px;
      margin-right: 6px;
      border-radius: 3px;
    }

    .legend .yoga::before { background-color: #d4cce9; }
    .legend .pilates::before { background-color: #646fd4; }
    .legend .poundfit::before { background-color: #f8c04e; }
    .legend .zumba::before { background-color: #60d7e6; }
    .legend .tabata::before { background-color: #5cc087; }
    .legend .trampoline::before { background-color: #db4a6d; }

    .section-title {
      color: #F189B8;
      font-weight: bold;
    }

    .container-custom {
      max-width: 1200px;
      margin: auto;
    }

    @media (max-width: 576px) {
      .search-box {
        width: 100% !important;
        margin-top: 1rem;
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
          <li class="nav-item"><a class="nav-link text-white" href="{{ route('dashboard.owner') }}">Dashboard</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ route('owner.profile') }}">Profile</a></li>
          <li class="nav-item"><a class="nav-link text-white" href="{{ url('/maintenance-jadwal') }}">Maintenance Jadwal dan Coach</a></li>
        </ul>

          <!-- KANAN: Logout Button -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <button type="submit" class="btn btn-outline-light d-flex align-items-center gap-2 px-3 py-2 rounded-pill">
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

  <div class="container container-custom mt-4 text-center">
    <h2 class="section-title">Dashboard Owner!</h2>

    <!-- Pie Chart Section -->
    <div class="row mt-4">
      <div class="col-12">
        <div class="card p-4">
          <h5 class="section-title">Pie Chart Database</h5>
          <div class="row mt-3 align-items-center justify-content-center">
            <div class="col-md-6 text-center">
              <div id="pieChart" style="min-height: 300px;" class="echart w-100"></div>
              <div class="legend">
                <span class="yoga">Yoga</span>
                <span class="pilates">Pilates</span>
                <span class="poundfit">Poundfit</span>
                <span class="zumba">Zumba</span>
                <span class="tabata">Tabata</span>
                <span class="trampoline">Trampoline</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Tabel -->
    <div class="row mt-4">
      <div class="col-12">
        <div class="card p-4">
          <div class="d-flex flex-wrap justify-content-between align-items-center mb-3">
            <h5 class="section-title mb-0">Data Peserta Kelas</h5>
            <input type="text" class="form-control search-box w-25" placeholder="Search..." />
          </div>
          <div class="table-responsive">
            <table class="table table-bordered table-glow-p table-hover table-striped">
              <thead>
                <tr>
                  <th>No</th>
                  <th>Nama Peserta</th>
                  <th>Jenis Kelas</th>
                  <th>Jam Mulai</th>
                  <th>Jam Selesai</th>
                  <th>Status</th>
                </tr>
              </thead>
              <tbody class="table-glow-t">
                <tr>
                  <td>1</td>
                  <td>Rina</td>
                  <td>Zumba</td>
                  <td>08:00</td>
                  <td>09:00</td>
                  <td>Aktif</td>
                </tr>
                <tr>
                  <td>2</td>
                  <td>Andi</td>
                  <td>Yoga</td>
                  <td>10:00</td>
                  <td>11:00</td>
                  <td>Non-Aktif</td>
                </tr>
              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>

  <footer>
    <p class="mb-0">&copy; 2025 glowithus.com</p>
    <small>Designed by glowithus</small>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const chartDom = document.querySelector("#pieChart");
      const myChart = echarts.init(chartDom);
      const option = {
        title: {
          text: 'Tampilan Data',
          subtext: 'Jumlah Peserta per Kelas',
          left: 'center',
          textStyle: { color: '#8B5A2B', fontSize: 16, fontWeight: 'bold' },
          subtextStyle: { color: '#3A6EA5', fontSize: 13 }
        },
        tooltip: { trigger: 'item' },
        legend: { show: false },
        series: [{
          name: 'Peserta',
          type: 'pie',
          radius: '50%',
          data: [
            { value: 4, name: 'Yoga', itemStyle: { color: '#d4cce9' } },
            { value: 3, name: 'Pilates', itemStyle: { color: '#646fd4' } },
            { value: 5, name: 'Poundfit', itemStyle: { color: '#f8c04e' } },
            { value: 6, name: 'Zumba', itemStyle: { color: '#60d7e6' } },
            { value: 2, name: 'Tabata', itemStyle: { color: '#5cc087' } },
            { value: 3, name: 'Trampoline', itemStyle: { color: '#db4a6d' } }
          ],
          label: { color: '#8B5A2B', fontSize: 12 }
        }]
      };
      myChart.setOption(option);
    });
  </script>
</body>
</html>
