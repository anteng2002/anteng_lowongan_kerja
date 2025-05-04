@extends('layouts.app')

@section('content')
    <div class="container mt-5">
        <h1 class="text-center mb-4 text-primary">Eksplorasi Lowongan Kerja Indonesia</h1>
        <p class="text-center mb-5">Temukan peluang kerja terbaik di perusahaan-perusahaan terkemuka di Indonesia. Jelajahi posisi yang tersedia dan temukan karir impian Anda.</p>

        <!-- Galeri Lowongan Kerja -->
        <section>
            <div class="row">
                <!-- Lowongan PT. Teknologi Canggih -->
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <a href="{{ asset('images/kerja8.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                            <img src="{{ asset('images/kerja8.png') }}" class="img-fluid rounded shadow-lg gallery-img" alt="PT. Teknologi Canggih">
                        </a>
                        <p class="text-center mt-2">Posisi Developer di PT. Teknologi Canggih</p>
                    </div>
                </div>

                <!-- Lowongan PT. Pemasaran Global -->
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <a href="{{ asset('images/kerja7.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                            <img src="{{ asset('images/kerja7.png') }}" class="img-fluid rounded shadow-lg gallery-img" alt="PT. Pemasaran Global">
                        </a>
                        <p class="text-center mt-2">Posisi Pemasaran di PT. Pemasaran Global</p>
                    </div>
                </div>

                <!-- Lowongan PT. Manufaktur Modern -->
                <div class="col-md-4 mb-4">
                    <div class="gallery-item">
                        <a href="{{ asset('images/kerja6.png') }}" data-bs-toggle="lightbox" data-bs-target="#gallery" class="text-decoration-none">
                            <img src="{{ asset('images/kerja6.png') }}" class="img-fluid rounded shadow-lg gallery-img" alt="PT. Manufaktur Modern">
                        </a>
                        <p class="text-center mt-2">Posisi Manajer Produksi di PT. Manufaktur Modern</p>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <!-- Lightbox Script (Bootstrap 5) -->
    <div class="row justify-content-center mb-5">
        <div class="col-md-8">
            <div class="lightbox" id="gallery" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <!-- Carousel Item PT. Teknologi Canggih -->
                    <div class="carousel-item active">
                        <img src="{{ asset('images/kerja1.png') }}" class="d-block w-100" alt="Posisi Developer PT. Teknologi Canggih">
                    </div>
                    <!-- Carousel Item PT. Pemasaran Global -->
                    <div class="carousel-item">
                        <img src="{{ asset('images/kerja2.png') }}" class="d-block w-100" alt="Posisi Pemasaran PT. Pemasaran Global">
                    </div>
                    <!-- Carousel Item PT. Manufaktur Modern -->
                    <div class="carousel-item">
                        <img src="{{ asset('images/kerja3.png') }}" class="d-block w-100" alt="Posisi Manajer Produksi PT. Manufaktur Modern">
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection

@section('styles')
    <style>
        /* Galeri Foto Layout */
        .gallery-item {
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            transition: transform 0.3s ease;
        }

        .gallery-img {
            transition: transform 0.3s ease, opacity 0.3s ease;
            border-radius: 10px;
        }

        .gallery-item:hover .gallery-img {
            transform: scale(1.05); /* Zoom effect */
            opacity: 0.9;
        }

        .gallery-item:hover {
            box-shadow: 0 4px 20px rgba(0, 0, 0, 0.3); /* Hover shadow effect */
            transform: scale(1.05);
        }

        .carousel-inner img {
            border-radius: 10px;
        }
    </style>
@endsection
