@extends('layouts.app')
@section('title', 'About - X-ONE FURNITURE')
@section('content')
<section class="about-section py-5">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 text-center mb-4">
                <img src="images/8.jpg" alt="Tentang Kami" class="img-fluid rounded shadow img-400x400">
            </div>
            <div class="col-lg-6">
                <h2 class="mb-4 text-primary">X-ONE FURNITURE</h2>
                <p class="lead">Selamat datang di <strong>X-ONE FURNITURE</strong>, tempat di mana kenyamanan bertemu dengan gaya yang elegan.</p>
                <p>Di X-ONE FURNITURE, kami percaya bahwa furniture bukan hanya soal fungsionalitas. Ini adalah tentang menciptakan ruang yang menceritakan kisah unik Anda. Didirikan pada tahun 1945, misi kami adalah untuk menghadirkan koleksi furniture berkualitas tinggi dan stylish yang sesuai dengan setiap selera dan anggaran.</p>
                <p>Dari awal yang sederhana sebagai toko lokal kecil, kami telah berkembang menjadi nama yang terpercaya dalam industri furniture. Perjalanan kami didorong oleh hasrat untuk desain dan komitmen terhadap kualitas. Setiap item dalam koleksi kami dipilih dengan cermat untuk memastikan memenuhi standar tinggi kami dalam hal keahlian dan ketahanan.</p>
            </div>
        </div>
    </div>
</section>
<section class="values-section bg-light py-5">
    <div class="container">
        <div class="row text-center">
            <div class="col-md-4 mb-4">
                <div class="icon mb-3">
                    <i class="fas fa-star fa-3x text-primary"></i>
                </div>
                <h4 class="text-uppercase">Kualitas</h4>
                <p>Kami memilih bahan terbaik dan bekerja sama dengan pengrajin terampil untuk menghadirkan furniture yang tahan lama.</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="icon mb-3">
                    <i class="fas fa-smile fa-3x text-primary"></i>
                </div>
                <h4 class="text-uppercase">Layanan Pelanggan</h4>
                <p>Kepuasan Anda adalah prioritas utama kami. Tim kami yang ramah dan berpengetahuan siap membantu Anda setiap saat.</p>
            </div>
            <div class="col-md-4 mb-4">
                <div class="icon mb-3">
                    <i class="fas fa-leaf fa-3x text-primary"></i>
                </div>
                <h4 class="text-uppercase">Keberlanjutan</h4>
                <p>Kami berkomitmen pada praktik berkelanjutan dan menawarkan pilihan ramah lingkungan untuk membantu mengurangi jejak lingkungan kami.</p>
            </div>
        </div>
    </div>
</section>
<section class="our-journey-section py-5">
    <div class="container">
        <h3 class="text-center mb-4 text-secondary">Perjalanan Kami</h3>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="journey-card p-4 bg-white rounded shadow">
                    <h4 class="text-primary">1945 - Awal yang Sederhana</h4>
                    <p>Dimulai sebagai toko kecil dengan visi besar untuk membawa perubahan dalam industri furniture.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="journey-card p-4 bg-white rounded shadow">
                    <h4 class="text-primary">1950 - Ekspansi dan Pertumbuhan</h4>
                    <p>Mulai dikenal secara lokal dan memperluas koleksi dengan desain yang lebih beragam.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="journey-card p-4 bg-white rounded shadow">
                    <h4 class="text-primary">2000 - Teknologi dan Inovasi</h4>
                    <p>Memperkenalkan teknologi terbaru dalam pembuatan furniture untuk meningkatkan kualitas dan efisiensi.</p>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="journey-card p-4 bg-white rounded shadow">
                    <h4 class="text-primary">Sekarang - Nama yang Terpercaya</h4>
                    <p>Menjadi salah satu nama yang paling dipercaya dalam industri furniture dengan komitmen pada kualitas dan layanan pelanggan.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
