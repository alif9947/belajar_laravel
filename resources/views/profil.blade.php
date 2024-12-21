@extends('layouts.app')

@section('title')
    Profil Pembelajaran Programmer & Forum Diskusi
@endsection

@section('content')

<div class="container">
    <!-- Profil Section -->
    <div class="row mb-5">
        <div class="col-md-12">
            <h2>Selamat Datang di Profil Pembelajaran Programmer</h2>
            <p>Platform ini menyediakan berbagai pembelajaran mengenai pengembangan perangkat lunak, serta wadah untuk berdiskusi tentang pemrograman.</p>
            <p>Apakah kamu seorang programmer pemula atau yang sudah berpengalaman? Di sini tempat yang tepat untuk memperluas pengetahuanmu dan berinteraksi dengan komunitas programmer lainnya.</p>
        </div>
    </div>

    <!-- Forum Diskusi Section -->
    <div class="row">
        <div class="col-md-12">
            <h3>Forum Diskusi Programmer</h3>
            <p>Bergabunglah dalam forum diskusi kami dan saling berbagi pengetahuan tentang topik-topik pemrograman terbaru. Diskusi ini bisa mencakup segala hal terkait pengembangan perangkat lunak, termasuk tips, trik, dan solusi untuk tantangan yang dihadapi dalam dunia coding.</p>
            <p>Jika kamu memiliki pertanyaan atau topik yang ingin dibahas, jangan ragu untuk memulai diskusi atau memberikan kontribusi pada diskusi yang ada!</p>
            {{-- <a href="{{ route('forum') }}" class="btn btn-primary">Masuk ke Forum Diskusi</a> --}}
        </div>
    </div>
</div>

@endsection

@section('footer')
<footer id="footer" class="footer" style="background-color: rgba(0, 0, 0, 0.8); color: white; padding: 20px 0;">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center" style="color: white; text-decoration: none;">
                        <span class="sitename" style="font-size: 1.2rem;">GP</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p style="color: white; font-size: 0.9rem;">Ahmad Hasby Assidiqi</p>
                        <p style="color: white; font-size: 0.9rem;">Jalan Subokastowo GG1 No 11, Tambakbayan Ponorogo</p>
                        <p class="mt-2" style="color: white; font-size: 0.9rem;"><strong>Phone:</strong> <span>+62 821-3988-7848</span></p>
                        <p style="color: white; font-size: 0.9rem;"><strong>Email:</strong> <span>ahmadhasbyassidiqi@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="social-links d-flex mt-3">
                        <a href="https://twitter.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-twitter fs-4"></i></a>
                        <a href="https://facebook.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="https://instagram.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="https://linkedin.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-linkedin fs-4"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4 style="color: white; font-size: 1rem;">Kirim Pesan</h4>
                    <p style="color: white; font-size: 0.9rem;">Kirim pesan kepada kami dan kami akan segera meresponsnya!</p>
                    <form action="mailto:ahmadhasbyassidiqi@gmail.com" method="post" enctype="text/plain" class="php-email-form">
                        <div class="newsletter-form">
                            <textarea name="message" placeholder="Pesan" required class="form-control mb-3" rows="4"></textarea>
                            <input type="submit" value="Kirim Pesan" class="btn btn-success btn-sm">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container text-center">
            <p style="color: white; font-size: 0.9rem;">© <span>Copyright</span> <strong class="px-1 sitename" style="color: white;">GP</strong> <span>All Rights Reserved</span></p>
            <div class="credits" style="color: white; font-size: 0.8rem;">
                Designed by <a href="https://bootstrapmade.com/" style="color: white; text-decoration: none;">AHMAD HASBY ASSIDIQI </a> Distributed by <a href="https://themewagon.com" style="color: white; text-decoration: none;">AGIT</a>
            </div>
        </div>
    </div>
</footer>
@endsection
