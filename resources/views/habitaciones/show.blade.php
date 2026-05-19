<!DOCTYPE html>
<html>
<head>

    <title>Detalle Habitacion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body class="container mt-5">

    <h1>Detalle Habitacion</h1>

    <div class="card p-4">

        <h3>Habitacion {{ $habitacion->numero }}</h3>

        <p><strong>Tipo:</strong> {{ $habitacion->tipo }}</p>

        <p><strong>Precio:</strong> {{ $habitacion->precio }}</p>

        <p><strong>Estado:</strong> {{ $habitacion->estado }}</p>

    </div>

</body>
</html>