<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CandidatosController;
use App\Http\Controllers\MesasController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return 'Sistema de Carga y Conteo de Comicios Argentina 2025';
});
// Rutas de prueba para los controladores
Route::get('/candidatos', [CandidatosController::class, 'index']);
Route::get('/mesas', [MesasController::class, 'index']);