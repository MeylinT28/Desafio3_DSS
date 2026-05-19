<!DOCTYPE html>
<html>
<head>

    <title>Clientes</title>

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

        <div class="card border-0 shadow-lg rounded-4">

            <div class="card-header text-white rounded-top-4 d-flex justify-content-between align-items-center"
                 style="background-color: #6366f1; padding: 20px;">

                <h2 class="fw-bold">
                    Lista de Clientes
                </h2>

                <a href="/clientes/create" class="btn btn-light fw-bold">
                    Nuevo Cliente
                </a>

            </div>

            <div class="card-body p-4">

                <table class="table table-hover align-middle">

                    <thead style="background-color: #e0e7ff;">

                        <tr>

                            <th>ID</th>
                            <th>Nombre</th>
                            <th>DUI</th>
                            <th>Telefono</th>
                            <th>Correo</th>
                            <th>Acciones</th>

                        </tr>

                    </thead>

                    <tbody>

                        @foreach($clientes as $cliente)

                        <tr>

                            <td>{{ $cliente->id }}</td>

                            <td class="fw-bold">
                                {{ $cliente->nombre }}
                            </td>

                            <td>{{ $cliente->dui }}</td>

                            <td>{{ $cliente->telefono }}</td>

                            <td>{{ $cliente->correo }}</td>

                            <td>

                                <div class="d-flex gap-2">

                                    <a href="/clientes/{{ $cliente->id }}"
                                       class="btn btn-info btn-sm text-white">

                                        Ver

                                    </a>

                                    <a href="/clientes/{{ $cliente->id }}/edit"
                                       class="btn btn-warning btn-sm">

                                        Editar

                                    </a>

                                    <form action="/clientes/{{ $cliente->id }}"
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