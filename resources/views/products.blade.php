@extends('base')

@section('nombrePagina')
    Quiny - Products
@endsection

@section('contenido')
    <div class="container-fluid bg-primary product mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6 text-center">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/envase-product-1.png') }}" width="380">
                </div>
                <div class="col-lg-5 text-center text-lg-start">
                    <h1 class="text-black mb-4 animated slideInRight quiny">
                        Quinoa drink (quiny)
                    </h1>
                    <ul>
                        <li class="quiny">
                            Quinoa vegetable drink.
                        </li>
                    </ul>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        Nutrition information:
                    </h5>
                    <table>
                        <tr>
                            <td class="quiny" colspan="3">
                                Average nutritional values for 100 ml
                            </td>
                        </tr>
                        <tr>
                            <td class="quiny-black">Energy</td>
                            <td class="quiny-black">kJ/kcal</td>
                            <td class="quiny-black">210/50</td>
                        </tr>
                        <tr>
                            <td class="quiny-black">Fat <br> of which saturates</td>
                            <td class="quiny-black">g <br> g</td>
                            <td class="quiny-black">1,2 <br> 0,2</td>
                        </tr>
                        <tr>
                            <td class="quiny-black">Carbohidrate <br> of which sugars</td>
                            <td class="quiny-black">g <br> g</td>
                            <td class="quiny-black">9,0 <br> 3,7</td>
                        </tr>
                        <tr>
                            <td class="quiny-black">Protein</td>
                            <td class="quiny-black">g</td>
                            <td class="quiny-black">0,8</td>
                        </tr>
                        <tr>
                            <td class="quiny-black">Salt</td>
                            <td class="quiny-black">g</td>
                            <td class="quiny-black">0,09</td>
                        </tr>
                    </table>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        Ingredients:
                    </h5>
                    <ul>
                        <li class="quiny">
                            Water, organic Quinoa (11%), <br>
                            organic. sunflower oil, sea salt.
                        </li>
                    </ul>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        How to use:
                    </h5>
                    <ul>
                        <li class="quiny">
                            Shake well before use.
                        </li>
                        <li class="quiny">
                            Store in a cool, dry place.
                        </li>
                        <li class="quiny">
                            Refrigerate after opening and <br>
                            consume within 4/5 days.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary product mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 text-center">
                    <img class="img-fluid pulse infinite" src="{{ asset('sitio/img/envase-product-1.png') }}" width="380">
                </div>
                <div class="col-lg-5 text-center text-lg-start">
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        Allergens*:
                    </h5>
                    <ul>
                        <li class="quiny">
                            None.
                        </li>
                    </ul>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        Specifications:
                    </h5>
                    <ul>
                        <li class="quiny">
                            Net content: 33,8 oz (1 liter).
                        </li>
                        <li class="quiny">
                            Shelf life: 18 months.
                        </li>
                        <li class="quiny">
                            Origin: Italy.
                        </li>
                    </ul>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        Packaging:
                    </h5>
                    <ul>
                        <li class="quiny">
                            12 units per carton.
                        </li>
                        <li class="quiny">
                            78 cartons per pallet.
                        </li>
                        <li class="quiny">
                            936 Units per pallet.
                        </li>
                        <li class="quiny">
                            Tetrapak screw cap (Primary packaging).
                        </li>
                        <li class="quiny">
                            0609143624885 (EAN code).
                        </li>
                        <li class="quiny">
                            Waved carton (secondary packaging).
                        </li>
                    </ul>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        shipping and handling:
                    </h5>
                    <ul>
                        <li class="quiny">
                            Room temperature.
                        </li>
                        <li class="quiny">
                            No refrigeration is required.
                        </li>
                    </ul>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        *Reg. Annex II of Reg. 1169/2011
                    </h5>
                </div>
            </div>
        </div>
    </div>  

    {{-- quinoa chocolate --}}
    <div class="container-fluid bg-primary product mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 text-center">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/envase-product-2.png') }}" width="400">
                </div>
                <div class="col-lg-5 text-center text-lg-start">
                    <h1 class="text-black mb-4 animated slideInRight quiny">
                        Quinoa choco drink (quiny)
                    </h1>
                    <ul>
                        <li class="quiny">
                            Quinoa vegetable drink with cocoa.
                        </li>
                    </ul>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        Nutrition information:
                    </h5>
                    <table>
                        <tr>
                            <td class="quiny" colspan="3">
                                Average nutritional values for 100 ml
                            </td>
                        </tr>
                        <tr>
                            <td class="quiny-black">Energy</td>
                            <td class="quiny-black">kJ/kcal</td>
                            <td class="quiny-black">210/50</td>
                        </tr>
                        <tr>
                            <td class="quiny-black">Fat <br> of which saturates</td>
                            <td class="quiny-black">g <br> g</td>
                            <td class="quiny-black">1,2 <br> 0,2</td>
                        </tr>
                        <tr>
                            <td class="quiny-black">Carbohidrate <br> of which sugars</td>
                            <td class="quiny-black">g <br> g</td>
                            <td class="quiny-black">9,0 <br> 3,7</td>
                        </tr>
                        <tr>
                            <td class="quiny-black">Protein</td>
                            <td class="quiny-black">g</td>
                            <td class="quiny-black">0,8</td>
                        </tr>
                        <tr>
                            <td class="quiny-black">Salt</td>
                            <td class="quiny-black">g</td>
                            <td class="quiny-black">0,09</td>
                        </tr>
                    </table>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        Ingredients:
                    </h5>
                    <ul>
                        <li class="quiny">
                            Water, organic Quinoa (11%), <br>
                            organic cocoa powder (1%), <br>
                            sunflower oil, sea salt.
                        </li>
                    </ul>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        How to use:
                    </h5>
                    <ul>
                        <li class="quiny">
                            Shake well before use.
                        </li>
                        <li class="quiny">
                            Store in a cool, dry place.
                        </li>
                        <li class="quiny">
                            Refrigerate after opening and <br>
                            consume within 4/5 days.
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="container-fluid bg-primary product mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-7 text-center">
                    <img class="img-fluid pulse infinite" src="{{ asset('sitio/img/envase-product-2.png') }}" width="400">
                </div>
                <div class="col-lg-5 text-center text-lg-start">
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        Allergens*:
                    </h5>
                    <ul>
                        <li class="quiny">
                            None.
                        </li>
                    </ul>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        Specifications:
                    </h5>
                    <ul>
                        <li class="quiny">
                            Net content: 33,8 oz (1 liter).
                        </li>
                        <li class="quiny">
                            Shelf life: 18 months.
                        </li>
                        <li class="quiny">
                            Origin: Italy.
                        </li>
                    </ul>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        Packaging:
                    </h5>
                    <ul>
                        <li class="quiny">
                            12 units per carton.
                        </li>
                        <li class="quiny">
                            78 cartons per pallet.
                        </li>
                        <li class="quiny">
                            936 Units per pallet.
                        </li>
                        <li class="quiny">
                            Tetrapak screw cap (Primary packaging).
                        </li>
                        <li class="quiny">
                            0609143624885 (EAN code).
                        </li>
                        <li class="quiny">
                            Waved carton (secondary packaging).
                        </li>
                    </ul>
                    <h5 class="text-black mb-4 animated slideInRight quiny-black">
                        *Reg. Annex II of Reg. 1169/2011
                    </h5>
                </div>
            </div>
        </div>
    </div>  

    {{-- proximos productos --}}
    <div class="container-fluid bg-primary product mb-5">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-5 text-center">
                    <img class="img-fluid pulse infinite" src="{{ asset('sitio/img/envase-product-3-4-aviso.png') }}" width="400">
                </div>
                <div class="col-lg-7 text-center">
                    <img class="img-fluid animated pulse infinite" src="{{ asset('sitio/img/envase-product-3-4.png') }}" width="400">
                </div>
            </div>
        </div>
    </div>  
@endsection