<!-- resources/views/home.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Home</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>

    @include('components.menu')

    <div class="container">
        <h1>Selamat Datang di Halaman Beranda</h1>
        <p>Ini adalah konten halaman beranda.</p>
    </div>
</body>
</html>
