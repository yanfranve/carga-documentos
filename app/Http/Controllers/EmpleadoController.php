<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Empleado;
use Illuminate\Support\Facades\Storage;

class EmpleadoController extends Controller
{
    public function create()
    {
        return view('empleados.create');
    }

    public function store(Request $request)
    {
        // Validación de los datos del formulario
        $request->validate([
            'codigo' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'genero' => 'required|in:Masculino,Femenino,Otro',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:20',
            'tipo_sangre' => 'required|string|max:10',
            'direccion' => 'required|string',
            'contacto' => 'required|string|max:255',
            'creado_en' => 'required|string|max:255',
            'estado' => 'required|in:Activo,Inactivo',
            'numero_ci' => 'nullable|string|max:255',
            'correo' => 'nullable|email',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Manejar la carga de la foto solo si se proporciona un nuevo archivo
        if ($request->hasFile('foto')) {
            // Guardar la nueva foto y actualizar el campo 'foto' en el request
            $fotoPath = $request->file('foto')->store('fotos', 'public');
            $request->merge(['foto' => $fotoPath]);
        }

        // Crear un nuevo empleado
        Empleado::create($request->all());

        return redirect()->route('empleados.create')->with('success', 'Empleado creado exitosamente.');
    }

    public function index()
    {
        $empleados = Empleado::all();

        return view('empleados.index', compact('empleados'));
    }

    public function show(Empleado $empleado)
    {
        return view('empleados.show', compact('empleado'));
    }

    public function update(Request $request, Empleado $empleado)
    {
        // Validación de los datos del formulario
        $request->validate([
            'codigo' => 'required|string|max:255',
            'nombre' => 'required|string|max:255',
            'apellido' => 'required|string|max:255',
            'genero' => 'required|in:Masculino,Femenino,Otro',
            'fecha_nacimiento' => 'required|date',
            'telefono' => 'required|string|max:20',
            'tipo_sangre' => 'required|string|max:10',
            'direccion' => 'required|string',
            'contacto' => 'required|string|max:255',
            'creado_en' => 'required|string|max:255',
            'estado' => 'required|in:Activo,Inactivo',
            'numero_ci' => 'nullable|string|max:255',
            'correo' => 'nullable|email',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        // Manejar la carga de la foto solo si se proporciona un nuevo archivo
        if ($request->hasFile('foto')) {
            // Eliminar la foto anterior si existe
            if ($empleado->foto) {
                Storage::disk('public')->delete($empleado->foto);
            }

            // Guardar la nueva foto y actualizar el campo 'foto' en la base de datos
            $fotoPath = $request->file('foto')->store('fotos', 'public');
            $empleado->update(['foto' => $fotoPath]);
        }

        // Actualizar otros campos del empleado si es necesario
        $empleado->update($request->except('foto'));

        return redirect()->route('empleados.show', $empleado->id)->with('success', 'Empleado actualizado exitosamente.');
    }
}
