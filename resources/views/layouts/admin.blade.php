<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <!-- Tambahkan baris ini untuk menyertakan favicon baru -->
    <link rel="icon" href="{{ asset('images/pc8.jpg') }}" type="image/png">
    <!-- Referensi Bootstrap CSS -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap">
    <style>
        body {
            font-family: 'Montserrat', sans-serif;
            background-color: #f8f9fa;
            display: flex;
            flex-direction: column;
            min-height: 100vh;
            margin: 0;
        }

        .sidebar {
            min-width: 250px;
            max-width: 250px;
            background-color: #343a40;
            color: #fff;
            position: fixed;
            height: 100%;
            overflow-y: auto;
            padding-top: 20px;
        }

        .sidebar a {
            color: #fff;
            text-decoration: none;
        }

        .sidebar a:hover {
            background-color: #495057;
            color: #fff;
        }

        .sidebar .list-group-item {
            background-color: #343a40;
            border: none;
        }

        .sidebar .list-group-item:hover {
            background-color: #495057;
        }

        .content {
            margin-left: 250px;
            padding: 20px;
            flex: 1;
            overflow-y: auto;
        }

        .navbar-brand {
            font-weight: 700;
        }

        .footer {
            background-color: #343a40;
            color: #fff;
            padding: 5px 10px;
            font-size: 0.8em;
        }

        .footer .container {
            padding: 10px 0;
        }

        .footer h5 {
            font-size: 1.2em;
        }

        .footer p {
            font-size: 0.9em;
        }

        .footer ul {
            font-size: 0.9em;
        }
    </style>
</head>

<body>
    <!-- Sidebar -->
    <div class="sidebar">
        <div class="navbar-brand text-center py-3">
            Admin - X-ONE FURNITURE
        </div>
        <div class="list-group list-group-flush">
            <a href="{{ route('admin.dashboard') }}" class="list-group-item list-group-item-action">
                <i class="fas fa-tachometer-alt"></i> Dashboard
            </a>
            <a href="{{ route('admin.users.index') }}" class="list-group-item list-group-item-action">
                <i class="fas fa-users"></i> Kelola Pengguna
            </a>
            <a href="{{ route('admin.posts.index') }}" class="list-group-item list-group-item-action">
                <i class="fas fa-edit"></i> Kelola Postingan
            </a>
            <a href="{{ route('admin.settings') }}" class="list-group-item list-group-item-action">
                <i class="fas fa-cog"></i> Pengaturan
            </a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
            <a href="{{ route('logout') }}" class="list-group-item list-group-item-action"
               onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <i class="fas fa-sign-out-alt"></i> Keluar
            </a>
        </div>
    </div>

    <!-- Konten Utama -->
    <div class="content">
        @yield('content')
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <img src="{{ asset('images/pc8.jpg') }}" alt="X-ONE FURNITURE" class="img-fluid">
                </div>
                <div class="col-lg-6">
                    <h5>X-ONE FURNITURE</h5>
                    <p>Kami adalah perusahaan inovatif yang berfokus pada pengembangan solusi teknologi terbaik untuk memenuhi kebutuhan bisnis klien kami.</p>
                </div>
                <div class="col-lg-3">
                    <h5>Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> Jalan Sampul No. 19, Medan, Indonesia</li>
                        <li><i class="bi bi-telephone-fill"></i> +123 456 789</li>
                        <li><i class="bi bi-envelope-fill"></i> info@furniturexOne.com</li>
                    </ul>
                </div>
            </div>
            <hr class="my-4">
            <p class="text-center mb-0">Hak Cipta &copy; 2024 X-ONE. Semua Hak Dilindungi.</p>
        </div>
    </footer>

    <!-- Referensi Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>

</html>
