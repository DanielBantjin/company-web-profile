<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>X-ONE</title>
    <link rel="icon" href="{{ asset('images/pc8.jpg') }}" type="image/png">
    <!-- Referensi Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/styles.css') }}">
</head>

<body>
    <nav class="navbar navbar-expand-lg navbar-dark sticky-top">
        <div class="container">
            <a class="navbar-brand" href="#"><img src="images/pc8.jpg" alt="Logo" width="30" height="30" class="d-inline-block align-text-top">X-ONE</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse animate__animated animate__fadeInRight" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">Tentang Kami</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('service') }}">Layanan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('blog') }}">Blog</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">Kontak</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="mb-5 mt-5">
        @yield('content')
    </div>
    <!-- Bagian Footer -->
    <footer class="bg-dark text-light py-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-3">
                    <img src="{{ asset('images/pc8.jpg') }}" alt="X-ONE FURNITURE" class="img-fluid mb-3">
                </div>
                <div class="col-lg-6">
                    <h5>X-ONE</h5>
                    <p>Kami adalah perusahaan inovatif yang berfokus pada pengembangan solusi teknologi terbaik untuk memenuhi kebutuhan bisnis klien kami.</p>
                </div>
                <div class="col-lg-3">
                    <h5>Hubungi Kami</h5>
                    <ul class="list-unstyled">
                        <li><i class="bi bi-geo-alt-fill"></i> Jalan Sampul No. 19, Medan, Indonesia</li>
                        <li><i class="bi bi-telephone-fill"></i> +123 456 789</li>
                        <li><i class="bi bi-envelope-fill"></i> info@furniturexOne.com</li>
                    </ul>
                    <div class="social-icons">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-twitter"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-linkedin"></i></a>
                    </div>
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
