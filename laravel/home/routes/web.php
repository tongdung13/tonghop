<?php

use App\Http\Controllers\CustomerController;
use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

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



Route::prefix('customers')->group(function () {
    Route::get('/', [CustomerController::class, 'index'])->name('customers.index');
    Route::get('/create', [CustomerController::class, 'create'])->name('customers.create');
    Route::post('/create', [CustomerController::class, 'store'])->name('customers.store');
    Route::get('/edit/{id}', [CustomerController::class, 'edit'])->name('customers.edit');
    Route::post('/edit/{id}', [CustomerController::class, 'update'])->name('customers.update');
    Route::get('/destroy/{id}', [CustomerController::class, 'destroy'])->name('customers.destroy');
    Route::post('/search', [CustomerController::class, 'search'])->name('customers.search');
    Route::get('/show/{id}', [CustomerController::class, 'show'])->name('customers.show');
});

Route::prefix('homes')->group(function () {
    Route::get('/', [HomeController::class, 'index'])->name('homes.index');
    Route::get('/create', [HomeController::class, 'create'])->name('homes.create');
    Route::post('/create', [HomeController::class, 'store'])->name('homes.store');
    Route::get('/edit/{id}', [HomeController::class, 'edit'])->name('homes.edit');
    Route::post('/edit/{id}', [HomeController::class, 'update'])->name('homes.update');
    Route::get('/destroy/{id}', [HomeController::class, 'destroy'])->name('homes.destroy');
    Route::post('/search', [HomeController::class, 'search'])->name('homes.search');
    Route::get('/show/{id}', [HomeController::class, 'show'])->name('homes.show');

});
