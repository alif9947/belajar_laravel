@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <!-- Hero Section -->
    <section id="hero" class="hero section" style="background-image: url('{{ asset('asset/bg.jpg') }}'); background-size: cover; background-position: center; height: 100vh; padding-top: 80px;">
        <!-- Overlay for better text contrast -->
        <div class="overlay" style="position: absolute; top: 54px; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5);"></div>

        <!-- Content inside the hero section -->
        <div class="container position-relative text-center text-white py-5">
            <div class="row justify-content-center">
                <div class="col-xl-6 col-lg-8">
                    <h2 class="display-4">Powerful Software Solutions with AH<span>.</span></h2>
                    <p class="lead">We are a team of skilled software engineers dedicated to building innovative solutions</p>
                </div>
            </div>
        </div>


            <!-- Icon Boxes Section with Transparent Background -->
            <div class="row gy-4 mt-5 justify-content-center">
                <!-- HTML -->
                <div class="col-xl-2 col-md-4 text-center" data-aos="fade-up" data-aos-delay="300">
                    <div class="icon-box p-4 rounded shadow-sm" style="backdrop-filter: blur(8px); background-color: rgba(255, 255, 255, 0.3); height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/html5/html5-original.svg" alt="HTML Logo" style="width: 50px; height: 50px; object-fit: contain;"/>
                        <h3 class="mt-3"><a href="" class="text-decoration-none">HTML</a></h3>
                    </div>
                </div>

                <!-- CSS -->
                <div class="col-xl-2 col-md-4 text-center" data-aos="fade-up" data-aos-delay="400">
                    <div class="icon-box p-4 rounded shadow-sm" style="backdrop-filter: blur(8px); background-color: rgba(255, 255, 255, 0.3); height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/6/62/CSS3_logo.svg" alt="CSS Logo" style="width: 50px; height: 50px; object-fit: contain;">
                        <h3 class="mt-3"><a href="" class="text-decoration-none">CSS</a></h3>
                    </div>
                </div>

                <!-- PHP -->
                <div class="col-xl-2 col-md-4 text-center" data-aos="fade-up" data-aos-delay="500">
                    <div class="icon-box p-4 rounded shadow-sm" style="backdrop-filter: blur(8px); background-color: rgba(255, 255, 255, 0.3); height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/2/27/PHP-logo.svg" alt="PHP Logo" style="width: 50px; height: 50px; object-fit: contain;">
                        <h3 class="mt-3"><a href="" class="text-decoration-none">PHP</a></h3>
                    </div>
                </div>

                <!-- JavaScript -->
                <div class="col-xl-2 col-md-4 text-center" data-aos="fade-up" data-aos-delay="600">
                    <div class="icon-box p-4 rounded shadow-sm" style="backdrop-filter: blur(8px); background-color: rgba(255, 255, 255, 0.3); height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">

                        <img src="https://cdn.jsdelivr.net/gh/devicons/devicon@latest/icons/javascript/javascript-original.svg" alt="JavaScript Logo" style="width: 50px; height: 50px; object-fit: contain;" />
                        <h3 class="mt-3"><a href="" class="text-decoration-none">JavaScript</a></h3>
                    </div>
                </div>

                <!-- Python -->
                <div class="col-xl-2 col-md-4 text-center" data-aos="fade-up" data-aos-delay="700">
                    <div class="icon-box p-4 rounded shadow-sm" style="backdrop-filter: blur(8px); background-color: rgba(255, 255, 255, 0.3); height: 200px; display: flex; flex-direction: column; justify-content: center; align-items: center; text-align: center;">
                        <img src="https://upload.wikimedia.org/wikipedia/commons/c/c3/Python-logo-notext.svg" alt="Python Logo" style="width: 50px; height: 50px; object-fit: contain;">
                        <h3 class="mt-3"><a href="" class="text-decoration-none">Python</a></h3>
                    </div>
                </div>
            </div>





        </div>
    </section>

    <!-- Content Section -->
    <div class="container mt-5" style="padding-top: 20px; "
   >
        <div class="row">
            <div class="col-md-12">
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>
        </div>

        <!-- Content for both logged-in and guest users -->
        <div class="container d-flex flex-column align-items-center justify-content-center" style="min-height: 70vh;">
            <div class="row g-4">
                @foreach ($posts as $post)
                <div class="col-md-6">
                    <div
                        class="card h-100 border-0 overflow-hidden"
                        style="width: 100%; box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1); transition: transform 0.3s ease, box-shadow 0.3s ease; backdrop-filter: blur(8px); background-color: rgba(255, 255, 255, 0.3);"
                        onmouseover="this.style.transform='scale(1.05)'; this.style.boxShadow='0 8px 16px rgba(0, 0, 0, 0.2)';"
                        onmouseout="this.style.transform='scale(1)'; this.style.boxShadow='0 4px 8px rgba(0, 0, 0, 0.1)';"
                    >
                        @if ($post->image)
                            <div class="image-container position-relative">
                                <img
                                    src="{{ asset('images/posts/' . $post->image) }}"
                                    class="card-img-top"
                                    alt="{{ $post->title }}"
                                    style="width: 100%; height: 200px; object-fit: cover;">
                                <div class="overlay"></div>
                                <div class="badge-category position-absolute top-0 end-0 m-2 bg-primary text-white px-3 py-1 rounded">
                                    {{ $post->category->name ?? 'Umum' }}
                                </div>
                            </div>
                        @else
                            <div class="image-container position-relative">
                                <img
                                    src="https://via.placeholder.com/350x200"
                                    class="card-img-top"
                                    alt="Placeholder Image"
                                    style="width: 100%; height: 200px; object-fit: cover;">
                                <div class="overlay"></div>
                                <div class="badge-category position-absolute top-0 end-0 m-2 bg-primary text-white px-3 py-1 rounded">
                                    Umum
                                </div>


                            </div>
                        @endif
                        <div class="card-body p-3">
                            <h5 class="card-title text-truncate mb-2" title="{{ $post->title }}">{{ $post->title }}</h5>
                            <p class="card-text mb-3 small text-light">{{ Str::limit($post->body, 120) }}</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <span class="small text-light">{{ $post->created_at->format('d M Y') }}</span>

                                <a href="{{ route('posts.show', $post) }}" class="btn btn-sm btn-primary px-3">Baca Selengkapnya</a>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>

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
                            <input type="submit" value="Kirim Pesan" class="btn btn-danger m-2"> <!-- Mengurangi ukuran tombol -->
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
