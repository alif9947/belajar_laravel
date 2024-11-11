@extends('layouts.app')

@section('title', 'Users')

@section('content')
<div class="container mt-5">

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
