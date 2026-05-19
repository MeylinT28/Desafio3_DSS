<!DOCTYPE html>
<html>
<head>

    <title>Nueva Reserva</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color: #fff8eb;">

    <nav class="navbar navbar-expand-lg shadow"
         style="background-color: #d97706;">

        <div class="container">

            <a class="navbar-brand text-white fw-bold" href="/">
                Sistema Hotelero
            </a>

            <div>
                <a href="/" class="btn btn-dark">
                    Inicio
                </a>

                <a href="/clientes" class="btn btn-primary">
                    Clientes
                </a>

                <a href="/habitaciones" class="btn btn-success">
                    Habitaciones
                </a>

                <a href="/reservas" class="btn btn-light">
                    Reservas
                </a>

            </div>

        </div>

    </nav>

    <div class="container py-5">

        <div class="row justify-content-center">

            <div class="col-md-8">

                <div class="card border-0 shadow-lg rounded-4">

                    <div class="card-header text-white rounded-top-4"
                         style="background-color: #f59e0b; padding: 20px;">

                        <h2 class="fw-bold">
                            Nueva Reserva
                        </h2>

                    </div>

                    <div class="card-body p-5">

                        @if($errors->any())

                            <div class="alert alert-danger rounded-3">

                                <ul>

                                    @foreach($errors->all() as $error)

                                        <li>{{ $error }}</li>

                                    @endforeach

                                </ul>

                            </div>

                        @endif

                        <form action="/reservas" method="POST">

                            @csrf

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Cliente
                                </label>

                                <select name="cliente_id"
                                        class="form-select rounded-3">

                                    <option value="">
                                        Seleccione Cliente
                                    </option>

                                    @foreach($clientes as $cliente)

                                        <option value="{{ $cliente->id }}">

                                            {{ $cliente->nombre }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Habitacion
                                </label>

                                <select name="habitacion_id"
                                        class="form-select rounded-3">

                                    <option value="">
                                        Seleccione Habitacion
                                    </option>

                                    @foreach($habitaciones as $habitacion)

                                        <option value="{{ $habitacion->id }}">

                                            Habitacion {{ $habitacion->numero }}

                                        </option>

                                    @endforeach

                                </select>

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Fecha Entrada
                                </label>

                                <input type="date"
                                       name="fecha_entrada"
                                       class="form-control rounded-3">

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Fecha Salida
                                </label>

                                <input type="date"
                                       name="fecha_salida"
                                       class="form-control rounded-3">

                            </div>

                            <div class="text-center">

                                <button type="submit"
                                        class="btn btn-warning btn-lg px-5 text-white fw-bold">

                                    Guardar Reserva

                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

</body>
</html>