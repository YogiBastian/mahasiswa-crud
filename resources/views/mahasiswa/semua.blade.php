@extends('layouts.app')

@section('title', 'Semua Mahasiswa - Tampilan Biodata')

@section('content')

<div class="row">
    @foreach($mahasiswa as $mhs)
    <div class="col-12 col-md-6 mb-4">
        <div class="card shadow-sm p-3 h-100">
            <div class="row g-0 align-items-center">
                <!-- FOTO -->
                <div class="col-auto">
                    @if ($mhs->foto)
                        <img src="{{ asset('storage/' . $mhs->foto) }}"
                             alt="Foto"
                             width="120" height="160"
                             style="object-fit: cover; display: block;"
                             class="rounded-start">
                    @else
                        <div class="bg-secondary text-white d-flex align-items-center justify-content-center"
                             style="width: 120px; height: 160px;">
                             No Foto
                        </div>
                    @endif
                </div>

                <!-- BIODATA -->
                <div class="col ps-3 pe-4 py-3">
                    <h5 class="mb-1">{{ $mhs->nama }}</h5>
                    <p class="mb-1"><strong>NIM:</strong> {{ $mhs->nim }}</p>
                    <p class="mb-1"><strong>Jurusan:</strong> {{ $mhs->jurusan }}</p>
                    <p class="mb-1"><strong>TTL:</strong> {{ $mhs->tempat_lahir }}, {{ $mhs->tanggal_lahir }}</p>
                    <p class="mb-1"><strong>Jenis Kelamin:</strong> {{ $mhs->jenis_kelamin }}</p>
                    <p class="mb-0"><strong>No HP:</strong> {{ $mhs->no_hp }}</p>
                </div>
            </div>
        </div>
    </div>
    @endforeach
</div>

@endsection
