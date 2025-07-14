<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Quiny</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
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

    <!-- Navbar Start -->
    <div class="container-fluid sticky-top" style="background-color: #fee6a4;">
        <div class="container">
            <nav class="navbar navbar-expand-lg navbar-light p-0">
                <a href="/" class="navbar-brand">
                    <h2 class="quiny">Quiny</h2>
                </a>
                <button type="button" class="navbar-toggler ms-auto me-0" data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarCollapse">
                    <div class="navbar-nav ms-auto">
                        <a href="#what-is" class="nav-item nav-link active">What is?</a>
                        <a href="about.html" class="nav-item nav-link">Technical specifications</a>
                        <a href="#certificates" class="nav-item nav-link">Certificates</a>
                        <a href="#contact" class="nav-item nav-link">Contact</a>
                    </div>
                    {{-- <a href="" class="btn btn-dark py-2 px-4 d-none d-lg-inline-block">Shop Now</a> --}}
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->

    <!-- Hero Start -->
    <div id="home" class="container-fluid hero-header mb-5"> {{--bg-primary--}}
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h3 class="fw-light text-black animated slideInRight">Favorite quinoa drink ...</h3>
                    <h3 class="fw-light text-black animated slideInRight">delicius, wholesome, for all ages.</h3>
                    <h1 class="display-4 animated slideInRight quiny">Quinoa <span class="fw-light text-dark quiny">Love in</span> every drop.</h1>
                    {{-- <p class="text-white mb-4 animated slideInRight">Lorem ipsum dolor sit amet, consectetur adipiscing
                        elit. Etiam feugiat rutrum lectus, sed auctor ex malesuada id. Orci varius natoque penatibus et
                        magnis dis parturient montes.</p> --}}
                    <a href="" class="btn btn-outline-dark py-2 px-4 animated slideInRight">More...</a>
                </div>
                <div class="col-lg-6">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/quiny1.png') }}" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Hero End -->

    <!-- About Start -->
    <div id="what-is" class="container-fluid py-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-sm-12 col-lg-6 wow fadeIn text-center" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/quiny2.png') }}">
                </div>
                <div class="col-sm-12 col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <h1 class="quiny mb-4">What is Quiny?</h1>
                    <p class="mb-4">It's a delightfully refreshing quinoa blend that's as tasty as it is nourisshing.</p>
                    <p class="mb-4">- suportss healthy growth in children.</p>
                    <p class="mb-4">- Provides natural energy for atlets.</p>
                    <p class="mb-4">- Nourshes expectant mothers.</p>
                    <p class="mb-4">- Gentle and digestible for older adults.</p>
                    <a class="btn btn-outline-warning py-2 px-4 animated slideInRight text-dark" href="">Shop Now</a>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Feature Start -->
    <div id="certificates" class="container-fluid py-5">
        <div class="container">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 600px;">
                <h1 class="text-primary mb-3"><span class="fw-light text-dark quiny">Certificates Of Our QUINY</span></h1>
                <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis aliquet, erat non malesuada consequat, nibh erat tempus risus.</p>
            </div>
            <div class="row g-4 align-items-center">
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.3s">
                    <div class="row g-5">
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="quiny">Gluten Free</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="quiny">100% Vegan</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="quiny">Lactose free</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn text-center" data-wow-delay="0.1s">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/quiny2.png') }}">
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="row g-5">
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="quiny">No Sugar added</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="quiny">Vitamins</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                            </div>
                        </div>
                        <div class="col-12 d-flex">
                            <div class="btn-square rounded-circle border flex-shrink-0"
                                style="width: 80px; height: 80px;">
                                <i class="fa fa-check fa-2x text-primary"></i>
                            </div>
                            <div class="ps-3">
                                <h5 class="quiny">Proteins</h5>
                                <hr class="w-25 bg-primary my-2">
                                <span>Lorem ipsum dolor sit amet adipiscing elit aliquet.</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Feature End -->


    <!-- Contact Start -->
    <div class="container-fluid py-5">
        <div class="container" id="contact">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="text-secondary mb-5"><span class="fw-light quiny">If You Have Any Query, Please Contact Us</span></h1>
            </div>
            <div class="row g-5">
                <div class="col-lg-8 wow fadeIn" data-wow-delay="0.1s">
                    <p class="mb-4">Send us your consultations in the following form.</p>
                    <div class="wow fadeIn" data-wow-delay="0.3s">
                        <form>
                            <div class="row g-3">
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="name" placeholder="Your Name">
                                        <label for="name">Your Name</label>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-floating">
                                        <input type="email" class="form-control" id="email" placeholder="Your Email">
                                        <label for="email">Your Email</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <input type="text" class="form-control" id="subject" placeholder="Subject">
                                        <label for="subject">Subject</label>
                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="form-floating">
                                        <textarea class="form-control" placeholder="Leave a message here" id="message" style="height: 150px"></textarea>
                                        <label for="message">Message</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <button class="btn btn-warning w-100 py-3 text-dark" type="submit">Send Message</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="col-lg-4 wow fadeIn" data-wow-delay="0.5s">
                    <div class="col-md-12 col-lg-12 wow fadeIn" data-wow-delay="0.3s">
                        <h5 class="mb-4">Get In Touch</h5>
                        <p><i class="fa fa-map-marker-alt me-3"></i>123 Street, La Paz city, Bolivia</p>
                        <p><i class="fa fa-phone-alt me-3"></i>+592 2245781</p>
                        <p><i class="fa fa-envelope me-3"></i>info@email.com</p>
                        <div class="d-flex pt-2">
                            <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-twitter"></i></a>
                            <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-facebook-f"></i></a>
                            <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-instagram"></i></a>
                            <a class="btn btn-square btn-outline-primary me-1" href=""><i
                                    class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Contact End -->

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
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('sitio/lib/wow/wow.min.js') }}"></script>
    <script src="{{ asset('sitio/lib/easing/easing.min.js') }}"></script>
    <script src="{{ asset('sitio/lib/waypoints/waypoints.min.js') }}"></script>
    <script src="{{ asset('sitio/lib/owlcarousel/owl.carousel.min.js') }}"></script>

    <!-- Template Javascript -->
    <script src="{{ asset('sitio/js/main.js') }}"></script>
</body>

</html>