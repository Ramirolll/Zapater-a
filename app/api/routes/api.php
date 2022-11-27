<?php

use App\Http\Controllers\Api\ZapatoController;
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


Route:: controller(ZapatoController::class)->group(function(){
    Route::get('/zapatos', 'index');
    Route::post('/zapato', 'store');
    Route::get('/mostrar-zapato/{id}', 'show');
    Route::put('/editar-zapato/{id}', 'update');
    Route::get('/eliminar-zapato/{id}', 'destroy');

});
