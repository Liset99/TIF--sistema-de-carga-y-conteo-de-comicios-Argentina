<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CandidatosController extends Controller
{
    // Muestra todos los candidatos
    public function index()
    {  
// Muestra todos los candidatos 
 { $candidatos = Candidato::all(); 
    return response()->json($candidatos); }
    }

    // Crea un nuevo candidato
    public function store(Request $request)
    {
        $request->validate([
            'nombre' => 'required|string|max:100',
            'cargo' => 'required|string|max:50',
            'provincia' => 'required|string|max:100',
            'lista' => 'required|string|max:100',
            'orden_en_lista' => 'required|integer|min:1',
        ]);

        $candidato = Candidato::create($request->all());

        return response()->json(['mensaje' => 'Candidato creado con éxito', 'candidato' => $candidato]);
    }

    // Actualiza un candidato existente
    public function update(Request $request, $id)
    {
        $candidato = Candidato::findOrFail($id);
        $candidato->update($request->all());

        return response()->json(['mensaje' => 'Candidato actualizado con éxito', 'candidato' => $candidato]);
    }

    // Elimina un candidato
    public function destroy($id)
    {
        $candidato = Candidato::findOrFail($id);
        $candidato->delete();

        return response()->json(['mensaje' => 'Candidato eliminado correctamente']);
    }
    // Obtener candidatos por provincia y cargo
    public function porProvinciaYCargo($provincia, $cargo) {
        $candidatos = Candidato::where('provincia', $provincia)
                             ->where('cargo', $cargo)
                             ->orderBy('orden_en_lista')
                             ->get();
        return response()->json($candidatos);
}

// Calcular votos totales de un candidato (requiere relación con Telegrama)
    public function totalVotos($idCandidato) {
         $candidato = Candidato::findOrFail($idCandidato);
         $votos = $candidato->telegramas()->sum('votos');
         
         return response()->json([
        'candidato' => $candidato->nombre,
        'total_votos' => $votos
    ]);
}
}
