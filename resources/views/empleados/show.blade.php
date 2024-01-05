<!-- resources/views/empleados/show.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Detalles del Empleado</h2>

        <!-- Mostrar los datos del empleado -->
        <p>Código: {{ $empleado->codigo }}</p>
        <p>Nombre: {{ $empleado->nombre }}</p>
        <p>Apellido: {{ $empleado->apellido }}</p>
        <p>Género: {{ $empleado->genero }}</p>
        <p>Fecha de Nacimiento: {{ $empleado->fecha_nacimiento }}</p>
        <p>Teléfono: {{ $empleado->telefono }}</p>
        <p>Tipo de Sangre: {{ $empleado->tipo_sangre }}</p>
        <p>Dirección: {{ $empleado->direccion }}</p>
        <p>Contacto: {{ $empleado->contacto }}</p>
        <p>Creado en: {{ $empleado->creado_en }}</p>
        <p>Estado: {{ $empleado->estado }}</p>
        <p>Número CI: {{ $empleado->numero_ci }}</p>
        <p>Correo: {{ $empleado->correo }}</p>

        <!-- Mostrar la foto -->
        @if ($empleado->foto)
            <img src="{{ asset('storage/' . $empleado->foto) }}" alt="Foto del empleado">
        @else
            <p>No hay foto disponible.</p>
        @endif

        <!-- Formulario para actualizar datos del empleado -->
        <form action="{{ route('empleados.update', $empleado->id) }}" method="post" enctype="multipart/form-data">
            @csrf
            @method('put')

            <!-- Agrega los campos necesarios que deseas actualizar -->
            <div class="form-group">
                <label for="nuevo_campo">Nuevo Campo:</label>
                <input type="text" name="nuevo_campo" class="form-control">
            </div>

            <!-- Campo para cargar nueva foto -->
            <div class="form-group">
                <label for="nueva foto">Nueva Foto:</label>
                <input type="file" name="foto" class="form-control-file">
            </div>

            <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        </form>
    </div>
@endsection
