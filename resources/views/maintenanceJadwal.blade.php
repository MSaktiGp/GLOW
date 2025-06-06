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

    /* Tombol Tambah lebih besar & gradien pink */
  .btn-outline-pink {
    border: none;
    background: linear-gradient(45deg, #db3d91, #f189b8);
    color: white;
    font-weight: 600;
    border-radius: 50px;
    padding: 0.5rem 1.5rem;
    transition: background 0.3s ease;
    display: flex;
    align-items: center;
    gap: 0.5rem;
    font-size: 1rem;
  }

  .btn-outline-pink:hover {
    background: linear-gradient(45deg, #f189b8, #db3d91);
    color: white;
    box-shadow: 0 0 10px rgba(219, 61, 145, 0.6);
  }

  /* Tombol icon edit & delete */
  .btn-icon {
    border: none;
    background: transparent;
    color: #db3d91;
    font-size: 1.2rem;
    cursor: pointer;
    transition: color 0.3s ease;
  }

  .btn-icon:hover {
    color: #f189b8;
  }

  /* Modal header with pink gradient */
  .modal-header {
    background: linear-gradient(90deg, #db3d91, #f189b8);
    color: white;
    border-bottom: none;
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;
  }

  .modal-title {
    font-weight: 700;
  }

  /* Modal footer buttons */
  .modal-footer .btn-secondary {
    background-color: #f5c5dc;
    border: none;
    color: #7a2a58;
    transition: background-color 0.3s ease;
  }

  .modal-footer .btn-secondary:hover {
    background-color: #db3d91;
    color: white;
  }

  .modal-footer .btn-primary {
    background-color: #db3d91;
    border: none;
    transition: background-color 0.3s ease;
  }

  .modal-footer .btn-primary:hover {
    background-color: #f189b8;
  }

  /* Transition for buttons */
  button, .btn-icon {
    transition: all 0.3s ease;
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
        
        <!-- Logout -->
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

  <!-- Content -->
  <div class="container mt-4">
    <!-- Jadwal Kelas -->
    <div class="card p-4 my-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="section-title fs-5 text-start mb-0">Jadwal Kelas</h5>
        <button class="btn btn-outline-pink btn-tambah"> <i class="bi bi-plus-lg"></i> Tambah</button>
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
                <button class="btn-icon btn-edit" title="Edit"><i class="bi bi-pencil-square"></i></button>
                <button class="btn-icon btn-delete" title="Hapus"><i class="bi bi-trash3"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>

    <!-- Jadwal Coach -->
    <div class="card p-4 my-4">
      <div class="d-flex justify-content-between align-items-center mb-3">
        <h5 class="section-title fs-5 text-start mb-0">Jadwal Coach</h5>
        <button class="btn btn-outline-pink btn-tambah"> <i class="bi bi-plus-lg"></i> Tambah</button>
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
                <button class="btn-icon btn-edit" title="Edit"><i class="bi bi-pencil-square"></i></button>
                <button class="btn-icon btn-delete" title="Hapus"><i class="bi bi-trash3"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Modal Form (Tambah/Edit) -->
<div class="modal fade" id="jadwalModal" tabindex="-1" aria-labelledby="jadwalModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <form id="jadwalForm" class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="jadwalModalLabel">Tambah Jadwal</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <input type="hidden" id="jadwalIndex" />
        <div class="mb-3">
          <label for="nama" class="form-label">Nama</label>
          <input type="text" class="form-control" id="nama" required>
        </div>
        <div class="mb-3">
          <label for="jenisKelas" class="form-label">Jenis Kelas</label>
          <input type="text" class="form-control" id="jenisKelas" required>
        </div>
        <div class="mb-3">
          <label for="jamMulai" class="form-label">Jam Mulai</label>
          <input type="time" class="form-control" id="jamMulai" required>
        </div>
        <div class="mb-3">
          <label for="jamSelesai" class="form-label">Jam Selesai</label>
          <input type="time" class="form-control" id="jamSelesai" required>
        </div>
        <div class="mb-3">
          <label for="status" class="form-label">Status</label>
          <select class="form-select" id="status" required>
            <option value="Aktif">Aktif</option>
            <option value="Tidak Aktif">Tidak Aktif</option>
          </select>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
        <button type="submit" class="btn btn-primary">Simpan</button>
      </div>
    </form>
  </div>
</div>


  <!-- Footer -->
  <footer>
    <p class="mb-0">&copy; 2025 glowithus.com</p>
    <small>Designed by glowithus</small>
  </footer>

  <!-- Bootstrap JS -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
  <script>
    const jadwalModal = new bootstrap.Modal(document.getElementById('jadwalModal'));
    const jadwalForm = document.getElementById('jadwalForm');
    let currentTable = null;
    let currentEditRow = null;

    document.querySelectorAll('.btn-tambah').forEach(button => {
      button.addEventListener('click', () => {
        jadwalForm.reset();
        currentEditRow = null;
        currentTable = button.closest('.card');
        document.getElementById('jadwalModalLabel').innerText = 'Tambah Jadwal';
        jadwalModal.show();
      });
    });

    document.querySelectorAll('.btn-edit').forEach(button => {
      button.addEventListener('click', () => {
        currentEditRow = button.closest('tr');
        currentTable = button.closest('.card');
        document.getElementById('jadwalModalLabel').innerText = 'Edit Jadwal';
        document.getElementById('nama').value = currentEditRow.cells[1].innerText;
        document.getElementById('jenisKelas').value = currentEditRow.cells[2].innerText;
        document.getElementById('jamMulai').value = currentEditRow.cells[3].innerText;
        document.getElementById('jamSelesai').value = currentEditRow.cells[4].innerText;
        document.getElementById('status').value = currentEditRow.cells[5].innerText;
        jadwalModal.show();
      });
    });

    document.querySelectorAll('.btn-delete').forEach(button => {
      button.addEventListener('click', () => {
        if (confirm('Yakin ingin menghapus jadwal ini?')) {
          const row = button.closest('tr');
          row.remove();
          const tbody = button.closest('tbody');
          Array.from(tbody.rows).forEach((row, i) => row.cells[0].innerText = i + 1);
        }
      });
    });

    jadwalForm.addEventListener('submit', e => {
      e.preventDefault();
      const nama = document.getElementById('nama').value;
      const jenisKelas = document.getElementById('jenisKelas').value;
      const jamMulai = document.getElementById('jamMulai').value;
      const jamSelesai = document.getElementById('jamSelesai').value;
      const status = document.getElementById('status').value;

      if (currentEditRow) {
        currentEditRow.cells[1].innerText = nama;
        currentEditRow.cells[2].innerText = jenisKelas;
        currentEditRow.cells[3].innerText = jamMulai;
        currentEditRow.cells[4].innerText = jamSelesai;
        currentEditRow.cells[5].innerText = status;
      } else {
        const tbody = currentTable.querySelector('tbody');
        const newRow = tbody.insertRow();
        newRow.innerHTML = `
          <td></td>
          <td>${nama}</td>
          <td>${jenisKelas}</td>
          <td>${jamMulai}</td>
          <td>${jamSelesai}</td>
          <td>${status}</td>
          <td>
            <button class="btn-icon btn-edit" title="Edit"><i class="bi bi-pencil-square"></i></button>
            <button class="btn-icon btn-delete" title="Hapus"><i class="bi bi-trash3"></i></button>
          </td>`;

        newRow.querySelector('.btn-edit').addEventListener('click', () => {
          currentEditRow = newRow;
          currentTable = newRow.closest('.card');
          document.getElementById('jadwalModalLabel').innerText = 'Edit Jadwal';
          document.getElementById('nama').value = nama;
          document.getElementById('jenisKelas').value = jenisKelas;
          document.getElementById('jamMulai').value = jamMulai;
          document.getElementById('jamSelesai').value = jamSelesai;
          document.getElementById('status').value = status;
          jadwalModal.show();
        });

        newRow.querySelector('.btn-delete').addEventListener('click', () => {
          if (confirm('Yakin ingin menghapus jadwal ini?')) {
            newRow.remove();
            Array.from(tbody.rows).forEach((row, i) => row.cells[0].innerText = i + 1);
          }
        });
      }

      Array.from(currentTable.querySelectorAll('tbody tr')).forEach((row, i) => {
        row.cells[0].innerText = i + 1;
      });

      jadwalModal.hide();
    });
  </script>

</body>
</html>
