
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <img src="{{ asset('asset/logo.png') }}" alt="">
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>@if(!auth()->check())
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <div class="navbar-nav">
                <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                <a class="nav-link" href="{{ route('about') }}">About</a>
                <a class="nav-link" href="{{ route('contact') }}">Contact</a>
                <a class="nav-link" href="{{ route('profil') }}">Profil</a>
            </div>
            <div class="d-flex ms-auto">

                    <a href="{{ route('signup') }}" class="btn btn-danger m-2">signup</a>
                    <a href="{{ route('signin') }}" class="btn btn-primary m-2">signin</a>
                @else
                <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link active" aria-current="page" href="{{ route('home') }}">Home</a>
                        <a class="nav-link active" aria-current="page" href="{{ route('users') }}">user</a>
                        <a class="nav-link active" aria-current="page" href="{{ route('categories') }}">category</a>
                        <a class="nav-link active" aria-current="page" href="{{ route('posts') }}">Post</a>
                    </div>
                </div>
                <a href="{{ route('logout') }}" class="btn btn-danger m-2">logout</a>
            </div>
        </div>
        @endif
        </div>
    </div>
</nav>
