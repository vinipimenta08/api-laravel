<?php

use App\Http\Controllers\Api\LiveloController;
use App\Http\Controllers\Api\TesteController;
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

/* Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
}); */


Route::get('/', function (){
    return ['status' => true];
});

Route::get('/teste', function (){
    return ['status' => true];
});


Route::get('/buscaCep', [TesteController::class, 'index']);
Route::get('/buscaCep/{cep}', [TesteController::class, 'buscaCep']);
Route::post('/buscaCep/', [TesteController::class, 'buscaCepPost']);




Route::get('/livelo', [LiveloController::class, 'index']);