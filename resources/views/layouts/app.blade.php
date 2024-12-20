<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="icon" href="{{ asset('asset/logo.png') }}" type="image/png">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.min.css') }}">
    <style>
        body, html {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

.navbar {
    margin: 0;
    padding: 0;
}

    </style>

</head>
<body>
    @include('components.menu') <!-- Navbar -->

    @yield('content') <!-- Content -->

    @include('components.footer') <!-- Footer -->

    <!-- Popper.js dan Bootstrap Bundle -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="{{ asset('bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    @stack('scripts')
</body>
</html>
