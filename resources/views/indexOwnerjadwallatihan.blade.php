<!-- resources/views/indexOwnerJadwalLatihan.blade.php -->

<div class="container mt-4">
    <h2 class="mb-4">Daftar Jadwal Latihan</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <a href="{{ route('jadwal.owner.create') }}" class="btn btn-primary mb-3">Tambah Jadwal</a>

    <table class="table table-bordered">
        <thead class="table-light">
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
            @foreach($jadwals as $jadwal)
            <tr>
                <td>{{ $loop->iteration }}</td>
                <td>{{ $jadwal->nama_peserta }}</td>
                <td>{{ $jadwal->jenis_kelas }}</td>
                <td>{{ $jadwal->jam_mulai }}</td>
                <td>{{ $jadwal->jam_selesai }}</td>
                <td>{{ $jadwal->status }}</td>
                <td>
                    <a href="{{ route('jadwal.owner.edit', $jadwal->id) }}" class="btn btn-sm btn-warning">Edit</a>
                    <form action="{{ route('jadwal.owner.destroy', $jadwal->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Yakin ingin menghapus data ini?')">
                        @csrf
                        @method('DELETE')
                        <button class="btn btn-sm btn-danger">Hapus</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection
