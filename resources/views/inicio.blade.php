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
                        <label class="text-black mb-4 animated slideInRight text-center">
                            <img class="img-fluid" src="{{ asset('sitio/img/quiny.png') }}"  width="100"><br>
                            {!! __('pagina.home') !!}
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
                        <h4 class="animated slideInRight" style="color: #f94f00;">
                            {!! __('pagina.whatis') !!}
                        </h4>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            {!! __('pagina.whatis.primero') !!}
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            {!! __('pagina.whatis.segundo') !!}
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            {!! __('pagina.whatis.tercero') !!}
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
                <div class="row g-5 ">{{--align-items-center--}}
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/foto-what-is-2.png') }}" width="400">
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <label class="text-black mb-4 animated slideInRight text-center">
                            {!! __('pagina.whatis.cuarto') !!}
                        </label>
                        <br>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            {!! __('pagina.whatis.quinto') !!}
                        </label>
                        <br>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            {!! __('pagina.whatis.sexto') !!}
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            &nbsp;<br><br><br><br><br><br>
                            &nbsp;<br><br><br><br><br><br>
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
                    <h2 class="animated slideInRight" style="color: #f94f00;">{!! __('pagina.products') !!}</h2>
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/foto-product-1.png') }}" width="300">
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/quinoa-drink.png') }}" width="200">
                        <br><br>
                        <label class="text-black mb-4 animated slideInRight">
                            {!! __('pagina.products.info') !!} <br>
                            {!! __('pagina.products.promedio') !!}
                        </label>
                            <table>
                                <tr>
                                    <td> {!! __('pagina.products.energia') !!} </td>
                                    <td> kJ/kcal </td>
                                    <td>&nbsp;&nbsp; 210/50 </td>
                                </tr>
                                <tr>
                                    <td>{!! __('pagina.products.grasas') !!} <br> {!! __('pagina.products.grasas.detalle') !!}</td>
                                    <td class="text-center">g <br> g</td>
                                    <td class="text-center">1,20 <br> 0,20</td>
                                </tr>
                                <tr>
                                    <td>{!! __('pagina.products.carbohidrato') !!} <br> {!! __('pagina.products.carbohidrato.detalle') !!}</td>
                                    <td class="text-center">g <br> g</td>
                                    <td class="text-center">9,00 <br> 3,70</td>
                                </tr>
                                <tr>
                                    <td>{!! __('pagina.products.proteina') !!}</td>
                                    <td class="text-center">g</td>
                                    <td class="text-center">0,80</td>
                                </tr>
                                <tr>
                                    <td>{!! __('pagina.products.sal') !!}</td>
                                    <td class="text-center">g</td>
                                    <td class="text-center">0,09</td>
                                </tr>
                            </table>
                        <br>
                        <label class="text-black mb-4 animated slideInRight">
                            {!! __('pagina.products.ingredientes') !!} <br>
                            {!! __('pagina.products.ingredientes.contenido1') !!}
                        </label>
                        <label class="text-black mb-4 animated slideInRight">
                            {!! __('pagina.products.alergenos') !!} <br>
                            {!! __('pagina.products.alergenos.detalle') !!}
                        </label>
                        <br>
                        {{-- <a href="{{ asset('sitio/details/quiny-natural-flavor-white.pdf') }}" target="_blank" class="btn btn-outline-warning px-3">More details</a> --}}
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5">
            <div class="container products2">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/foto-product-2.png') }}" width="300">
                    </div>
                    <div class="col-lg-5 text-center text-lg-start">
                        <br><br><br>
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/quinoa-choco-drink.png') }}" width="200">
                        <br><br>
                        <label class="text-black mb-4 animated slideInRight">
                            {!! __('pagina.products.info') !!} <br>
                            {!! __('pagina.products.promedio') !!}
                        </label>
                        {{-- <label class="text-black mb-4 animated slideInRight"> --}}
                            <table>
                                <tr>
                                    <td> {!! __('pagina.products.energia') !!} </td>
                                    <td> kJ/kcal </td>
                                    <td>&nbsp;&nbsp; 167/40 </td>
                                </tr>
                                <tr>
                                    <td>{!! __('pagina.products.grasas') !!} <br> {!! __('pagina.products.grasas.detalle') !!}</td>
                                    <td class="text-center">g <br> g</td>
                                    <td class="text-center">1,30 <br> 0,10</td>
                                </tr>
                                <tr>
                                    <td>{!! __('pagina.products.carbohidrato') !!} <br> {!! __('pagina.products.carbohidrato.detalle') !!}</td>
                                    <td class="text-center">g <br> g</td>
                                    <td class="text-center">6,30 <br> 1,80</td>
                                </tr>
                                <tr>
                                    <td>{!! __('pagina.products.proteina') !!}</td>
                                    <td class="text-center">g</td>
                                    <td class="text-center">0,80</td>
                                </tr>
                                <tr>
                                    <td>{!! __('pagina.products.sal') !!}</td>
                                    <td class="text-center">g</td>
                                    <td class="text-center">0,10</td>
                                </tr>
                            </table>
                        <br>
                        <label class="text-black mb-4 animated slideInRight">
                            {!! __('pagina.products.ingredientes') !!}: <br>
                            {!! __('pagina.products.ingredientes.contenido2') !!}
                        </label>
                        <label class="text-black mb-4 animated slideInRight">
                            {!! __('pagina.products.alergenos') !!} <br>
                            {!! __('pagina.products.alergenos.detalle') !!}
                        </label>
                        <br><br><br>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5">
            <div class="container products2">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 text-center">
                        <br><br>
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/foto-product-3.png') }}" width="400">
                    </div>
                    <div class="col-lg-5 text-center">
                        <br><br><br>
                        <img class="img-fluid pulse infinite" src="{{ asset('sitio/img/foto-product-4.png') }}" width="400">
                        <br><br>
                        <br><br>
                        <br><br>
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
                        <h2 class="animated slideInRight text-center" style="color: #f94f00;">{!! __('pagina.certifications') !!}</h2>
                        <br><br>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            {!! __('pagina.certifications.primero') !!}
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            {!! __('pagina.certifications.segundo') !!}
                        </label>
                        <br><br>
                    </div>
                    <div class="col-lg-7 text-center">
                        <br><br><br>
                        <div class="col-md-8">
                            <div class="col-md-12 text-center wow fadeIn d-flex" data-wow-delay="0.1s">
                                <div class="col-sm-12 btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/green.png') }}" alt="green" width="100%">
                                </div>
                                <div class="col-sm-12 btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/gluten-free.png') }}" alt="gluten-free" width="100%">
                                </div>
                            </div>
                            <div class="col-md-12 text-center wow fadeIn d-flex" data-wow-delay="0.1s">
                                <div class="col-sm-12 btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/kf.png') }}" alt="kf" width="100%">
                                </div>
                                <div class="col-sm-12 btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/label.png') }}" alt="vegan" width="100%">
                                </div>
                            </div>
                            <div class="col-md-12 text-center wow fadeIn d-flex" data-wow-delay="0.1s">
                                <div class="col-sm-12 btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/food_international.png') }}" alt="food_international" width="100%">
                                </div>
                                <div class="col-sm-12 btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/brcs.png') }}" alt="brcs" width="100%">
                                </div>
                            </div>
                            <div class="col-md-12 text-center wow fadeIn d-flex" data-wow-delay="0.1s">
                                <div class="col-sm-12 btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    <img src="{{ asset('sitio/img/certifications/ifs.png') }}" alt="ifs" width="100%">
                                </div>
                                <div class="col-sm-12 btn-square rounded-circle mx-auto mb-4" style="width: 120px; height: 120px;">
                                    -
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
                        <h2 class="animated slideInRight text-center" style="color: #f94f00;">{!! __('pagina.aboutus') !!}</h2>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            {!! __('pagina.aboutus.primero') !!}
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            {!! __('pagina.aboutus.segundo') !!}
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            {!! __('pagina.aboutus.tercero') !!}
                        </label>
                    </div>
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/logo-andean.png') }}" width="300">
                        <br><br>
                        <a href="https://andeanforest.com">
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
                    <h2 class="animated slideInRight text-center" style="color: #f94f00;">{!! __('pagina.contactus') !!}</h2>
                    <div class="row g-5">
                        <div class="col-sm-12 col-md-8 wow fadeIn" data-wow-delay="0.1s">
                            <p class="mb-4">{!! __('pagina.contactus.primero') !!}</p>
                            @if(session('estadoMensaje'))
                                <p class="mb-4 text-success">{{session('estadoMensaje')}}</p>
                            @endif
                            <div class="wow fadeIn" data-wow-delay="0.3s">
                                <form action="{{route('guardarMensaje')}}" method="POST">
                                    @csrf
                                    <div class="row g-3">
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="name" name="name" placeholder="Your Name" required>
                                                <label for="name">{!! __('pagina.contactus.name') !!}</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-md-6">
                                            <div class="form-floating">
                                                <input type="email" class="form-control" id="email" name="email" placeholder="Your Email" required>
                                                <label for="email">{!! __('pagina.contactus.email') !!}</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-12">
                                            <div class="form-floating">
                                                <input type="text" class="form-control" id="subject" name="subject" placeholder="Subject" required>
                                                <label for="subject">{!! __('pagina.contactus.subject') !!}</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-12">
                                            <div class="form-floating">
                                                <textarea class="form-control" placeholder="Leave a message here" id="message" name="message" style="height: 150px" required></textarea>
                                                <label for="message">{!! __('pagina.contactus.message') !!}</label>
                                            </div>
                                        </div>
                                        <div class="col-sm-12 col-6">
                                            <button class="btn btn-warning w-100 py-3 text-dark" type="submit">{!! __('pagina.contactus.send') !!}</button>
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
                                <h5 class="mb-4">{!! __('pagina.contactus.segundo') !!}</h5>
                                <p><i class="fa fa-map-marker-alt me-3"></i>Via del Lauro, 920121 Milano MI, Italia</p>
                                {{-- <p><i class="fa fa-phone-alt me-3"></i>+592 2245781</p> --}}
                                <p><i class="fa fa-envelope me-3"></i>info@andeanforest.com</p>
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