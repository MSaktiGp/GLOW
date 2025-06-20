<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Maintenance Jadwal & Coach</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('bootstrap-5.3.6-dist/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}"> {{-- Add CSRF token for Laravel forms --}}
    <style>
        html,
        body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            display: flex;
            flex-direction: column;
            background-color: #FFF5FF;
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            min-height: 100vh;
        }

        .container {
            flex: 1;
            padding-top: 40px;
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

        .btn-outline-secondary {
            border: none;
            background: linear-gradient(45deg, #6c757d, #8c98a4);
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

        .btn-outline-secondary:hover {
            background: linear-gradient(45deg, #8c98a4, #6c757d);
            color: white;
            box-shadow: 0 0 10px rgba(108, 117, 125, 0.6);
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

        footer {
            background-color: #F189B8;
            color: white;
            text-align: center;
            padding: 15px 0;
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

        footer {
            background-color: #F189B8;
            color: white;
            text-align: center;
            padding: 15px 0;
        }

        /* Transition for buttons */
        button,
        .btn-icon {
            transition: all 0.3s ease;
        }
    </style>
</head>

<body>

    <nav class="navbar navbar-expand-lg">
        <div class="container-fluid px-4">
            <a class="navbar-brand" href="{{route('dashboard.owner')}}" style="color: #fff">GLOW</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse justify-content-between" id="navbarNav">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-3">
                    <li class="nav-item"><a class="nav-link text-white"
                            href="{{ route('dashboard.owner') }}">Dashboard</a></li>
                    <li class="nav-item"><a class="nav-link text-white" href="{{ route('owner.profile') }}">Profile</a>
                    </li>
                    <li class="nav-item"><a class="nav-link text-white"
                            href="{{ route('maintenance.jadwal') }}">Maintenance Jadwal dan Coach</a></li>
                    {{-- Updated route --}}
                </ul>

                <form method="POST" action="{{ route('logout') }}"> {{-- Corrected logout route --}}
                    @csrf
                    <button type="submit"
                        class="btn btn-outline-light rounded-pill d-flex align-items-center gap-2 px-3 py-2 btn-logout">
                        <i class="bi bi-box-arrow-right"></i> Logout
                    </button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container mt-4">
        <h2 class="section-title">Maintenance Jadwal dan Coach</h2>

        {{-- Success/Error Messages --}}
        @if (session('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif
        @if ($errors->any())
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
        @endif

        <div class="card p-4 my-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="section-title fs-5 text-start mb-0">Jadwal Kelas</h5>
                {{-- Tombol tambah dihapus agar jadwal kelas tidak bisa ditambah --}}
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-glow-p table-hover table-striped text-center align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Nama Coach</th>
                            <th>Jenis Kelas</th>
                            <th>Nama Kelas</th>
                            <th>Jam Mulai</th>
                            <th>Jam Selesai</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-glow-t">
                        @forelse ($jadwalKelas as $index => $jadwal)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ $jadwal->name ?? 'N/A' }}</td>
                                <td>{{ $jadwal->jenis_kelas ?? 'N/A' }}</td>
                                <td>{{ $jadwal->nama_kelas ?? 'N/A' }}</td>
                                <td>{{ date('H:i', strtotime($jadwal->jam_mulai)) }}</td>
                                <td>{{ date('H:i', strtotime($jadwal->jam_selesai)) }}</td>
                                <td>{{ $jadwal->status ?? 'N/A' }}</td>
                                <td>
                                    
                                    </div>
                                    
                                    {{-- Tombol edit dan hapus untuk Jadwal Kelas (yang diisi peserta) ini tidak relevan jika owner hanya bisa memanage jadwal coach --}}
                                    {{-- Disarankan untuk menghapus aksi edit/delete di bagian ini jika ini memang jadwal kelas yang diisi oleh peserta --}}
                                    {{-- Untuk tujuan contoh ini, saya akan biarkan tombol edit/delete tapi tanpa fungsi di JS karena fokusnya jadwal coach --}}
                                    {{-- <button class="btn-icon btn-edit" title="Edit" data-id="{{ $jadwal->id }}"><i
                                                class="bi bi-pencil-square"></i></button>
                                    <form action="{{ route('jadwal_kelas.destroy', $jadwal->id) }}" method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Yakin ingin menghapus jadwal ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-icon btn-delete" title="Hapus"><i
                                                class="bi bi-trash3"></i></button>
                                    </form> --}}
                                    N/A
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="8">Tidak ada jadwal kelas yang tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="card p-4 my-4">
            <div class="d-flex justify-content-between align-items-center mb-3">
                <h5 class="section-title fs-5 text-start mb-0">Jadwal Coach</h5>
                <button class="btn btn-outline-pink btn-tambah" data-bs-toggle="modal" id="btn-tambah"
                    data-bs-target="#jadwalCoachModal" data-mode="add">
                    <i class="bi bi-plus-lg icon-tambah"></i> Tambah Jadwal Coach
                </button>
            </div>
            <div class="table-responsive">
                <table class="table table-bordered table-glow-p table-striped table-hover text-center align-middle">
                    <thead>
                        <tr>
                            <th>No</th>
                            <th>Tanggal</th>
                            <th>Nama Coach</th>
                            <th>Nama Kelas</th>
                            <th>Jenis Kelas</th>
                            {{-- <th>Jam Mulai</th>
                            <th>Jam Selesai</th> --}}
                            <th>Harga</th>
                            <th>Kapasitas</th>
                            <th>Aksi</th>
                        </tr>
                    </thead>
                    <tbody class="table-glow-t" id="table-body">
                        @forelse ($kelasOlahragaList as $index => $kelas)
                            <tr>
                                <td>{{ $index + 1 }}</td>
                                <td>{{ optional($kelas)->tanggal ? \Carbon\Carbon::parse($kelas->tanggal)->format('d M Y') : '-' }}
                                </td>
                                <td>{{ $kelas->name ?? 'Tidak Ada Coach' }}</td>
                                <td>{{ $kelas->nama_kelas }}</td>
                                <td>{{ $kelas->jenis_kelas }}</td>
                                <td>{{ $kelas->harga }}</td>
                                <td>{{ $kelas->kapasitas }}</td>
                                <td>
                                    <button class="btn-icon btn-edit-coach" title="Edit"
                                        data-id="{{ $kelas->id }}" data-bs-toggle="modal"
                                        data-bs-target="#jadwalCoachModal" data-mode="edit">
                                        <i class="bi bi-pencil-square icon-edit" data-id="{{ $kelas->id }}"></i>
                                    </button>
                                    <form action="{{ route('kelas_olahraga.destroy', $kelas->id) }}" method="POST"
                                        style="display:inline;"
                                        onsubmit="return confirm('Yakin ingin menghapus jadwal ini?');">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn-icon btn-delete" title="Hapus"><i
                                                class="bi bi-trash3"></i></button>
                                    </form>
                                </td>
                            </tr>
                        @empty
                            <tr>
                                <td colspan="9">Tidak ada data kelas atau coach yang tersedia.</td>
                            </tr>
                        @endforelse
                    </tbody>
                </table>
            </div>
        </div>

        <div class="modal fade" id="jadwalCoachModal" tabindex="-1" aria-labelledby="jadwalCoachModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <form id="jadwalCoachForm" class="modal-content" method="POST" action="">
                    @csrf
                    @method('POST')

                    <div class="modal-header">
                        <h5 class="modal-title" id="jadwalCoachModalLabel">Tambah Jadwal Coach</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal"
                            aria-label="Close"></button>
                    </div>
                    <div class="modal-body" id="modal-body">

                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-outline-secondary"
                            data-bs-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-outline-pink" style="">Simpan</button>
                    </div>
            </div>
            </form>
        </div>
    </div>
    </div>
    <footer>
        <p class="mb-0">&copy; 2025 glowithus.com</p>
        <small>Designed by glowithus</small>
    </footer>

    <script src="{{ asset('bootstrap-5.3.6-dist/js/bootstrap.bundle.min.js') }}"></script>
    <script>
        const bodyTable = document.getElementById('table-body');
        const modalBody = document.getElementById('modal-body');
        const form = document.getElementById('jadwalCoachForm');
        const editJudul = document.getElementById('jadwalCoachModalLabel');
        const tambahJadwal = document.getElementById('btn-tambah');

        //Fungsi Tambah
        tambahJadwal.addEventListener('click', tambahData)

        async function getCoach() {
            let response = await fetch('/coach');
            let data = await response.json();
            // console.log(data);
            return data.coach;
        }

        async function getJenisKelas() {
            let response = await fetch('/jk')
            let data = await response.json()
            // console.log(data)
            return data.jenisKelas;
        }

        async function tambahData() {
            editJudul.innerText = 'Tambah Jadwal';
            let coach = await getCoach();
            let jenisKelas = await getJenisKelas();
            console.log(coach);
            form.setAttribute("action", "/kelas-olahraga");
            modalBody.innerHTML =
                `
            <input type="hidden" name="id" id="jadwal_coach_id">
            <input type="hidden" name="kelas_olahraga_id" id="jadwal_coach_id" >` + `
            <div class="mb-3">
                <label for="coach_id_modal" class="form-label">Pilih Coach</label>
                <select name="coach_id" class="form-select" id="coach_id_modal" required>
                    ` + coach.map(coach => `<option value="${coach.id}">${coach.name}</option>`).join('') + `
                </select>
            </div>
            <div class="mb-3">
                <label for="nama_kelas_modal" class="form-label">Nama Kelas</label>
                <input type="text" class="form-control" id="nama_kelas_modal" name="nama_kelas"
                    required>
            </div>
            <div class="mb-3">
                <label for="jenis_kelas_modal" class="form-label">Jenis Kelas</label>
                <select name="jenis_kelas_id" class="form-select" id="jenis_kelas_modal" required>
                    ` + jenisKelas.map(jenisKelas =>
                    `<option value="${jenisKelas.id}">${jenisKelas.jenis_kelas}</option>`).join('') + `
                </select>
                <div class="mb-3">
                    <label for="tanggal_modal" class="form-label">Tanggal</label>
                    <input type="date" class="form-control" id="tanggal_modal" name="tanggal" "
                        required>
                </div>
                <div class="mb-3">
                    <label for="jam_mulai_modal" class="form-label">Jam Mulai</label>
                    <input type="time" class="form-control" id="jam_mulai_modal" name="jam_mulai" "
                        required>
                </div>
                <div class="mb-3">
                    <label for="jam_selesai_modal" class="form-label">Jam Selesai</label>
                    <input type="time" class="form-control" id="jam_selesai_modal" name="jam_selesai"
                        " required>
                </div>
                <div class="mb-3">
                    <label for="kapasitas_modal" class="form-label">Kapasitas</label>
                    <input type="number" class="form-control" id="kapasitas_modal" 
                        name="kapasitas" required>
                </div>
                <div class="mb-3">
                    <label for="status_modal" class="form-label">Status</label>
                    <select name="status" class="form-select" id="status_modal" required>
                        <option value="Aktif">Aktif</option>
                        <option value="Nonaktif">Nonaktif</option>
                    </select>
                </div>
            `;

        }

        //Fungsi Edit
        async function showModalBodyEdit(e) {
            let btnEdit = e.target.classList.contains('btn-edit-coach') || e.target.classList.contains('icon-edit');
            // console.log(e.target);
            if (btnEdit) {
                editJudul.innerText = 'Edit Jadwal';
                const id = e.target.dataset.id;
                const response = await fetch('/edit-kelas?id=' + id);
                const data = await response.text();
                modalBody.innerHTML = data;
                // const data = await response.json();
                // console.log(data);
                form.setAttribute("action", "/kelas-olahraga/" + id);
                e.stopPropagation();
            }
        }
        bodyTable.addEventListener('click', showModalBodyEdit);
    </script>

    <script>
        // document.addEventListener('DOMContentLoaded', function() {
        //     const jadwalCoachModal = document.getElementById('jadwalCoachModal');
        //     const jadwalCoachForm = document.getElementById('jadwalCoachForm');
        //     const modalTitle = document.getElementById('jadwalCoachModalLabel');
        //     const jadwalCoachIdInput = document.getElementById('jadwal_coach_id');
        //     const coachIdSelect = document.getElementById('coach_id_modal');
        //     const namaKelasInput = document.getElementById('nama_kelas_modal');
        //     const jenisKelasInput = document.getElementById('jenis_kelas_modal');
        //     const tanggalInput = document.getElementById('tanggal_modal');
        //     const jamMulaiInput = document.getElementById('jam_mulai_modal');
        //     const jamSelesaiInput = document.getElementById('jam_selesai_modal');
        //     const kapasitasInput = document.getElementById('kapasitas_modal');
        //     const hargaInput = document.getElementById('harga_modal');
        //     const methodInput = jadwalCoachForm.querySelector('input[name="_method"]');

        //     // Handle "Tambah Jadwal Coach" button click
        //     document.querySelector('.btn-tambah').addEventListener('click', function() {
        //         modalTitle.textContent = 'Tambah Jadwal Coach';
        //         jadwalCoachForm.action = "{{ route('kelas_olahraga.store') }}"; // Set action for store
        //         methodInput.value = 'POST'; // Set method for store
        //         jadwalCoachIdInput.value = ''; // Clear ID for new entry
        //         jadwalCoachForm.reset(); // Clear form fields
        //     });

        //     // Handle "Edit" button click for Jadwal Coach
        //     document.querySelectorAll('.btn-edit-coach').forEach(button => {
        //         button.addEventListener('click', function() {
        //             const id = this.dataset.id;
        //             const tanggal = this.dataset.tanggal;
        //             const coachId = this.dataset.coachId;
        //             const namaKelas = this.dataset.namaKelas;
        //             const jenisKelas = this.dataset.jenisKelas;
        //             const jamMulai = this.dataset.jamMulai;
        //             const jamSelesai = this.dataset.jamSelesai;
        //             const harga = this.dataset.harga;
        //             const kapasitas = this.dataset.kapasitas;

        //             modalTitle.textContent = 'Edit Jadwal Coach';
        //             jadwalCoachForm.action = '{{ route('kelas_olahraga.update', ':id') }}'.replace(
        //                 ':id', id); // Set action for update
        //             methodInput.value = 'PUT'; // Change method to PUT for update

        //             jadwalCoachIdInput.value = id;
        //             coachIdSelect.value = coachId;
        //             namaKelasInput.value = namaKelas;
        //             jenisKelasInput.value = jenisKelas;
        //             tanggalInput.value = tanggal;
        //             jamMulaiInput.value = jamMulai;
        //             jamSelesaiInput.value = jamSelesai;
        //             hargaInput.value = harga;
        //             kapasitasInput.value = kapasitas;
        //         });
        //     });
        // });
    </script>
</body>

</html>
