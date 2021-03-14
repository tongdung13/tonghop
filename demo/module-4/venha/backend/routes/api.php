<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductController;

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

Route::group(['prefix' => 'products'], function () {
    Route::get('', [ProductController::class, 'index']);
    Route::post('', [ProductController::class, 'store']);
    Route::put('update/{id}', [ProductController::class, 'update']);
    Route::delete('destroy/{id}', [ProductController::class, 'destroy']);
    Route::get('show/{id}', [ProductController::class, 'show']);
});
