@extends('layouts.app')
@section('title', 'Contact - Perusahaan XYZ')
@section('content')
    <!-- Bagian Konten -->
    <section class="contact-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="map-section">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3981.95089413187!2d98.64991007434908!3d3.5987261502258603!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x30312e225026dc63%3A0xd423f58edbc188eb!2sJl.%20Sampul%20No.3%2C%20Sei%20Putih%20Bar.%2C%20Kec.%20Medan%20Petisah%2C%20Kota%20Medan%2C%20Sumatera%20Utara%2020118!5e0!3m2!1sid!2sid!4v1716038215903!5m2!1sid!2sid" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="contact-info">
                        <h2>Hubungi Kami</h2>
                        <p><i class="bi bi-geo-alt-fill"></i> Jalan Sampul No.3,<br>Kecamatan Medan Petisah, Kota Medan, Provinsi Sumatera Utara, KodePos: 20118</p>
                        <p><i class="bi bi-telephone-fill"></i> +62 852456</p>
                        <p><i class="bi bi-envelope-fill"></i> <a href="mailto:x-one@gmail.com">x-one@gmail.com</a></p>
                    </div>
                    <div class="contact-form">
                        <h2>Kirim Pesan</h2>
                        <form action="process_form.php" method="post">
                            <div class="form-group">
                                <label for="name">Nama</label>
                                <input type="text" id="name" name="name" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label for="message">Pesan</label>
                                <textarea id="message" name="message" class="form-control" rows="5" required></textarea>
                            </div>
                            <button type="submit" class="btn btn-primary">Kirim</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
