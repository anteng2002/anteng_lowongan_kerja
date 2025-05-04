@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary">Layanan Lowongan Kerja</h1>
        <p class="text-center mb-5">Temukan berbagai layanan yang membantu Anda dalam mencari pekerjaan atau membuka lowongan, mulai dari pendaftaran lowongan hingga pelatihan karir.</p>

        <!-- Layanan Lowongan Kerja -->
        <section>
            <div class="row g-4">
                <!-- Layanan Pendaftaran Lowongan -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 rounded-4 hover-effect">
                        <div class="card-header bg-success text-white text-center rounded-top-4">
                            <i class="bi bi-person-plus" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Pendaftaran Lowongan</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Daftarkan perusahaan Anda untuk membuka lowongan kerja dan temukan kandidat terbaik yang sesuai dengan kebutuhan Anda.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-success w-100">Daftar Lowongan</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Pelatihan Karir -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 rounded-4 hover-effect">
                        <div class="card-header bg-info text-white text-center rounded-top-4">
                            <i class="bi bi-card-list" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Paket Pelatihan Karir</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Tersedia berbagai paket pelatihan dan sertifikasi untuk mempersiapkan pencari kerja menghadapi dunia kerja yang kompetitif.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-info w-100">Lihat Pelatihan</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Konsultasi Karir -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 rounded-4 hover-effect">
                        <div class="card-header bg-warning text-white text-center rounded-top-4">
                            <i class="bi bi-person-circle" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Konsultasi Karir</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Dapatkan panduan dari konsultan karir yang berpengalaman untuk membantu Anda menyiapkan CV, wawancara, dan memilih karir yang tepat.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-warning w-100">Jadwalkan Konsultasi</a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row g-4">
                <!-- Layanan Akomodasi Pencari Kerja -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 rounded-4 hover-effect">
                        <div class="card-header bg-danger text-white text-center rounded-top-4">
                            <i class="bi bi-house-door" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Akomodasi Pencari Kerja</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Tersedia fasilitas penginapan terbaik bagi pencari kerja yang perlu berpindah lokasi untuk mengikuti wawancara atau pelatihan.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-danger w-100">Cari Akomodasi</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Transportasi Pencari Kerja -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 rounded-4 hover-effect">
                        <div class="card-header bg-primary text-white text-center rounded-top-4">
                            <i class="bi bi-car-front" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Transportasi Pencari Kerja</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Kami menyediakan transportasi yang nyaman untuk pencari kerja yang perlu berpindah antar lokasi wawancara atau pelatihan.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-primary w-100">Pesan Transportasi</a>
                        </div>
                    </div>
                </div>

                <!-- Layanan Informasi Karir -->
                <div class="col-md-4 mb-4">
                    <div class="card shadow-lg border-0 rounded-4 hover-effect">
                        <div class="card-header bg-secondary text-white text-center rounded-top-4">
                            <i class="bi bi-info-circle" style="font-size: 3rem;"></i>
                            <h5 class="card-title mt-2">Pusat Informasi Karir</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Temukan informasi lengkap tentang tren karir, tips wawancara, dan peluang kerja di berbagai industri.</p>
                        </div>
                        <div class="card-footer text-center">
                            <a href="#" class="btn btn-secondary w-100">Lihat Informasi</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection

@section('styles')
    <style>
        /* Card Hover Effect */
        .hover-effect {
            transition: transform 0.3s ease-in-out, box-shadow 0.3s ease-in-out;
        }

        .hover-effect:hover {
            transform: scale(1.05);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.1);
        }

        /* Icon Size for Cards */
        .card-header i {
            font-size: 3rem;
        }

        /* Card Rounded Corners */
        .rounded-4 {
            border-radius: 16px;
        }

        /* Full-Width Buttons */
        .btn.w-100 {
            width: 100%;
        }
    </style>
@endsection
