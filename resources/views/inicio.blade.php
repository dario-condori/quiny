@extends('base')

@section('nombrePagina')
    Quiny
@endsection

@section('contenido')
    {{-- home --}}
    <section id="home">
        <div class="container-fluid mb-5">
            <div class="container home">
                <div class="row g-5 align-items-center">
                    <div class="col-md-5 text-center text-lg-start">
                        <h1 class="display-4 animated slideInRight text-center quiny">Quiny</h1>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            QUINY is a natural plant-based drink that not only delivers a delicious taste
                            but also provides a rich source of essential nutrients, high-quality protein, minerals and essential amino acids.
                        </label>
                    </div>
                    <div class="col-md-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/foto-home.png') }}"  width="400">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- what is --}}
    <section id="what-is">
        <div class="container-fluid mb-5">
            <div class="container what">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 text-center text-lg-start">
                        <br><br><br><br>
                        <h4 class="animated slideInRight" style="color: #f94f00;">What is Quiny?</h4>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            <b>QUINY</b> is a natural plant-based drink, Crafted from high-quality quinoa, making it a complete protein and
                            an ideal choice for those seeking a nutritious and balanced diet.
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            <b>QUINY</b> is perfect for health-conscious consumers who prioritize nutrition from organic quinoa as a superfood, seek a
                            sugar-free and gluten-free alternative, and a high vegan protein content Free from allergens and artificial additives.
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            <b>QUINY</b> is more than just a drink. It’s a premium experience designed with innovation and sustainability.
                        </label>
                    </div>
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/foto-what-is.png') }}" width="400">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5">
            <div class="container what">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/foto-what-is-2.png') }}" width="400">
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <label class="text-black mb-4 animated slideInRight text-center">
                            It supports <b>children's</b> growth, provides natural energy for <b>athletes</b>, and offers vital nutrients for expectant <b>mothers</b>.
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            The elderly benefit from its easy digestion and nourishment.
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            Suitable For anyone seeking a balanced lifestyle,
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            <b>QUINY</b> is a delicious, nutritious choice that aligns with health-conscious values, making healthy living enjoyable for everyone.
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- productos --}}
    <section id="products">
        <div class="container-fluid mb-5">
            <div class="container products">
                <div class="row g-5 align-items-center">
                    <br><br>
                    <h2 class="animated slideInRight" style="color: #f94f00;">Products</h2>
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/foto-product-1.png') }}" width="300">
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/quinoa-drink.png') }}" width="200">
                        <label class="text-black mb-4 animated slideInRight">
                            <b>Nutrition information:</b> <br>
                            Average nutritional values for 100 ml.
                        </label>
                        {{-- <label class="text-black mb-4 animated slideInRight"> --}}
                            <table>
                                <tr>
                                    <td> Energy </td>
                                    <td> kJ/kcal </td>
                                    <td>&nbsp;&nbsp; 210/50 </td>
                                </tr>
                                <tr>
                                    <td>Fat <br> of which saturates</td>
                                    <td class="text-center">g <br> g</td>
                                    <td class="text-center">1,2 <br> 0,2</td>
                                </tr>
                                <tr>
                                    <td>Carbohidrate <br> of which sugars</td>
                                    <td class="text-center">g <br> g</td>
                                    <td class="text-center">9,0 <br> 3,7</td>
                                </tr>
                                <tr>
                                    <td>Protein</td>
                                    <td class="text-center">g</td>
                                    <td class="text-center">0,8</td>
                                </tr>
                                <tr>
                                    <td>Salt</td>
                                    <td class="text-center">g</td>
                                    <td class="text-center">0,09</td>
                                </tr>
                            </table>
                        <br>
                        <label class="text-black mb-4 animated slideInRight">
                            <b>Ingredients:</b> <br>
                            Water, organic Quinoa (11%), organic. sunflower oil, sea salt.
                        </label>
                        <label class="text-black mb-4 animated slideInRight">
                            <b>Allergens*:</b> <br>
                            None.
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5">
            <div class="container products">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/foto-product-2.png') }}" width="300">
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/quinoa-drink.png') }}" width="200">
                        <label class="text-black mb-4 animated slideInRight">
                            <b>Nutrition information:</b> <br>
                            Average nutritional values for 100 ml.
                        </label>
                        {{-- <label class="text-black mb-4 animated slideInRight"> --}}
                            <table>
                                <tr>
                                    <td> Energy </td>
                                    <td> kJ/kcal </td>
                                    <td>&nbsp;&nbsp; 210/50 </td>
                                </tr>
                                <tr>
                                    <td>Fat <br> of which saturates</td>
                                    <td class="text-center">g <br> g</td>
                                    <td class="text-center">1,2 <br> 0,2</td>
                                </tr>
                                <tr>
                                    <td>Carbohidrate <br> of which sugars</td>
                                    <td class="text-center">g <br> g</td>
                                    <td class="text-center">9,0 <br> 3,7</td>
                                </tr>
                                <tr>
                                    <td>Protein</td>
                                    <td class="text-center">g</td>
                                    <td class="text-center">0,8</td>
                                </tr>
                                <tr>
                                    <td>Salt</td>
                                    <td class="text-center">g</td>
                                    <td class="text-center">0,09</td>
                                </tr>
                            </table>
                        <br>
                        <label class="text-black mb-4 animated slideInRight">
                            <b>Ingredients:</b> <br>
                            Water, organic Quinoa (11%), organic. sunflower oil, sea salt.
                        </label>
                        <label class="text-black mb-4 animated slideInRight">
                            <b>Allergens*:</b> <br>
                            None.
                        </label>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5">
            <div class="container products">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/foto-product-3.png') }}" width="400">
                    </div>
                    <div class="col-lg-5 text-center">
                        <img class="img-fluid pulse infinite" src="{{ asset('sitio/img/foto-product-4.png') }}" width="400">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    {{-- certificaciones --}}
    <section id="certifications">
        <div class="container-fluid mb-5">
            <div class="container certifications">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 text-center text-lg-start">
                        <br><br><br>
                        <h2 class="animated slideInRight text-center" style="color: #f94f00;">Certifications</h2>
                        <br><br>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            Our business model is built on sustainability and excellence, ensuring that
                            every product meets the highest quality standards from its origin to international markets.
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            Through strategic partnerships with an Italian-certified processing facility, we
                            guarantee premium quality and food safety at every step.
                        </label>
                        <br><br>
                    </div>
                    <div class="col-lg-7 text-center">
                        <br><br><br>
                        {{-- <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/certifications.jpg') }}" width="500"> --}}
                        <div class="col-md-8">
                            <div class="col-md-12 text-center wow fadeIn d-flex" data-wow-delay="0.1s">
                                <div class="btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/green.png') }}" alt="green" width="100%">
                                </div>
                                <div class="btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/gluten-free.png') }}" alt="gluten-free" width="100%">
                                </div>
                                <div class="btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/kf.png') }}" alt="kf" width="100%">
                                </div>
                            </div>
                            <div class="col-md-12 text-center wow fadeIn d-flex" data-wow-delay="0.1s">
                                <div class="btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/label.png') }}" alt="vegan" width="100%">
                                </div>
                                <div class="btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/food_international.png') }}" alt="food_international" width="100%">
                                </div>
                                <div class="btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/brcs.png') }}" alt="brcs" width="100%">
                                </div>
                            </div>
                            <div class="col-md-12 text-center wow fadeIn d-flex" data-wow-delay="0.1s">
                                <div class="btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/ifs.png') }}" alt="ifs" width="100%">
                                </div>
                            </div>
                        </div>
                        <br>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- about --}}
    <section id="about-us">
        <div class="container-fluid mb-5">
            <div class="container about">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 text-center text-lg-start">
                        <br><br><br>
                        <h2 class="animated slideInRight text-center" style="color: #f94f00;">About us</h2>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            <b>Andean Forest Food Biotech S.R.L.</b> combines expertise, research and technological innovation, to craft products that
                            stands out for its exceptional taste and health benefits.
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            AFFB s.r.l. worked with organically grown quinoa from the Bolivian highlands.
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            The entire chain is controlled.
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            We empower indigenous families by offering fair prices and supporting sustainable, ecofriendly farming practices that
                            preserve their cultural heritage.
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            Our commitment to traceability ensures that every step of our quinoa beverage's journey—from farm to table—is ethical,
                            meeting the highest quality and safety standards. Beyond selling products.
                        </label>
                    </div>
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/logo-andean.png') }}" width="300">
                        <br><br>
                        <a href="http://www.andeanforest.com">
                            <img class="img-fluid" src="{{ asset('sitio/img/andeanforest.png') }}" width="300">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- contactos --}}
    <section id="contact-us">
        <div class="container-fluid mb-5">
            <div class="container contact">
                <div class="container" id="contact">
                    <br><br><br><br>
                    <h2 class="animated slideInRight text-center" style="color: #f94f00;">If You Have Any Query, Please Contact Us</h2>
                    <div class="row g-5">
                        <div class="col-lg-8 wow fadeIn" data-wow-delay="0.1s">
                            <p class="mb-4">Send us your consultations in the following form.</p>
                            @if(session('estadoMensaje'))
                                <p class="mb-4 text-success">{{session('estadoMensaje')}}</p>
                            @endif
                            <div class="wow fadeIn" data-wow-delay="0.3s">
                                <form action="{{route('guardarMensaje')}}" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                                <label for="name">Your Name</label>
                                            </div>
                                        </div>
                                        <div class="col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                                <label for="email">Your Email</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                                <label for="subject">Subject</label>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                                                <label for="message">Message</label>
                                            </div>
                                        </div>
                                        <div class="col-6">
                                            <button class="btn btn-warning w-100 py-3 text-dark" type="submit">Send Message</button>
                                        </div>
                                        {{-- <div class="col-12">
                                            <label id="estado" class="w-100 py-3 text-dark">-</label>
                                        </div> --}}
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
                                    <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection

@section('javascripts')
    <script>
        function enviarMensaje(){
            $('#estado').html('Enviando mensaje...');
            var datos = {
                'name': $('#name').val(),
                'email': $('#email').val(),
                'subject': $('#subject').val(),
                'message': $('#message').val(),
                "_token": "{{ csrf_token() }}"
            }
            $.ajax({
                url : "{{ route('guardarMensaje') }}",
                data : JSON.stringify(datos),
                type : 'POST',
                contentType : 'application/json',
                dataType : 'json',
                success : function(resultado) {
                    $('#estado').html(resultado.message);
                },
                error : function(xhr, status) {
                    $('#estado').html('<div class="alert alert-soft-danger" role="alert">Error: No hay datos del certificado'+status+'</div>');
                }
            });
        }
    </script>
@endsection