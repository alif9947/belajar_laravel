<!-- resources/views/about.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>About</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    
    @include('components.menu')
    
    <div class="container">
        <h1>About Us</h1>
        <p>Ini adalah konten halaman about.</p>
    </div>
</body>
</html>
