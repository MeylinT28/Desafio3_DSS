<!DOCTYPE html>
<html>
<head>

    <title>Nueva Habitacion</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color: #eefbf3;">

    <nav class="navbar navbar-expand-lg shadow"
         style="background-color: #15803d;">

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

                <a href="/habitaciones" class="btn btn-light">
                    Habitaciones
                </a>

                <a href="/reservas" class="btn btn-warning">
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
                         style="background-color: #22c55e; padding: 20px;">

                        <h2 class="fw-bold">
                            Nueva Habitacion
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

                        <form action="/habitaciones" method="POST">

                            @csrf

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Numero
                                </label>

                                <input type="text"
                                       name="numero"
                                       class="form-control rounded-3">

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Tipo
                                </label>

                                <select name="tipo"
                                        class="form-select rounded-3">

                                    <option value="">
                                        Seleccione tipo
                                    </option>

                                    <option value="Simple">
                                        Simple
                                    </option>

                                    <option value="Doble">
                                        Doble
                                    </option>

                                    <option value="Suite">
                                        Suite
                                    </option>

                                </select>

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Precio
                                </label>

                                <input type="text"
                                       name="precio"
                                       class="form-control rounded-3">

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Estado
                                </label>

                                <select name="estado"
                                        class="form-select rounded-3">

                                    <option value="">
                                        Seleccione estado
                                    </option>

                                    <option value="Disponible">
                                        Disponible
                                    </option>

                                    <option value="Ocupada">
                                        Ocupada
                                    </option>

                                    <option value="Mantenimiento">
                                        Mantenimiento
                                    </option>

                                </select>

                            </div>

                            <div class="text-center">

                                <button type="submit"
                                        class="btn btn-success btn-lg px-5 fw-bold">

                                    Guardar Habitacion

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