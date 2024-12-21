@extends('layouts.app')

@section('content')
<div class="container" style="padding-top: 100px;">
    <h1>Daftar Postingan</h1>

    <!-- Tambahkan Form Search -->
    <form action="{{ route('posts') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Cari judul atau kategori..." value="{{ request('search') }}">
            <button class="btn btn-primary" type="submit">Cari</button>
        </div>
    </form>

    <a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Tambah Postingan</a>

    <table class="table">
        <thead>
            <tr>
                <th>No</th>
                <th>Judul</th>
                <th>Kategori</th>
                <th>Gambar</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse ($posts as $post)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $post->title }}</td>
                    <td>{{ $post->category ? $post->category->name : '-' }}</td>
                    <td>
                        @if ($post->image)
                            <img src="{{ asset('images/posts/' . $post->image) }}" alt="{{ $post->title }}" class="img-thumbnail" width="100">
                        @else
                            -
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-info">Detail</a>
                        <a href="{{ route('posts.edit', $post) }}" class="btn btn-sm btn-warning">Edit</a>
                        <form action="{{ route('posts.destroy', $post) }}" method="POST" style="display: inline-block;">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Apakah Anda yakin ingin menghapus postingan ini?')">Hapus</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5">Tidak ada postingan yang ditemukan.</td>
                </tr>
            @endforelse
        </tbody>
    </table>

    <!-- Tampilkan Pagination -->
    {{ $posts->links() }}
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
