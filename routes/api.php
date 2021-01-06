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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('/axxess_api', [\App\Http\Controllers\AxxessController::class, 'axxessapi']);
Route::get('axxessurl', [\App\Http\Controllers\AxxessController::class, 'showapi']);
Route::get('axxessurl/{id}', [\App\Http\Controllers\AxxessController::class, 'show']);

/* CRUD API */
Route::get('/testing', [\App\Http\Controllers\ApiController::class, 'create']);
