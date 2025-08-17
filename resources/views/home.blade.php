@extends('base')

@section('nombrePagina')
    Quiny - Home
@endsection

@section('contenido')
    <div class="container-fluid bg-primary home mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 text-center text-lg-start">
                    <h1 class="display-4 animated slideInRight quiny">Quinoa Drink</h1>
                    <h3 class="text-black mb-4 animated slideInRight quiny-black">QUINY is a natural plant-based
                        drink that not only delivers a delicious taste but also provides
                        a rich source of essential nutrients, high-quality protein, minerals and essential aminoacids..
                    </h3>
                    <a href="" class="btn btn-dark py-2 px-4 me-3 animated slideInRight">More...</a>
                </div>
                <div class="col-lg-7 text-center">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/envase-home.png') }}">
                </div>
            </div>
        </div>
    </div>
    
@endsection