<input type="hidden" name="id" id="jadwal_coach_id" value="{{ $kelas->id }}">
<div class="mb-3">
    <label for="coach_id_modal" class="form-label">Pilih Coach</label>
    <select name="coach_id" class="form-select" id="coach_id_modal" required>
        @foreach ($coach as $row)
            <option value="{{ $row->id }}"{{ $row->id == $kelas->coach_id ? 'selected' : '' }}>{{ $row->name }}
            </option>
        @endforeach
    </select>
    {{-- <input type="text" name="coach_id" id="coach_id_modal" class="form-control" value="{{ $coach->id === $coach->name }}" disabled>
    </input> --}}
</div>
<div class="mb-3">
    <label for="nama_kelas_modal" class="form-label">Nama Kelas</label>
    <input type="text" class="form-control" id="nama_kelas_modal" name="nama_kelas" value="{{ $kelas->nama_kelas }}"
        required>
</div>
<div class="mb-3">
    <label for="jenis_kelas_modal" class="form-label">Jenis Kelas</label>
    <select name="jenis_kelas_id" class="form-select" id="jenis_kelas_modal" required>
        @foreach ($jenisKelas as $row)
            <option value="{{ $row->id }}"{{ $row->id == $kelas->jenis_kelas_id ? 'selected' : '' }}>
                {{ $row->jenis_kelas }}</option>
        @endforeach
    </select>
    <div class="mb-3">
        <label for="tanggal_modal" class="form-label">Tanggal</label>
        <input type="date" class="form-control" id="tanggal_modal" name="tanggal" value="{{ $kelas->tanggal }}"
            required>
    </div>
    <div class="mb-3">
        <label for="jam_mulai_modal" class="form-label">Jam Mulai</label>
        <input type="time" class="form-control" id="jam_mulai_modal" name="jam_mulai" value="{{ $kelas->jam_mulai }}"
            required>
    </div>
    <div class="mb-3">
        <label for="jam_selesai_modal" class="form-label">Jam Selesai</label>
        <input type="time" class="form-control" id="jam_selesai_modal" name="jam_selesai"
            value="{{ $kelas->jam_selesai }}" required>
    </div>
    <div class="mb-3">
        <label for="kapasitas_modal" class="form-label">Kapasitas</label>
        <input type="number" class="form-control" id="kapasitas_modal" value="{{ $kelas->kapasitas }}"
            name="kapasitas" required>
    </div>
    <div class="mb-3">
        <label for="harga_modal" class="form-label">Harga</label>
        <input type="number" class="form-control" id="harga_modal" name="harga" value="{{ $kelas->harga }}"
            required>
    </div>
    <div class="mb-3">
        <label for="status_modal" class="form-label">Status</label>
        <select name="status" class="form-select" id="status_modal" required>
            <option value="Aktif" {{ $kelas->status === 'Aktif' ? 'selected' : '' }}>Aktif</option>
            <option value="Nonaktif"{{ $kelas->status === 'Nonaktif' ? 'selected' : '' }}>Nonaktif</option>
        </select>
    </div>
