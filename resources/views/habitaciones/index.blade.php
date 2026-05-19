<!DOCTYPE html>
<html>
<head>

    <title>Habitaciones</title>

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

        <div class="card border-0 shadow-lg rounded-4">

            <div class="card-header text-white rounded-top-4 d-flex justify-content-between align-items-center"
                 style="background-color: #22c55e; padding: 20px;">

                <h2 class="fw-bold">
                    Lista de Habitaciones
                </h2>

                <a href="/habitaciones/create" class="btn btn-light fw-bold">
                    Nueva Habitacion
                </a>

            </div>

            <div class="card-body p-4">

                <table class="table table-hover align-middle">

                    <thead style="background-color: #dcfce7;">

                        <tr>

                            <th>ID</th>
                            <th>Numero</th>
                            <th>Tipo</th>
                            <th>Precio</th>
                            <th>Estado</th>
                            <th>Acciones</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($habitaciones as $habitacion)

                        <tr>

                            <td>{{ $habitacion->id }}</td>

                            <td class="fw-bold">
                                {{ $habitacion->numero }}
                            </td>

                            <td>{{ $habitacion->tipo }}</td>

                            <td>${{ $habitacion->precio }}</td>

                            <td>

                                @if($habitacion->estado == 'Disponible')

                                    <span class="badge bg-success">
                                        Disponible
                                    </span>

                                @elseif($habitacion->estado == 'Ocupada')

                                    <span class="badge bg-danger">
                                        Ocupada
                                    </span>

                                @else

                                    <span class="badge bg-warning text-dark">
                                        Mantenimiento
                                    </span>

                                @endif

                            </td>

                            <td>

                                <div class="d-flex gap-2">

                                    <a href="/habitaciones/{{ $habitacion->id }}"
                                       class="btn btn-info btn-sm text-white">

                                        Ver

                                    </a>

                                    <a href="/habitaciones/{{ $habitacion->id }}/edit"
                                       class="btn btn-warning btn-sm">

                                        Editar

                                    </a>

                                    <form action="/habitaciones/{{ $habitacion->id }}"
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