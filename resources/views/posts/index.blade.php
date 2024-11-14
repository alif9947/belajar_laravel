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
