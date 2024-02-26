<?php

use App\Http\Controllers\BandController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HelloWorldController;

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

// Route::get('hello/{name}', function($name){
//     return "hello " . $name;
// });

// Route::get('hello-post/{name}', [HelloWorldController::class, 'hello']);

Route::get('bands', [BandController::class, 'getAll']);

Route::post('bands/store', [BandController::class, 'store']);

Route::get('bands/{id}', [BandController::class, 'getById']);

Route::get('bands/gender/{gender}', [BandController::class, 'getByGender']);

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
