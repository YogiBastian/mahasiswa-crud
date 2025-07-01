@extends('layouts.app')

@section('title', 'Data Mahasiswa')

@section('content')

    <div class="d-flex justify-content-between align-items-center mb-3">
        <h4>Data Mahasiswa</h4>
        <a href="{{ route('mahasiswa.create') }}" class="btn btn-primary">+ Tambah Mahasiswa</a>
    </div>

    @if (session('success'))
        <div class="alert alert-success">
            {{ session('success') }}
        </div>
    @endif

    <table class="table table-bordered table-striped shadow-sm">
        <thead class="table-dark text-center">
            <tr>
                <th>No</th>
                <th>Foto</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Jurusan</th>
                <th>JK</th>
                <th>TTL</th>
                <th>No HP</th>
                <th>Email</th>
                <th>Alamat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @foreach($mahasiswa as $index => $mhs)
                <tr>
                    <td class="text-center">{{ $index + 1 }}</td>
                    <td class="text-center">
                        @if ($mhs->foto)
                            <img src="{{ asset('storage/' . $mhs->foto) }}" alt="Foto" width="50" height="50" style="object-fit: cover; border-radius: 50%;">
                        @else
                            <span class="text-muted">-</span>
                        @endif
                    </td>
                    <td>{{ $mhs->nim }}</td>
                    <td>{{ $mhs->nama }}</td>
                    <td>{{ $mhs->jurusan }}</td>
                    <td>{{ $mhs->jenis_kelamin }}</td>
                    <td>{{ $mhs->tempat_lahir }}, {{ $mhs->tanggal_lahir }}</td>
                    <td>{{ $mhs->no_hp }}</td>
                    <td>{{ $mhs->email }}</td>
                    <td>{{ $mhs->alamat }}</td>
                    <td>
                        <div class="d-grid gap-2">
                            <a href="{{ route('mahasiswa.edit', $mhs->id) }}" class="btn btn-warning btn-sm">Edit</a>
                            <form action="{{ route('mahasiswa.destroy', $mhs->id) }}" method="POST" onsubmit="return confirm('Yakin ingin menghapus?')">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger btn-sm">Hapus</button>
                            </form>
                        </div>
                    </td>

                </tr>
            @endforeach
        </tbody>
    </table>

@endsection
