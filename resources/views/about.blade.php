@extends('layouts.app')

@section('title')
    Tentang Kami
@endsection

@section('content')
<div class="container py-5" data-aos="fade-up" data-aos-delay="100">
    <div class="row align-items-center">
        <!-- Logo Section -->
        <div class="col-lg-6 text-center text-lg-start mb-4 mb-lg-0">
            <img src="{{ asset('asset/about.jpg') }}" alt="Tentang Kami" class="img-fluid" style="max-height: 300px; width: auto;">
        </div>

        <!-- Content Section -->
        <div class="col-lg-6 content">
            <h3 class="display-4 fw-bold text-dark">Tentang Platform Kami</h3>
            <p class="fst-italic text-muted">
                Kami adalah platform pembelajaran yang fokus untuk membantu Anda mengembangkan keterampilan dalam bidang pemrograman dan teknologi. Materi kami mencakup semuanya, mulai dari konsep dasar hingga teknik lanjutan dalam pengembangan perangkat lunak.
            </p>
            <ul class="list-unstyled">
                <li><i class="bi bi-check2-all text-success me-2"></i> Jelajahi topik-topik seperti pengembangan frontend, keamanan basis data, dan pemodelan data.</li>
                <li><i class="bi bi-check2-all text-success me-2"></i> Pelajari konsep-konsep penting seperti SQL, manajemen akses data, dan pembuatan aplikasi yang aman.</li>
                <li><i class="bi bi-check2-all text-success me-2"></i> Pendekatan terstruktur kami memudahkan Anda untuk menguasai pemrograman dan tetap mengikuti tren terbaru.</li>
            </ul>
            <p class="text-muted">
                Dengan tutorial yang mudah diikuti, Anda dapat mengembangkan keterampilan Anda dan membangun aplikasi yang aman dan efisien. Bergabunglah dengan kami dan mulai perjalanan pemrograman Anda hari ini!
            </p>
        </div>
    </div>
</div>
@endsection

@section('footer')
<footer id="footer" class="footer bg-dark text-white py-4">
    <div class="container">
        <div class="row">
            <!-- Footer Column 1: About -->
            <div class="col-lg-4 col-md-6 footer-about">
                <a href="index.html" class="logo d-flex align-items-center text-white text-decoration-none">
                    <span class="sitename fs-4">GP</span>
                </a>
                <div class="footer-contact pt-3">
                    <p class="footer-text">Ahmad Hasby Assidiqi</p>
                    <p class="footer-text">Jalan Subokastowo GG1 No 11, Tambakbayan Ponorogo</p>
                    <p class="footer-text"><strong>Telepon:</strong> <span>+62 821-3988-7848</span></p>
                    <p class="footer-text"><strong>Email:</strong> <span>ahmadhasbyassidiqi@gmail.com</span></p>
                </div>
            </div>

            <!-- Footer Column 2: Social Links -->
            <div class="col-lg-4 col-md-6 footer-social">
                <h5 class="footer-heading">Ikuti Kami</h5>
                <div class="social-links d-flex">
                    <a href="https://twitter.com" class="social-icon text-white me-2"><i class="bi bi-twitter fs-4"></i></a>
                    <a href="https://facebook.com" class="social-icon text-white me-2"><i class="bi bi-facebook fs-4"></i></a>
                    <a href="https://instagram.com" class="social-icon text-white me-2"><i class="bi bi-instagram fs-4"></i></a>
                    <a href="https://linkedin.com" class="social-icon text-white me-2"><i class="bi bi-linkedin fs-4"></i></a>
                </div>
            </div>

            <!-- Footer Column 3: Newsletter -->
            <div class="col-lg-4 col-md-12 footer-newsletter">
                <h5 class="footer-heading">Kirim Pesan</h5>
                <p class="footer-text">Kirim pesan kepada kami dan kami akan segera meresponsnya!</p>
                <form action="mailto:ahmadhasbyassidiqi@gmail.com" method="post" enctype="text/plain" class="php-email-form">
                    <div class="newsletter-form">
                        <textarea name="message" placeholder="Pesan" required class="form-control mb-3" rows="4"></textarea>
                        <input type="submit" value="Kirim Pesan" class="btn btn-success btn-sm">
                    </div>
                </form>
            </div>
        </div>
    </div>

    <div class="copyright text-center py-3">
        <p class="footer-text mb-0">© <span>Hak Cipta</span> <strong class="px-1 sitename">GP</strong> <span>Semua Hak Dilindungi</span></p>
        <div class="credits footer-text">
            Desain oleh <a href="https://bootstrapmade.com/" class="text-white">AHMAD HASBY ASSIDIQI</a> Distribusi oleh <a href="https://themewagon.com" class="text-white">AGIT</a>
        </div>
    </div>
</footer>
@endsection
