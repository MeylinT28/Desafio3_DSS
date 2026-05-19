<!DOCTYPE html>
<html>
<head>

    <title>Detalle Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

    <h1>Detalle Cliente</h1>

    <div class="card p-4">

        <h3>{{ $cliente->nombre }}</h3>

        <p><strong>DUI:</strong> {{ $cliente->dui }}</p>

        <p><strong>Telefono:</strong> {{ $cliente->telefono }}</p>

        <p><strong>Correo:</strong> {{ $cliente->correo }}</p>

    </div>

</body>
</html>