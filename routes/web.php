<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProductoController;


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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/lista', [ProductoController::class, 'index'])->name('lista.index');
Route::get('/alta', [ProductoController::class, 'create'])->name('producto.create');
Route::get('/lista/{id}', [ProductoController::class, 'show'])->name('producto.show');

Route::post('/producto', [ProductoController::class, 'store'])->name('producto.store');
