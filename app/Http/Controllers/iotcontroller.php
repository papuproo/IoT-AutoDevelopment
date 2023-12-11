<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;

class iotcontroller extends Controller
{
    public function form(){
        request()->validate([
            'name' => 'required',
            'email' => 'required|email',
            'subject' => 'required',
            'content' => 'required|min:3'
        ]);
        return 'Datos validados';
    }

    public function enviarDatosDesdeESP(Request $request)
    {
        // Validar y procesar los datos
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'required|string',
        ]);

        // Crear el proyecto en la base de datos
        $project = Project::create($validatedData);

        // Puedes devolver una respuesta si es necesario
        //return response()->json(['mensaje' => 'Proyecto registrado con éxito']);
    }
    }


