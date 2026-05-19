<!DOCTYPE html>
<html>
<head>

    <title>Editar Reserva</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body class="container mt-5">

    <h1>Editar Reserva</h1>

    <form action="/reservas/{{ $reserva->id }}" method="POST">

        @csrf
        @method('PUT')

        <label>Cliente</label>

        <select name="cliente_id" class="form-control">

            @foreach($clientes as $cliente)

                <option value="{{ $cliente->id }}"
                    {{ $cliente->id == $reserva->cliente_id ? 'selected' : '' }}>

                    {{ $cliente->nombre }}

                </option>

            @endforeach

        </select>

        <br>

        <label>Habitacion</label>

        <select name="habitacion_id" class="form-control">

            @foreach($habitaciones as $habitacion)

                <option value="{{ $habitacion->id }}"
                    {{ $habitacion->id == $reserva->habitacion_id ? 'selected' : '' }}>

                    {{ $habitacion->numero }}

                </option>

            @endforeach

        </select>

        <br>

        <label>Fecha Entrada</label>

        <input type="date"
               name="fecha_entrada"
               value="{{ $reserva->fecha_entrada }}"
               class="form-control">

        <br>

        <label>Fecha Salida</label>

        <input type="date"
               name="fecha_salida"
               value="{{ $reserva->fecha_salida }}"
               class="form-control">

        <br>

        <button type="submit" class="btn btn-warning">
            Actualizar
        </button>

    </form>

</body>
</html>