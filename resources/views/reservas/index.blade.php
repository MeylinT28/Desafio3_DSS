<!DOCTYPE html>
<html>
<head>

    <title>Reservas</title>

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

        <div class="card border-0 shadow-lg rounded-4">

            <div class="card-header rounded-top-4 d-flex justify-content-between align-items-center text-white"
                 style="background-color: #f59e0b; padding: 20px;">

                <h2 class="fw-bold">
                    Lista de Reservas
                </h2>

                <a href="/reservas/create" class="btn btn-dark">
                    Nueva Reserva
                </a>

            </div>

            <div class="card-body p-4">

                <table class="table table-hover align-middle">

                    <thead style="background-color: #fde68a;">

                        <tr>

                            <th>ID</th>
                            <th>Cliente</th>
                            <th>Habitacion</th>
                            <th>Fecha Entrada</th>
                            <th>Fecha Salida</th>
                            <th>Acciones</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($reservas as $reserva)

                        <tr>

                            <td>{{ $reserva->id }}</td>

                            <td class="fw-bold">
                                {{ $reserva->cliente->nombre }}
                            </td>

                            <td>
                                {{ $reserva->habitacion->numero }}
                            </td>

                            <td>{{ $reserva->fecha_entrada }}</td>

                            <td>{{ $reserva->fecha_salida }}</td>

                            <td>

                                <div class="d-flex gap-2">

                                    <a href="/reservas/{{ $reserva->id }}/edit"
                                       class="btn btn-warning btn-sm">

                                        Editar

                                    </a>

                                    <form action="/reservas/{{ $reserva->id }}"
                                          method="POST">

                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-danger btn-sm">

                                            Eliminar

                                        </button>

                                    </form>

                                </div>

                            </td>

                        </tr>

                        @endforeach

                    </tbody>

                </table>

            </div>

        </div>

    </div>

</body>
</html>