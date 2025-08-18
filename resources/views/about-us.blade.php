@extends('base')

@section('nombrePagina')
    Quiny - About Us
@endsection

@section('contenido')
<br>
<br>
    <div class="container-fluid bg-primary home mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center text-lg-start">
                    <h1 class="display-4 animated slideInRight quiny">About Us</h1>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        Andean Forest Food Biotech S.R.L. combines expertise, research and technological innovation, to craft
                        products that stands out for its exceptional taste and health benefits.
                    </h4>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        AFFB s.r.l. worked with organically grown quinoa from the Bolivian highlands.
                    </h4>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        The entire chain is controlled.
                    </h4>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        We empower indigenous families by offering fair prices and supporting sustainable, eco-friendly farming
                        practices that preserve their cultural heritage.
                    </h4>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        Our commitment to traceability ensures that every step of our quinoa beverage's journey—from farm to
                        table—is ethical,
                    </h4>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        meeting the highest quality and safety standards. Beyond selling products,
                    </h4>
                </div>
                <div class="col-lg-6 text-center">
                    <div class="col-md-8">
                        <div>
                            <img src="{{ asset('sitio/img/logo-andean.png') }}" width="200" alt="">
                        </div>
                        <a href="https://www.andeanfores.com">www.andeanforest.com</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection