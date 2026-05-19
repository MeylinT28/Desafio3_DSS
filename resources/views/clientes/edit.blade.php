<!DOCTYPE html>
<html>
<head>

    <title>Editar Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

    <h1>Editar Cliente</h1>

    <form action="/clientes/{{ $cliente->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>Nombre</label>
        <input type="text" name="nombre" value="{{ $cliente->nombre }}" class="form-control">

        <br>

        <label>DUI</label>
        <input type="text" name="dui" value="{{ $cliente->dui }}" class="form-control">

        <br>

        <label>Telefono</label>
        <input type="text" name="telefono" value="{{ $cliente->telefono }}" class="form-control">

        <br>

        <label>Correo</label>
        <input type="email" name="correo" value="{{ $cliente->correo }}" class="form-control">

        <br>

        <button type="submit" class="btn btn-warning">
            Actualizar
        </button>

    </form>

</body>
</html>