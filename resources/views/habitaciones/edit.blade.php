<!DOCTYPE html>
<html>
<head>

    <title>Editar Habitacion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="container mt-5">

    <h1>Editar Habitacion</h1>

    <form action="/habitaciones/{{ $habitacion->id }}" method="POST">

        @csrf
        @method('PUT')

        <input type="text" name="numero" value="{{ $habitacion->numero }}" class="form-control">

        <br>

        <input type="text" name="tipo" value="{{ $habitacion->tipo }}" class="form-control">

        <br>

        <input type="text" name="precio" value="{{ $habitacion->precio }}" class="form-control">

        <br>

        <input type="text" name="estado" value="{{ $habitacion->estado }}" class="form-control">

        <br>

        <button type="submit" class="btn btn-warning">
            Actualizar
        </button>

    </form>

</body>
</html>