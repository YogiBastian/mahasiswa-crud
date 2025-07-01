<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>@yield('title') - App</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        body {
            display: flex;
            flex-direction: row;
            min-height: 100vh;
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
        }

        .sidebar {
            background-color: #1e1e2d;
            color: white;
            min-width: 250px;
            transition: all 0.3s ease;
        }

        .sidebar.collapsed {
            min-width: 80px;
        }

        .sidebar .nav-link {
            color: #ffffffcc;
            padding: 12px 20px;
            display: flex;
            align-items: center;
        }

        .sidebar .nav-link:hover {
            background-color: #34344a;
            color: white;
        }

        .sidebar .nav-link i {
            margin-right: 12px;
            min-width: 20px;
            text-align: center;
        }

        .sidebar.collapsed .nav-link span {
            display: none;
        }

        .toggle-btn {
            background: none;
            border: none;
            color: white;
            font-size: 20px;
            margin-left: auto;
            padding: 10px;
        }

        .main-content {
            flex: 1;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            background-color: #f4f4f4;
        }

        .content-wrapper {
            flex: 1;
            padding: 20px;
        }

        footer {
            font-size: 0.85rem;
            text-align: center;
            padding: 10px 0;
        }

        /* Dark Mode */
        body.dark-mode,
        .main-content.dark-mode {
            background-color: #121212 !important;
            color: white !important;
        }

        .main-content.dark-mode .card {
            background-color: #1f1f1f;
            color: white;
        }

        .sidebar.dark-mode {
            background-color: #000000;
        }

        .sidebar.dark-mode .nav-link {
            color: #ccc;
        }

        .sidebar.dark-mode .nav-link:hover {
            background-color: #1c1c1c;
            color: white;
        }
    </style>
</head>
<body id="main-body">

<!-- Sidebar -->
<div class="sidebar" id="sidebar">
    <div class="d-flex align-items-center justify-content-between p-3">
        <span class="fw-bold">🧾</span>
        <button class="toggle-btn" onclick="toggleSidebar()">☰</button>
    </div>
    <a href="{{ route('mahasiswa.index') }}" class="nav-link"><i class="fas fa-users"></i> <span>Data Mahasiswa</span></a>
    <a href="{{ route('mahasiswa.create') }}" class="nav-link"><i class="fas fa-plus-circle"></i> <span>Tambah Mahasiswa</span></a>
    <a href="{{ route('mahasiswa.semua') }}" class="nav-link"><i class="fas fa-id-card"></i> <span>Lihat Semua</span></a>
    <a href="{{ route('pengaturan.tampilan') }}" class="nav-link"><i class="fas fa-paint-brush"></i> <span>Tampilan Aplikasi</span></a>
    <a href="{{ url('/') }}" class="nav-link"><i class="fas fa-door-open"></i> <span>Keluar</span></a>
</div>

<!-- Main Content -->
<div class="main-content" id="main-content">
    <div class="content-wrapper">
        <h4>@yield('title')</h4>
        <hr>
        @yield('content')
    </div>

    <footer class="text-muted">
        &copy; 2025 Yogi Bastian · Teknik Informatika
    </footer>
</div>

<!-- Script Sidebar & Dark Mode -->
<script>
    function toggleSidebar() {
        document.getElementById('sidebar').classList.toggle('collapsed');
    }

    document.addEventListener('DOMContentLoaded', function () {
        const isDark = localStorage.getItem('darkMode') === 'true';
        const body = document.getElementById('main-body');
        const content = document.getElementById('main-content');
        const sidebar = document.getElementById('sidebar');

        if (isDark) {
            body.classList.add('dark-mode');
            content.classList.add('dark-mode');
            sidebar.classList.add('dark-mode');
        }
    });
</script>

</body>
</html>
