<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\EmpleadoController;



Route::get('/', function () {
    return view('welcome');
});
Route::get('/empleados', [EmpleadoController::class, 'index'])->name('empleados.index');
Route::get('/empleados/create', [EmpleadoController::class, 'create'])->name('empleados.create');
Route::post('/empleados', [EmpleadoController::class, 'store'])->name('empleados.store');
Route::get('/empleados/{empleado}', [EmpleadoController::class, 'show'])->name('empleados.show');
Route::put('/empleados/{empleado}', [EmpleadoController::class, 'update'])->name('empleados.update');
