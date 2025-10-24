<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
use App\Http\Controllers\MesasController;
use App\Http\Controllers\CandidatoController;

// Rutas para Mesas
Route::get('/mesas', [MesasController::class, 'index']);
Route::post('/mesas', [MesasController::class, 'store']);
Route::put('/mesas/{id}', [MesasController::class, 'update']);
Route::delete('/mesas/{id}', [MesasController::class, 'destroy']);

// Rutas para Candidatos
Route::get('/candidatos', [CandidatoController::class, 'index']);
Route::post('/candidatos', [CandidatoController::class, 'store']);
Route::put('/candidatos/{id}', [CandidatoController::class, 'update']);
Route::delete('/candidatos/{id}', [CandidatoController::class, 'destroy']);
