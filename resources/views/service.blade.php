@extends('layouts.app')
@section('content')
    <!-- Bagian Konten -->
    <!-- Konten aplikasi web akan ditambahkan di sini -->
    <section class="services-section mt-4 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 mb-4">
                    <div class="card bg-light">
                        <img src="images/g1.png" class="card-img-top" alt="Layanan 1" >
                        <div class="card-body">
                            <h5 class="card-title">Konsultasi dan Kustomisasi Furnitur</h5>
                            <p class="card-text">Tim ahli kami siap membantu Anda memilih furnitur
                                yang sesuai dengan gaya, kebutuhan, dan anggaran Anda dengan furnitur
                                yang benar-benar unik dan sesuai dengan selera Anda</p>
                            <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card bg-light">
                        <img src="images/g2.png" class="card-img-top" alt="Layanan 2" >
                        <div class="card-body">
                            <h5 class="card-title">Pengiriman dan Pemasangan</h5>
                            <p class="card-text">Kami menyediakan layanan pengiriman cepat dan pemasangan
                                profesional untuk memastikan furnitur Anda tiba dengan aman dan siap digunakan.
                                Tim ahli kami akan menangani semua detail pemasangan di tempat Anda.</p>
                            <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 mb-4">
                    <div class="card bg-light">
                        <img src="images/1.jpg" class="card-img-top" alt="Layanan 3" >
                        <div class="card-body">
                            <h5 class="card-title">Perbaikan dan Perawatan</h5>
                            <p class="card-text">Jaga furnitur Anda tetap dalam kondisi prima dengan layanan
                                perbaikan dan perawatan kami. Dari perbaikan kecil hingga restorasi besar,
                                tim kami siap membantu.</p>
                            <a href="#" class="btn btn-primary">Pelajari Lebih Lanjut</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
