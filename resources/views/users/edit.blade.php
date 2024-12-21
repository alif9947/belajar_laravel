@extends('layouts.app')

@section('title', 'Edit Pengguna')

@section('content')
<div class="container mt-5">
    <h2>Edit Pengguna</h2>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif
    @if(session('error'))
        <div class="alert alert-danger">{{ session('error') }}</div>
    @endif

    <form method="POST" action="{{ route('updateUser', $user->id) }}">
        @csrf
        <div class="mb-3">
            <label for="name" class="form-label">Nama</label>
            <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}" required>
        </div>
        <div class="mb-3">
            <label for="email" class="form-label">Email</label>
            <input type="email" class="form-control" name="email" value="{{ old('email', $user->email) }}" required>
        </div>
        <div class="mb-3">
            <label for="password" class="form-label">Password (Kosongkan jika tidak ingin mengganti)</label>
            <input type="password" class="form-control" name="password">
        </div>
        <button type="submit" class="btn btn-primary">Simpan</button>
    </form>
</div>
@endsection
@section('footer')
<footer id="footer" class="footer" style="background-color: rgba(0, 0, 0, 0.8); color: white; padding: 20px 0;"> <!-- Mengurangi padding -->
    <div class="footer-top">
        <div class="container">
            <div class="row gy-3"> <!-- Mengurangi jarak antar elemen -->
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center" style="color: white; text-decoration: none;">
                        <span class="sitename" style="font-size: 1.2rem;">GP</span> <!-- Mengurangi ukuran font -->
                    </a>
                    <div class="footer-contact pt-3">
                        <p style="color: white; font-size: 0.9rem;">Ahmad Hasby Assidiqi</p> <!-- Mengurangi ukuran font -->
                        <p style="color: white; font-size: 0.9rem;">Jalan Subokastowo GG1 No 11, Tambakbayan Ponorogo</p> <!-- Mengurangi ukuran font -->
                        <p class="mt-2" style="color: white; font-size: 0.9rem;"><strong>Phone:</strong> <span>+62 821-3988-7848</span></p> <!-- Mengurangi ukuran font -->
                        <p style="color: white; font-size: 0.9rem;"><strong>Email:</strong> <span>ahmadhasbyassidiqi@gmail.com</span></p> <!-- Mengurangi ukuran font -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="social-links d-flex mt-3"> <!-- Mengurangi jarak antar ikon sosial -->
                        <a href="https://twitter.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-twitter fs-4"></i></a> <!-- Mengurangi ukuran ikon -->
                        <a href="https://facebook.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-facebook fs-4"></i></a> <!-- Mengurangi ukuran ikon -->
                        <a href="https://instagram.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-instagram fs-4"></i></a> <!-- Mengurangi ukuran ikon -->
                        <a href="https://linkedin.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-linkedin fs-4"></i></a> <!-- Mengurangi ukuran ikon -->
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4 style="color: white; font-size: 1rem;">Kirim Pesan</h4> <!-- Mengurangi ukuran font -->
                    <p style="color: white; font-size: 0.9rem;">Kirim pesan kepada kami dan kami akan segera meresponsnya!</p> <!-- Mengurangi ukuran font -->
                    <form action="mailto:ahmadhasbyassidiqi@gmail.com" method="post" enctype="text/plain" class="php-email-form">
                        <div class="newsletter-form">
                            <textarea name="message" placeholder="Pesan" required class="form-control mb-3" rows="4"></textarea> <!-- Mengurangi tinggi textarea -->
                            <input type="submit" value="Kirim Pesan" class="btn btn-success btn-sm"> <!-- Mengurangi ukuran tombol -->
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container text-center">
            <p style="color: white; font-size: 0.9rem;">© <span>Copyright</span> <strong class="px-1 sitename" style="color: white;">GP</strong> <span>All Rights Reserved</span></p> <!-- Mengurangi ukuran font -->
            <div class="credits" style="color: white; font-size: 0.8rem;">
                Designed by <a href="https://bootstrapmade.com/" style="color: white; text-decoration: none;">AHMAD HASBY ASSIDIQI </a> Distributed by <a href="https://themewagon.com" style="color: white; text-decoration: none;">AGIT</a>
            </div>
        </div>
    </div>
</footer>
@endsection

