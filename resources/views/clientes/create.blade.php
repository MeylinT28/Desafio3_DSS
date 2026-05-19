<!DOCTYPE html>
<html>
<head>

    <title>Nuevo Cliente</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>

<body style="background-color: #f5f7fb;">

    <nav class="navbar navbar-expand-lg shadow"
         style="background-color: #4f46e5;">

        <div class="container">

            <a class="navbar-brand text-white fw-bold" href="/">
                Sistema Hotelero
            </a>

            <div>
                <a href="/" class="btn btn-dark">
                    Inicio
                </a>

                <a href="/clientes" class="btn btn-light">
                    Clientes
                </a>

                <a href="/habitaciones" class="btn btn-success">
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
                         style="background-color: #6366f1; padding: 20px;">

                        <h2 class="fw-bold">
                            Nuevo Cliente
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

                        <form action="/clientes" method="POST">

                            @csrf

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Nombre
                                </label>

                                <input type="text"
                                       name="nombre"
                                       class="form-control rounded-3">

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    DUI
                                </label>

                                <input type="text"
                                       name="dui"
                                       class="form-control rounded-3">

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Telefono
                                </label>

                                <input type="text"
                                       name="telefono"
                                       class="form-control rounded-3">

                            </div>

                            <div class="mb-4">

                                <label class="form-label fw-bold">
                                    Correo
                                </label>

                                <input type="email"
                                       name="correo"
                                       class="form-control rounded-3">

                            </div>

                            <div class="text-center">

                                <button type="submit"
                                        class="btn btn-primary btn-lg px-5 fw-bold">

                                    Guardar Cliente

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