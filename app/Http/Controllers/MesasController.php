<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MesasController extends Controller
{  
     // Muestra todas las mesas
    public function index()
    {
         // Trae todas las mesas de la base
        $mesas = Mesa::all();

        // Devuelve una vista (si la tuvieras) o por ahora mostramos los datos
        return response()->json($mesas);
    }

    // Crear una nueva mesa
    public function store(Request $request)
    {
        // Validamos los datos que vienen del formulario
        $request->validate([
            'id_mesa' => 'required|integer|unique:mesas,id_mesa',
            'provincia' => 'required|string|max:100',
            'circuito' => 'required|string|max:100',
            'establecimiento' => 'required|string|max:100',
            'electores' => 'required|integer|min:1',
        ]);

        // Creamos una nueva mesa con los datos validados
        $mesa = Mesa::create($request->all());

        // Devolvemos confirmación
        return response()->json(['mensaje' => 'Mesa creada con éxito', 'mesa' => $mesa]);
    }

    // Edita / actualizar una mesa existente
    public function update(Request $request, $id)
    {
        // Buscamos la mesa por su ID
        $mesa = Mesa::findOrFail($id);

        // Actualizamos los campos con los nuevos datos
        $mesa->update($request->all());

        // Respondemos con la mesa actualizada
        return response()->json(['mensaje' => 'Mesa actualizada con éxito', 'mesa' => $mesa]);
    }

    //Elimina una mesa
    public function destroy($id)
    {
        // Buscamos la mesa y la eliminamos
        $mesa = Mesa::findOrFail($id);
        $mesa->delete();

        // Respondemos al usuario
        return response()->json(['mensaje' => 'Mesa eliminada correctamente']);
    }  
}