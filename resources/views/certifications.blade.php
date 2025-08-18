@extends('base')

@section('nombrePagina')
    Quiny - Certifications
@endsection

@section('contenido')
<br>
<br>
    <div class="container-fluid bg-primary home mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 text-center text-lg-start">
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        Our business model is built on
sustainability and excellence, ensuring
that every product meets the highest
quality standards from its origin to
international markets.
                    </h4>
                    <h4 class="text-black mb-4 animated slideInRight quiny-black">
                        Through strategic partnerships with an
Italian-certified processing facility, we
guarantee premium quality and food
safety at every step.
                    </h4>
                </div>
                <div class="col-lg-7 text-center">
                    <div class="col-md-8">
                        <div class="col-md-12 text-center wow fadeIn d-flex" data-wow-delay="0.1s">
                            <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                                <img src="{{ asset('sitio/img/certifications/green.png') }}" alt="green" width="100%">
                            </div>
                            <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                                <img src="{{ asset('sitio/img/certifications/gluten-free.png') }}" alt="gluten-free" width="100%">
                            </div>
                            <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                                <img src="{{ asset('sitio/img/certifications/kf.png') }}" alt="kf" width="100%">
                            </div>
                            <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                                <img src="{{ asset('sitio/img/certifications/label.png') }}" alt="vegan" width="100%">
                            </div>
                        </div>
                        <div class="col-md-12 text-center wow fadeIn d-flex" data-wow-delay="0.1s">
                            <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                                <img src="{{ asset('sitio/img/certifications/food_international.png') }}" alt="food_international" width="100%">
                            </div>
                            <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                                <img src="{{ asset('sitio/img/certifications/brcs.png') }}" alt="brcs" width="100%">
                            </div>
                            <div class="btn-square rounded-circle border mx-auto mb-4" style="width: 120px; height: 120px;">
                                <img src="{{ asset('sitio/img/certifications/ifs.png') }}" alt="ifs" width="100%">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
@endsection