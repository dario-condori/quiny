@extends('base')

@section('nombrePagina')
    Quiny - About Us
@endsection

@section('contenido')
<br>
<br>
    <div class="container-fluid py-5">
        <div class="container" id="contact">
            <div class="mx-auto text-center wow fadeIn" data-wow-delay="0.1s" style="max-width: 700px;">
                <h1 class="text-secondary mb-5"><span class="fw-light quiny">If You Have Any Query, Please Contact Us</span></h1>
            </div>
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
                                <div class="col-12">
                                    <label id="estado" class="w-100 py-3 text-dark">-</label>
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
                            <a class="btn btn-square btn-outline-primary me-1" href=""><i class="fab fa-linkedin-in"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
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
                    url : "{{ route('guardarMensaje') }}"',
                    data : JSON.stringify(datos),
                    type : 'POST',
                    contentType : 'application/json',
                    dataType : 'json',
                    success : function(resultado) {
                        $('#estado').html(resultado);
                    },
                    error : function(xhr, status) {
                        $('#estado').html('<div class="alert alert-soft-danger" role="alert">Error: No hay datos del certificado'+status+'</div>');
                    }
                });
            
        }
    </script>
@endsection