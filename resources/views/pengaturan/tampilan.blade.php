@extends('layouts.app')

@section('title', 'Pengaturan Tampilan')

@section('content')

<div class="card shadow-sm">
    <div class="card-body">
        <h5 class="card-title mb-4">Pengaturan Tampilan Aplikasi</h5>

        <!-- Toggle Dark Mode -->
        <div class="mb-4">
            <label class="form-label">Mode Tampilan</label>
            <div class="form-check form-switch">
                <input class="form-check-input" type="checkbox" id="darkModeToggle">
                <label class="form-check-label" for="darkModeToggle">Aktifkan Dark Mode</label>
            </div>
        </div>

        <!-- Jumlah Data per Halaman -->
        <div class="mb-4">
            <label class="form-label">Jumlah Data per Halaman (Pagination)</label>
            <select class="form-select" id="pageLimitSelect">
                <option value="5">5 Data</option>
                <option value="10" selected>10 Data</option>
                <option value="25">25 Data</option>
                <option value="50">50 Data</option>
            </select>
        </div>

        <button class="btn btn-primary" onclick="simpanPengaturan()">Simpan Pengaturan</button>
    </div>
</div>

<!-- Script Dark Mode Dummy -->
<script>
    function simpanPengaturan() {
        const darkMode = document.getElementById('darkModeToggle').checked;
        const limit = document.getElementById('pageLimitSelect').value;

        alert('Pengaturan disimpan:\nDark Mode: ' + (darkMode ? 'Aktif' : 'Nonaktif') + '\nLimit: ' + limit + ' data');
        // Simpan preferensi (jika mau bisa ke database)
    }

    document.addEventListener('DOMContentLoaded', function () {
        const body = document.getElementById('main-body');
        const darkMode = localStorage.getItem('darkMode') === 'true';

        document.getElementById('darkModeToggle').checked = darkMode;

        if (darkMode) {
            body.classList.add('bg-dark', 'text-white');
        }
    });

    document.getElementById('darkModeToggle').addEventListener('change', function () {
        const body = document.getElementById('main-body');

        if (this.checked) {
            body.classList.add('bg-dark', 'text-white');
            localStorage.setItem('darkMode', true);
        } else {
            body.classList.remove('bg-dark', 'text-white');
            localStorage.setItem('darkMode', false);
        }
    });
</script>

@endsection
