<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Selamat Datang</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(135deg, #f0f4f8, #cce3f6);
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
            color: #333;
        }

        .welcome-box {
            max-width: 600px;
            padding: 3rem;
            background-color: white;
            border-radius: 16px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .logo-img {
            width: 150px;
            margin-bottom: 20px;
        }

        .btn-start {
            background-color: #ffc107;
            color: #000;
            font-weight: 600;
            padding: 12px 30px;
            font-size: 1.1rem;
            border-radius: 30px;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-start:hover {
            background-color: #e0a800;
            transform: scale(1.05);
        }

        h1 {
            font-weight: bold;
            color: #2c3e50;
        }

        p {
            color: #555;
        }
    </style>
</head>
<body class="d-flex flex-column min-vh-100">

    <div class="welcome-box mx-auto my-auto">
        <img src="{{ asset('img/logoutb.png') }}" alt="Logo UTB" class="logo-img">
        <h1>Selamat Datang!</h1>
        <p>Ini adalah aplikasi data mahasiswa berbasis Laravel.<br>Klik tombol di bawah untuk memulai.</p>
        <a href="{{ route('mahasiswa.index') }}" class="btn btn-start mt-3">Mulai</a>
    </div>

    <footer class="mt-auto text-center text-muted py-3" style="font-size: 0.85rem;">
        &copy; 2025 Yogi Bastian · Teknik Informatika
    </footer>

</body>

</html>
