<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CategoriaController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('categoria', [CategoriaController::class, 'getCategory']);
Route::get('categoria/{id}', [CategoriaController::class, 'getCategoryById']);
Route::post('agregar-categoria', [CategoriaController::class, 'insertCategoria']);
Route::put('editar-categoria/{id}', [CategoriaController::class, 'updateCategoria']);
Route::delete('eliminar-categoria/{id}', [CategoriaController::class, 'deleteCategoria']);
