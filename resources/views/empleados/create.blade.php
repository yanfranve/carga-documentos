<!-- resources/views/empleados/create.blade.php -->

@extends('layouts.app')

@section('content')
    <div class="container">
        <h2>Crear Empleado</h2>

        @if(session('success'))
            <div class="alert alert-success" role="alert">
                {{ session('success') }}
            </div>
        @endif

        <form action="{{ route('empleados.store') }}" method="post">
            @csrf

            <div class="form-group">
                <label for="codigo">Código:</label>
                <input type="text" name="codigo" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="numero_ci">Número de CI:</label>
                <input type="text" name="numero_ci" class="form-control">
            </div>

            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input type="text" name="nombre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="apellido">Apellido:</label>
                <input type="text" name="apellido" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="correo">Correo:</label>
                <input type="email" name="correo" class="form-control" placeholder="correo@ejemplo.com">
            </div>

            <div class="form-group">
                <label for="genero">Género:</label>
                <select name="genero" class="form-control" required>
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                    <option value="Otro">Otro</option>
                </select>
            </div>

            <div class="form-group">
                <label for="fecha_nacimiento">Fecha de Nacimiento:</label>
                <input type="date" name="fecha_nacimiento" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="telefono">Teléfono:</label>
                <input type="text" name="telefono" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="tipo_sangre">Tipo de Sangre:</label>
                <input type="text" name="tipo_sangre" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="direccion">Dirección:</label>
                <textarea name="direccion" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="contacto">Contacto:</label>
                <input type="text" name="contacto" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="creado_en">Creado en:</label>
                <input type="text" name="creado_en" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="estado">Estado:</label>
                <select name="estado" class="form-control" required>
                    <option value="Activo">Activo</option>
                    <option value="Inactivo">Inactivo</option>
                </select>
            </div>
            <div class="form-group">
                <label for="foto">Foto:</label>
                <input type="file" name="foto" class="form-control-file">
            </div>



            <button type="submit" class="btn btn-primary">Guardar</button>
        </form>
    </div>
@endsection
