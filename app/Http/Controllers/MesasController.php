<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Telegrama;
use App\Models\Mesa;

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
    // Ingresar resultados de una mesa (votos por lista y cargo)
public function storeTelegrama(Request $request) {
    $request->validate([
        'id_mesa' => 'required|integer|exists:mesas,id_mesa',
        'lista' => 'required|string|max:100',
        'votos_diputados' => 'required|integer|min:0',
        'votos_senadores' => 'required|integer|min:0',
        'blancos' => 'required|integer|min:0',
        'nulos' => 'required|integer|min:0',
        'recurridos' => 'required|integer|min:0'
    ]);

    $mesa = Mesa::findOrFail($request->id_mesa);
    $totalVotos = $request->votos_diputados + $request->votos_senadores +
                  $request->blancos + $request->nulos + $request->recurridos;

    if ($totalVotos > $mesa->electores) {
        return response()->json(['error' => 'La suma de votos supera la cantidad de electores'], 422);
    }

    $telegrama = Telegrama::create($request->all());
    return response()->json(['mensaje' => 'Telegrama registrado', 'telegrama' => $telegrama]);
    }
}