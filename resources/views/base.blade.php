<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>@yield('nombrePagina', 'Quiny')</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="quiny quinoa drink" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    {{-- <link href="{{ asset('sitio/img/favicon.ico') }}" rel="icon"> --}}

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;500&family=Poppins:wght@200;600;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('sitio/lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('sitio/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('sitio/css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('sitio/css/style.css') }}" rel="stylesheet">
    <style>
        
        /*.product{
            position: relative;
            margin-top: -85px;
            padding-top: 12rem;
            padding-bottom: 6rem;
            background: url({{ asset('sitio/img/fondo-quiny-product.jpg') }}) center center no-repeat;
            background-size: cover;
        }*/
    </style>
    @yield('hojaEstilos')
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-grow text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    <!-- Menu Start -->
    <div class="container-fluid sticky-top" style="background-color: #fee6a4;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="#home" class="navbar-brand">
                    <img src="{{ asset('sitio/img/logo-quiny.png') }}" width="120" alt="logo-quiny">
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a class="nav-item nav-link" href="#what-is"><b>What is ?</b></a>
                        <a class="nav-item nav-link" href="#products"><b>Products</b></a>
                        <a class="nav-item nav-link" href="#certifications"><b>Certifications</b></a>
                        <a class="nav-item nav-link" href="#about-us"><b>About Us</b></a>
                        <a class="nav-item nav-link" href="#contact-us"><b>Contact Us</b></a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Menu End -->

    @yield('contenido')

    <!-- Footer Start -->
    <div class="container-fluid bg-white footer">
        <div class="container wow fadeIn" data-wow-delay="0.1s">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="/">Quiny</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <div class="footer-menu">
                            <a href="#home">Home</a>
                            <a href="#what-is">What is</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Footer End -->

    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>

    <!-- JavaScript Libraries -->
    <script src="{{ asset('sitio/js/jquery.min.js') }}"></script>
    <script src="{{ asset('sitio/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('sitio/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('sitio/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('sitio/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('sitio/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('sitio/js/main.js') }}"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const sections = document.querySelectorAll('section');
            const navLinks = document.querySelectorAll('.nav-link');

            window.addEventListener('scroll', () => {
                let current = '';

                sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.clientHeight;

                if (pageYOffset >= (sectionTop - sectionHeight / 3)) {
                    current = section.getAttribute('id');
                }
                });

                navLinks.forEach(link => {
                link.classList.remove('active');
                if (link.href.includes(current)) {
                    link.classList.add('active');
                }
                });
            });
        });
    </script>

    @yield('javascripts')
</body>

</html>