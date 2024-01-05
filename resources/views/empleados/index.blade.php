<!-- resources/views/empleados/index.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Lista de Empleados</h2>

        @if(count($empleados) > 0)
            <table class="table">
                <thead>
                    <tr>
                        <th>Código</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Correo</th>
                        <!-- Agrega otras columnas según tus necesidades -->
                    </tr>
                </thead>
                <tbody>
                    @foreach($empleados as $empleado)
                        <tr>
                            <td>{{ $empleado->codigo }}</td>
                            <td>{{ $empleado->nombre }}</td>
                            <td>{{ $empleado->apellido }}</td>
                            <td>{{ $empleado->correo }}</td>
                            <!-- Agrega otras celdas según tus necesidades -->
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @else
            <p>No hay empleados registrados.</p>
        @endif
    </div>
@endsection
