<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MesasController;
use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\ListasController;
use App\Http\Controllers\ResultadosController;

Route::get('/test', function() {
    return response()->json(['mensaje' => 'API funcionando correctamente']);
});

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


Route::get('/candidatos', [CandidatosController::class, 'index']);
Route::post('/candidatos', [CandidatosController::class, 'store']);
Route::get('/candidatos/{id}', [CandidatosController::class, 'show']);
Route::put('/candidatos/{id}', [CandidatosController::class, 'update']);
Route::delete('/candidatos/{id}', [CandidatosController::class, 'destroy']);

Route::get('/candidatos/cargo/{cargo}', [CandidatosController::class, 'porCargo']);
Route::get('/candidatos/lista/{idLista}', [CandidatosController::class, 'porLista']);
Route::get('/candidatos/provincia/{idProvincia}', [CandidatosController::class, 'porProvincia']);
Route::get('/candidatos/provincia/{idProvincia}/cargo/{cargo}', [CandidatosController::class, 'porProvinciaYCargo']);
Route::get('/candidatos/{id}/votos', [CandidatosController::class, 'totalVotos']);


Route::post('/candidatos/importar', [CandidatosController::class, 'importar']);


Route::get('/mesas', [MesasController::class, 'index']);
Route::post('/mesas', [MesasController::class, 'store']);
Route::get('/mesas/{id}', [MesasController::class, 'show']);
Route::put('/mesas/{id}', [MesasController::class, 'update']);
Route::delete('/mesas/{id}', [MesasController::class, 'destroy']);


Route::get('/mesas/provincia/{idProvincia}', [MesasController::class, 'porProvincia']);
Route::get('/mesas/circuito/{circuito}', [MesasController::class, 'porCircuito']);
Route::get('/mesas/establecimiento/{establecimiento}', [MesasController::class, 'porEstablecimiento']);
Route::post('/mesas/rango', [MesasController::class, 'porRango']);
Route::get('/mesas/{id}/telegramas', [MesasController::class, 'telegramas']);
Route::get('/mesas/{id}/estadisticas', [MesasController::class, 'estadisticas']);


Route::post('/mesas/importar', [MesasController::class, 'importar']);


Route::get('/listas', [ListasController::class, 'index']);
Route::post('/listas', [ListasController::class, 'store']);
Route::get('/listas/{id}', [ListasController::class, 'show']);
Route::put('/listas/{id}', [ListasController::class, 'update']);
Route::delete('/listas/{id}', [ListasController::class, 'destroy']);

Route::get('/listas/provincia/{idProvincia}', [ListasController::class, 'porProvincia']);
Route::get('/listas/cargo/diputados', [ListasController::class, 'conDiputados']);
Route::get('/listas/cargo/senadores', [ListasController::class, 'conSenadores']);
Route::get('/listas/{id}/candidatos', [ListasController::class, 'candidatos']);
Route::get('/listas/{id}/resultados', [ListasController::class, 'resultados']);
Route::post('/listas/importar', [ListasController::class, 'importar']);

Route::get('/resultados', [ResultadosController::class, 'index']);
Route::post('/resultados', [ResultadosController::class, 'store']);
Route::get('/resultados/{id}', [ResultadosController::class, 'show']);
Route::put('/resultados/{id}', [ResultadosController::class, 'update']);
Route::delete('/resultados/{id}', [ResultadosController::class, 'destroy']);

Route::get('/resultados/provincia/{idProvincia}', [ResultadosController::class, 'porProvincia']);
Route::get('/resultados/telegrama/{idTelegrama}', [ResultadosController::class, 'porTelegrama']);
Route::get('/resultados/cargo/{cargo}', [ResultadosController::class, 'porCargo']);
Route::get('/resultados/resumen/nacional', [ResultadosController::class, 'resumenNacional']);
Route::get('/resultados/exportar', [ResultadosController::class, 'exportar']);
Route::post('/resultados/importar', [ResultadosController::class, 'importar']);