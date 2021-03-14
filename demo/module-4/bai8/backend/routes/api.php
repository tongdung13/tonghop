<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\OrderController;
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

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::group([
    'middleware' => 'api',
    'prefix' => 'auth'
], function ($router) {

});

Route::post('register', [UserController::class, 'register']);
Route::post('login', [UserController::class, 'login']);
Route::post('logout', [UserController::class, 'logout']);


Route::group(['middleware' => ['jwt']], function() {



});

Route::prefix('orders')->group(function () {
    Route::get('', [OrderController::class, 'index']);
    Route::post('', [OrderController::class, 'store']);
    Route::get('show/{id}', [OrderController::class, 'show']);
    Route::put('edit/{id}', [OrderController::class, 'edit']);
    Route::post('destroy/{id}', [OrderController::class, 'destroy']);
});

Route::prefix('customers')->group(function () {
    Route::get('', [CustomerController::class, 'index']);
    Route::post('', [CustomerController::class, 'store']);
    Route::get('show/{id}', [CustomerController::class, 'show']);
    Route::put('edit/{id}', [CustomerController::class, 'edit']);
    Route::post('destroy/{id}', [CustomerController::class, 'destroy']);
});

