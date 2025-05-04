@extends('layouts.app')

@section('content')
   <!-- Hero Section with Parallax Effect and Transparent Overlay -->
   <section class="hero-section" style="background-image: url('{{ asset('images/kerja6.png') }}'); background-size: cover; background-position: center; height: 80vh; color: white;">
        <!-- Transparent Overlay -->
        <div class="hero-overlay" style="background: rgba(0, 0, 0, 0.5); height: 100%;">
            <div class="container text-center py-5">
                <h1 class="display-4 text-shadow">Temukan Karir Impian Anda!</h1>
                <p class="lead">Bergabunglah dengan perusahaan-perusahaan terkemuka dan raih karir yang Anda impikan. Lihat berbagai lowongan pekerjaan terbaik di sini!</p>
                <a href="#lowongan" class="btn btn-light btn-lg shadow-sm">Lihat Lowongan Kerja</a>
            </div>
        </div>
    </section>

    <!-- Peluang Karir -->
    <section id="peluang-karir" class="py-5" style="background-color: #f4f4f4;">
        <div class="container">
            <h2 class="text-center text-primary">Peluang Karir di Berbagai Bidang</h2>
            <p class="text-center mb-5">Kami menyediakan peluang karir yang luas di berbagai bidang, baik di sektor teknologi, pemasaran, keuangan, dan lainnya. Pilih bidang yang sesuai dengan minat dan keahlian Anda, dan raih kesuksesan bersama kami.</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Sektor Teknologi</h5>
                            <p class="card-text">Bergabunglah dengan dunia digital yang dinamis dan inovatif. Temukan berbagai posisi di pengembangan perangkat lunak, analisis data, dan lainnya.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Sektor Pemasaran</h5>
                            <p class="card-text">Buka peluang untuk berkarir di bidang pemasaran, brand management, dan digital marketing dengan perusahaan-perusahaan global.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Sektor Keuangan</h5>
                            <p class="card-text">Posisi-posisi yang berfokus pada manajemen keuangan, akuntansi, dan analisis keuangan untuk membangun karir yang kuat di dunia keuangan.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Kisah Sukses Karir -->
    <section id="kisah-sukses" class="py-5">
        <div class="container">
            <h2 class="text-center text-primary">Kisah Sukses Karir</h2>
            <p class="text-center mb-5">Temui beberapa individu yang telah sukses mengembangkan karir mereka melalui kesempatan yang diberikan oleh perusahaan-perusahaan terkemuka. Mereka adalah contoh nyata bahwa kesuksesan dapat diraih dengan kerja keras dan ketekunan.</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">John Doe - Software Engineer</h5>
                            <p class="card-text">"Bergabung dengan perusahaan besar sebagai Software Engineer membuka banyak peluang bagi saya. Saya dapat berkembang baik secara profesional maupun pribadi."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Jane Smith - Marketing Manager</h5>
                            <p class="card-text">"Dengan pengalaman kerja yang saya dapatkan di sektor pemasaran, saya berhasil membangun karir yang memuaskan dan berkontribusi dalam strategi global perusahaan."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">Michael Johnson - Finance Analyst</h5>
                            <p class="card-text">"Berkat kesempatan yang saya peroleh di sektor keuangan, saya berhasil mengembangkan keahlian saya dalam analisis pasar global dan mencapai posisi tinggi di perusahaan."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Perusahaan -->
    <section id="testimoni" class="py-5" style="background-color: #f4f8fb;">
        <div class="container">
            <h2 class="text-center text-primary">Testimoni Perusahaan</h2>
            <p class="text-center mb-5">Berikut adalah beberapa testimoni dari perusahaan yang bekerja sama dengan kami. Mereka berbagi pandangan tentang pengalaman dalam merekrut karyawan berkualitas dari platform kami.</p>
            <div class="row">
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">PT. Teknologi Global</h5>
                            <p class="card-text">"Platform ini telah membantu kami menemukan talenta terbaik untuk posisi pengembangan perangkat lunak. Kami sangat puas dengan proses seleksi yang efisien."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">PT. Retail Indonesia</h5>
                            <p class="card-text">"Kami telah merekrut banyak tenaga profesional melalui platform ini. Sistemnya mudah digunakan dan memberi kami kandidat berkualitas yang sesuai dengan kebutuhan perusahaan."</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4">
                    <div class="card shadow-sm h-100">
                        <div class="card-body">
                            <h5 class="card-title">PT. Finansial Maju</h5>
                            <p class="card-text">"Dengan platform ini, kami dapat menjangkau lebih banyak profesional yang memiliki keterampilan sesuai dengan yang kami cari. Proses seleksi menjadi lebih cepat dan transparan."</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection
