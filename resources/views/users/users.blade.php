@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="container mt-5 mb-5"> <!-- Menambahkan margin bawah pada container -->
    <!-- Tombol tambah user -->
    <a href="{{ route('signup') }}" class="btn btn-primary">Tambah User</a>

    <h2>Daftar Pengguna</h2>

    <!-- Form pencarian -->
    <form action="{{ route('searchUsers') }}" method="GET" class="mb-3">
        <div class="input-group">
            <input type="text" class="form-control" name="search" placeholder="Cari pengguna berdasarkan nama atau email" value="{{ request()->search }}">
            <button class="btn btn-outline-secondary" type="submit">Cari</button>
        </div>
    </form>

    @if(session('success'))
        <div class="alert alert-success">{{ session('success') }}</div>
    @endif

    <table class="table table-striped">
        <thead>
            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>Email</th>
                <th>Tanggal Dibuat</th>
                <th>Aksi</th>
            </tr>
        </thead>
        <tbody>
            @forelse($users as $user)
                <tr>
                    <td>{{ $loop->iteration }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->created_at->format('d-m-Y H:i') }}</td>
                    <td>
                        <!-- Tombol View -->
                        <button class="btn btn-info btn-sm view-user" data-id="{{ $user->id }}">View</button>

                        <!-- Tombol Edit -->
                        <a href="{{ route('editUser', $user->id) }}" class="btn btn-warning btn-sm">Edit</a>

                        <!-- Tombol Delete -->
                        <form action="{{ route('deleteUser', $user->id) }}" method="POST" style="display:inline-block;" onsubmit="return confirm('Apakah Anda yakin ingin menghapus pengguna ini?')">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
            @empty
                <tr>
                    <td colspan="5" class="text-center">Tidak ada data pengguna</td>
                </tr>
            @endforelse
        </tbody>
    </table>
</div>

<!-- Modal View -->
<div class="modal fade" id="userModal" tabindex="-1" aria-labelledby="userModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="userModalLabel">Detail Pengguna</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <p><strong>Nama:</strong> <span id="userName"></span></p>
                <p><strong>Email:</strong> <span id="userEmail"></span></p>
                <p><strong>Tanggal Dibuat:</strong> <span id="userCreatedAt"></span></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
            </div>
        </div>
    </div>
</div>

@endsection

@push('scripts')
<script>
document.addEventListener('DOMContentLoaded', function () {
    const userModal = new bootstrap.Modal(document.getElementById('userModal'));

    document.querySelectorAll('.view-user').forEach(button => {
        button.addEventListener('click', async function () {
            const userId = this.getAttribute('data-id');

            try {
                const response = await fetch(`/user/${userId}`);
                if (!response.ok) throw new Error('User not found');

                const user = await response.json();

                // Set data ke modal
                document.getElementById('userName').textContent = user.name;
                document.getElementById('userEmail').textContent = user.email;
                document.getElementById('userCreatedAt').textContent = new Date(user.created_at).toLocaleString();

                // Tampilkan modal
                userModal.show();
            } catch (error) {
                console.error('Error:', error);
                alert('Gagal mengambil data pengguna');
            }
        });
    });
});
</script>
@endpush

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
