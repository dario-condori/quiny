@extends('base')

@section('nombrePagina')
    Quiny - What is ?
@endsection

@section('contenido')
<br>
<br>
    <div class="container-fluid bg-primary home mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 text-center text-lg-start">
                    <h1 class="display-4 animated slideInRight quiny">What is Quiny?</h1>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        QUINY is a natural plant-based drink, Crafted from high-quality quinoa, making it a complete protein and 
                        an ideal choice for those seeking a nutritious and balanced diet.
                    </h4>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        QUINY is perfect for health-conscious consumers who prioritize nutrition from organic quinoa as a superfood, seek a
                        sugar-free and gluten-free alternative, and a high vegan protein content Free from allergens and artificial additives.
                    </h4>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        QUINY is more than just a drink. It’s a premium experience designed with innovation and sustainability.
                    </h4>
                </div>
                <div class="col-lg-7 text-center">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/envase-what-is.png') }}" width="500">
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary home mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 text-center text-lg-start">
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        It supports children's growth,
provides natural energy for athletes,
and offers vital nutrients for
expectant mothers.
                    </h4>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        QUINY is perfect for health-conscious consumers who prioritize nutrition from organic quinoa as a superfood, seek a
                        sugar-free and gluten-free alternative, and a high vegan protein content Free from allergens and artificial additives.
                    </h4>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        Suitable For anyone seeking a balanced lifestyle,
                    </h4>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        QUINY is a delicious, nutritious choice that
aligns with health-conscious values,
making healthy living enjoyable for
everyone.
                    </h4>
                </div>
                <div class="col-lg-7 text-center">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/envase-what-is.png') }}" width="500">
                </div>
            </div>
        </div>
    </div>
@endsection