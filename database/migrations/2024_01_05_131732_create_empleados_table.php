<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('empleados', function (Blueprint $table) {
            $table->id();
            $table->string('codigo');
            $table->string('numero_ci');
            $table->string('nombre');
            $table->string('apellido');
            $table->string('correo')->unique();
            $table->string('genero');
            $table->date('fecha_nacimiento');
            $table->string('telefono');
            $table->string('tipo_sangre');
            $table->text('direccion');
            $table->string('contacto');
            $table->string('creado_en');
            $table->string('actualizado_en')->nullable();
            $table->string('estado');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('empleados');
    }
};
