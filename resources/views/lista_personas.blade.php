<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.usebootstrap.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.usebootstrap.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="/styles.css" rel="stylesheet">

    </head>

    <body class="antialiased">
        <div class="container">
            <div class="text-right pt-5 pb-5">
                <a href="create" class="btn btn-success">Crear nuevo</a>
            </div>

            <table class="table table-dark">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Cedula</th>
                        <th>Nombre</th>
                        <th>Email</th>
                        <th>Accion</th>
                    </tr>
                </thead>

                @if(!empty($datos) && count($datos) > 0)

                @foreach($datos as $reg)
                <tr>
                    <td>{{$reg->id}}</td>
                    <td>{{$reg->cedula}}</td>
                    <td>{{$reg->nombre}}</td>
                    <td>{{$reg->email}}</td>
                    <td>
                        <a class="btn btn-outline-danger" href="delete/{{$reg->id}}">Borrar</a>
                        <a class="btn btn-outline-secondary" href="edit/{{$reg->id}}">Editar</a>
                    </td>
                </tr>

                @endforeach
                @else
                <tr>
                    <td colspan="5" class="text-center"> No hay datos para mostrar. </td>
                </tr>
                @endif

            </table>
        </div>

    </body>

</html>
