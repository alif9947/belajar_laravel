@extends('layouts.app')


@section('content')
<div class="container" style="padding-top: 100px;">
    <h1>Edit Postingan</h1>
    <form action="{{ route('posts.update', $post) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="category_id" class="form-label">Kategori</label>
            <select class="form-select" name="category_id" id="category_id">
                @foreach ($categories as $category)
                    <option value="{{ $category->id }}" {{ $category->id == $post->category_id ? 'selected' : '' }}>{{ $category->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Judul</label>
            <input type="text" class="form-control" id="title" name="title" value="{{ $post->title }}">
        </div>
        <div class="mb-3">
            <label for="body" class="form-label">Isi</label>
            <textarea class="form-control" id="body" name="body" rows="3">{{ $post->body }}</textarea>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Gambar</label>
            <input type="file" class="form-control" id="image" name="image">
            @if ($post->image)
                <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}" class="img-thumbnail mt-2" width="200">
            @endif
        </div>
        <button type="submit" class="btn btn-primary">Update</button>
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
