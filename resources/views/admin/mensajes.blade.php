<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Quiny - mensajes</title>
</head>
<body>
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
</body>
</html>