<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ParticipanteController;

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

Route::get('painel/inscritos', [ParticipanteController::class, 'index'])
    ->name('participantes.index');
Route::get('cadastro/participantes', [ParticipanteController::class, 'create'])
    ->name('participantes.criar');
Route::post('cadastro/participantes', [ParticipanteController::class, 'store']);
