@extends('base')

@section('nombrePagina')
    Quiny
@endsection

@section('contenido')
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
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/foto-home.png') }}">
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section id="what-is">
        <div class="container-fluid mb-5">
            <div class="container what">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 text-center text-lg-start">
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
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/envase-what-is.png') }}" width="500">
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid mb-5">
            <div class="container what">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/envase-what-is.png') }}" width="500">
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
    <section id="products">
        <div class="container-fluid mb-5">
            <div class="container products">
                <div class="row g-5 align-items-center">
                    <h2 class="animated slideInRight" style="color: #f94f00;">Products</h2>
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/quiny1.png') }}" width="200">
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
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/envase-product-2.png') }}" width="300">
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
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/envase-product-3-4.png') }}" width="400">
                    </div>
                    <div class="col-lg-5 text-center">
                        <img class="img-fluid pulse infinite" src="{{ asset('sitio/img/envase-product-3-4-aviso.png') }}" width="400">
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="certifications">
        <div class="container-fluid mb-5">
            <div class="container what">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 text-center text-lg-start">
                        <h2 class="animated slideInRight text-center" style="color: #f94f00;">Certifications</h2>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            Our business model is built on sustainability and excellence, ensuring that
                            every product meets the highest quality standards from its origin to international markets.
                        </label>
                        <label class="text-black mb-4 animated slideInRight text-center">
                            Through strategic partnerships with an Italian-certified processing facility, we
                            guarantee premium quality and food safety at every step.
                        </label>
                    </div>
                    <div class="col-lg-7 text-center">
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/certifications.jpg') }}" width="500">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="certifications">
        <div class="container-fluid mb-5">
            <div class="container what">
                <div class="row g-5 align-items-center">
                    <div class="col-lg-5 text-center text-lg-start">
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
                        <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/andeanforest.png') }}" width="300">
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection