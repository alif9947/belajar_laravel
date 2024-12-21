@extends('layouts.app')

@section('title')
    Contact
@endsection

@section('content')

<div class="container py-5">
    <div class="row">
        <div class="col-md-12">
            <h3 class="text-center mb-4">Contact Us</h3>
            <p class="text-center mb-4">Please feel free to reach out to us if you have any questions or feedback!</p>

            <!-- Contact Form -->
            <form action="mailto:ahmadhasbyassidiqi@gmail.com" method="post" enctype="text/plain" class="php-email-form">
                <div class="row">
                    <div class="col-md-6 mb-3">
                        <label for="name" class="form-label">Your Name</label>
                        <input type="text" id="name" name="name" class="form-control" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="email" class="form-label">Your Email</label>
                        <input type="email" id="email" name="email" class="form-control" required>
                    </div>
                </div>
                <div class="mb-3">
                    <label for="message" class="form-label">Your Message</label>
                    <textarea name="message" id="message" rows="5" class="form-control" required></textarea>
                </div>
                <button type="submit" class="btn btn-success">Send Message</button>
            </form>
        </div>
    </div>
</div>

@endsection

@section('footer')
<footer id="footer" class="footer" style="background-color: rgba(0, 0, 0, 0.8); color: white; padding: 20px 0;">
    <div class="footer-top">
        <div class="container">
            <div class="row gy-3">
                <div class="col-lg-4 col-md-6 footer-about">
                    <a href="index.html" class="logo d-flex align-items-center" style="color: white; text-decoration: none;">
                        <span class="sitename" style="font-size: 1.2rem;">GP</span>
                    </a>
                    <div class="footer-contact pt-3">
                        <p style="color: white; font-size: 0.9rem;">Ahmad Hasby Assidiqi</p>
                        <p style="color: white; font-size: 0.9rem;">Jalan Subokastowo GG1 No 11, Tambakbayan Ponorogo</p>
                        <p class="mt-2" style="color: white; font-size: 0.9rem;"><strong>Phone:</strong> <span>+62 821-3988-7848</span></p>
                        <p style="color: white; font-size: 0.9rem;"><strong>Email:</strong> <span>ahmadhasbyassidiqi@gmail.com</span></p>
                    </div>
                </div>

                <div class="col-lg-4 col-md-6 footer-about">
                    <div class="social-links d-flex mt-3">
                        <a href="https://twitter.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-twitter fs-4"></i></a>
                        <a href="https://facebook.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-facebook fs-4"></i></a>
                        <a href="https://instagram.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-instagram fs-4"></i></a>
                        <a href="https://linkedin.com" class="ms-2 me-2" style="color: white; text-decoration: none;"><i class="bi bi-linkedin fs-4"></i></a>
                    </div>
                </div>

                <div class="col-lg-4 col-md-12 footer-newsletter">
                    <h4 style="color: white; font-size: 1rem;">Kirim Pesan</h4>
                    <p style="color: white; font-size: 0.9rem;">Kirim pesan kepada kami dan kami akan segera meresponsnya!</p>
                    <form action="mailto:ahmadhasbyassidiqi@gmail.com" method="post" enctype="text/plain" class="php-email-form">
                        <div class="newsletter-form">
                            <textarea name="message" placeholder="Pesan" required class="form-control mb-3" rows="4"></textarea>
                            <input type="submit" value="Kirim Pesan" class="btn btn-success btn-sm">
                        </div>
                    </form>
                </div>

            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container text-center">
            <p style="color: white; font-size: 0.9rem;">© <span>Copyright</span> <strong class="px-1 sitename" style="color: white;">GP</strong> <span>All Rights Reserved</span></p>
            <div class="credits" style="color: white; font-size: 0.8rem;">
                Designed by <a href="https://bootstrapmade.com/" style="color: white; text-decoration: none;">AHMAD HASBY ASSIDIQI </a> Distributed by <a href="https://themewagon.com" style="color: white; text-decoration: none;">AGIT</a>
            </div>
        </div>
    </div>
</footer>
@endsection
