@extends('base')

@section('nombrePagina')
    Quiny - mensajes
@endsection

@section('contenido')
    {{-- home --}}
    <section id="home">
        <div class="container-fluid mb-5">
            <div class="container home">
                <div class="row g-5 align-items-center">
                    <table>
        <tr>
            <td>Id</td>
            <td>Nombre</td>
            <td>Email</td>
            <td>Título</td>
            <td>Mensaje</td>
            <td>Acción</td>
        </tr>
        @foreach ($mensajes as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->name }}</td>
                <td>{{ $item->email }}</td>
                <td>{{ $item->subject }}</td>
                <td>{{ $item->message }}</td>
                <td>
                    {{-- <a href="#">Ver</a> --}}
                </td>
            </tr>
        @endforeach
    </table>
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