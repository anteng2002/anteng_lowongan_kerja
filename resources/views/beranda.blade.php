@extends('layouts.app')

@section('content')
   <!-- Hero Section with Parallax Effect and Transparent Overlay -->
   <section class="hero-section" style="background-image: url('{{ asset('images/kerja1.png') }}'); background-size: cover; background-position: center; height: 80vh; color: white;">
    <!-- Transparent Overlay -->
    <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.5); height: 100%;">
        <div class="container text-center py-5">
            <h1 class="display-4 text-shadow">Temukan Lowongan Kerja Terbaru!</h1>
            <p class="lead">Cari pekerjaan impianmu dengan berbagai pilihan lowongan di berbagai bidang.</p>
            <a href="#lowongan" class="btn btn-light btn-lg shadow-sm">Lihat Lowongan Kerja</a>
        </div>
    </div>
</section>

    <!-- Sekilas Tentang Lowongan Kerja -->
    <section id="tentang" class="py-5" style="background-color: #f4f8fb;">
        <div class="container">
            <h2 class="text-center text-primary">Tentang Lowongan Kerja Kami</h2>
            <p class="text-center">Kami menyediakan berbagai informasi lowongan kerja di perusahaan terkemuka di Indonesia. Temukan pekerjaan yang sesuai dengan keahlian dan minat Anda di sini!</p>
        </div>
    </section>

    <!-- Tips Mencari Pekerjaan -->
    <section id="tips" class="py-5">
        <div class="container">
            <h2 class="text-center text-success">Tips Mencari Pekerjaan</h2>
            <p class="text-center">Berikut adalah beberapa tips untuk membantu Anda mendapatkan pekerjaan yang sesuai dengan keahlian Anda.</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-info text-white">
                            <h5 class="card-title">Perbarui CV Anda</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Pastikan CV Anda selalu up-to-date dengan pengalaman terbaru dan keterampilan yang relevan dengan pekerjaan yang dilamar.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-info text-white">
                            <h5 class="card-title">Buat Portofolio</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Portofolio yang menarik dapat menunjukkan keahlian Anda dengan lebih baik. Gunakan platform seperti GitHub, Behance, atau lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-header bg-info text-white">
                            <h5 class="card-title">Jaringan dan Koneksi</h5>
                        </div>
                        <div class="card-body">
                            <p class="card-text">Manfaatkan LinkedIn dan media sosial lainnya untuk terhubung dengan profesional di industri yang Anda minati.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Perusahaan yang Membuka Lowongan -->
<section id="perusahaan" class="py-5" style="background-color: #f4f8fb;">
    <div class="container">
        <h2 class="text-center text-primary">Perusahaan yang Membuka Lowongan</h2>
        <p class="text-center">Berikut adalah beberapa perusahaan terkemuka yang saat ini membuka lowongan kerja.</p>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100"> <!-- Tambahkan kelas h-100 untuk memastikan tinggi card sama -->
                    <img src="{{ asset('images/kerja2.png') }}" class="card-img-top" alt="Company 1">
                    <div class="card-body">
                        <h5 class="card-title">PT. Teknologi Canggih</h5>
                        <p class="card-text">Mencari Developer Software untuk bergabung dalam tim pengembangan aplikasi inovatif.</p>
                        <a href="#" class="btn btn-primary">Lihat Lowongan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100 d-flex align-items-center pt-5"> <!-- Tambahkan kelas h-100 untuk memastikan tinggi card sama -->
                    <img src="{{ asset('images/kerja3.png') }}" class="card-img-top" alt="Company 2">
                    <div class="card-body">
                        <h5 class="card-title">PT. Pemasaran Global</h5>
                        <p class="card-text">Mencari tenaga pemasaran untuk memperkenalkan produk di pasar Indonesia.</p>
                        <a href="#" class="btn btn-primary">Lihat Lowongan</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="card shadow-sm h-100"> <!-- Tambahkan kelas h-100 untuk memastikan tinggi card sama -->
                    <img src="{{ asset('images/kerja4.png') }}" class="card-img-top" alt="Company 3">
                    <div class="card-body">
                        <h5 class="card-title">PT. Manufaktur Modern</h5>
                        <p class="card-text">Lowongan untuk posisi Manajer Produksi di perusahaan manufaktur besar.</p>
                        <a href="#" class="btn btn-primary">Lihat Lowongan</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


    <!-- Testimoni Pengguna -->
    <section id="testimoni" class="py-5">
        <div class="container">
            <h2 class="text-center text-success">Testimoni Pengguna</h2>
            <p class="text-center">Dengarkan cerita sukses mereka yang telah menemukan pekerjaan melalui platform kami.</p>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="card-text">"Saya menemukan pekerjaan impian saya di PT. Teknologi Canggih melalui platform ini. Proses pencariannya sangat mudah dan cepat!" - <strong>Rudi, Developer IT</strong></p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <div class="card shadow-sm">
                        <div class="card-body">
                            <p class="card-text">"Terima kasih! Saya berhasil mendapatkan pekerjaan sebagai Marketing di perusahaan besar. Prosesnya sangat efisien." - <strong>Sarah, Marketing</strong></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section id="faq" class="py-5" style="background-color: #f4f8fb;">
        <div class="container">
            <h2 class="text-center text-primary">FAQ - Pertanyaan yang Sering Diajukan</h2>
            <div class="accordion" id="faqAccordion">
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingOne">
                        <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                            Bagaimana cara melamar pekerjaan di platform ini?
                        </button>
                    </h2>
                    <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Anda hanya perlu membuat akun, memilih lowongan yang sesuai, dan mengklik "Lamar Sekarang" untuk mengirimkan aplikasi Anda.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingTwo">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                            Apakah saya bisa melamar pekerjaan lebih dari satu perusahaan?
                        </button>
                    </h2>
                    <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Tentu saja! Anda dapat melamar sebanyak yang Anda inginkan selama memenuhi persyaratan pekerjaan.
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header" id="headingThree">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                            Bagaimana cara mengetahui status lamaran saya?
                        </button>
                    </h2>
                    <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faqAccordion">
                        <div class="accordion-body">
                            Anda akan mendapatkan pemberitahuan melalui email atau melalui akun platform tentang status lamaran Anda.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
