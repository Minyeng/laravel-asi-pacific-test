<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\ClientController;

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


Route::group(['prefix' => 'client'], function ($router) {
    Route::get('/', [ClientController::class, 'all']);
    Route::get('/{slug}', [ClientController::class, 'detail']);
    Route::post('/create', [ClientController::class, 'create']);
    Route::put('/update/{slug}', [ClientController::class, 'update']);
    Route::delete('/delete/{slug}', [ClientController::class, 'delete']);
});

