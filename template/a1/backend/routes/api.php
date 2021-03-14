<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\UserController;
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



Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {
    Route::post('register', [UserController::class, 'register']);
    Route::post('login', [UserController::class, 'login']);
    Route::post('logout', [UserController::class, 'logout']);

});

Route::group(['middleware' => ['guest']], function () {
    Route::get('user-profile', [UserController::class, 'userProfile']);
    Route::get('/user', [UserController::class, 'getAuthenticatedUser']);
    Route::prefix('products')->group(function() {
        Route::get('', [ProductController::class, 'index']);
        Route::post('', [ProductController::class, 'store']);
        Route::get('show/{id}', [ProductController::class, 'show']);
        Route::put('edit/{id}', [ProductController::class, 'edit']);
        Route::delete('destroy/{id}', [ProductController::class, 'destroy']);
    });

});


