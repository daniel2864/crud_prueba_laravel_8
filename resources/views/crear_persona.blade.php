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
        <!-- jQuery library -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdn.usebootstrap.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
        <script src="https://cdn.usebootstrap.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>

        <link rel="stylesheet" href="https://cdn.usebootstrap.com/bootstrap/4.4.1/css/bootstrap.min.css">
        <link href="/styles.css" rel="stylesheet">
    </head>

    <body class="antialiased">

        <div class="container ">
            <div class="text-left pt-5 pb-5">
                <a href="/" class="btn btn-warning">Volver </a>
            </div>



            <form action="store" method="post">
                {{ csrf_field() }}
                <div class="form-group">
                    <label for="cedula">Cedula:</label>
                    <input type="text" class="form-control @error('cedula') is-invalid @enderror" name="cedula"
                        value="{{ old('cedula') }}">

                    @if($errors->has('cedula'))
                    <span class="invalid-feedback">
                        <b>{{ $errors->first('cedula') }}</b>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="nombre">Nombre:</label>
                    <input type="text" class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                        value="{{ old('nombre') }}">
                    @if($errors->has('nombre'))
                    <span class="invalid-feedback">
                        <b>{{ $errors->first('nombre') }}</b>
                    </span>
                    @endif
                </div>
                <div class="form-group">
                    <label for="email">Email:</label>
                    <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                        value="{{ old('email') }}">
                    @if($errors->has('email'))
                    <span class="invalid-feedback">
                        <b>{{ $errors->first('email') }}</b>
                    </span>
                    @endif
                </div>

                <input type="submit" class="btn badge-primary" />
            </form>
        </div>

    </body>

</html>
