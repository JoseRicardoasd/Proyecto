<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\añadirLibroController;

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

Route::get('/',function(){
    return view('welcome');
});

Route::view('/home', 'mostrarLibro')->name('home');


//ruta para añadir libros
Route::post('/añadirLibro',[añadirLibroController::class,'store'])->name('añadirLibro');

//ruta para mostrar libros
Route::get('/añadirLibro',[añadirLibroController::class,'index'])->name('libros.index');

//ruta mostrar elemento individual
Route::get('/añadirLibro/{id}',[añadirLibroController::class,'show'])->name('libros.show');


//
Route::delete('/añadirLibro/{id}',[añadirLibroController::class,'destroy'])->name('libros.delete');

//
Route::get('/añadirLibro/{id}/edit',[añadirLibroController::class,'edit'])->name('libros.edit');

//
Route::put('/añadirLibro/{id}',[añadirLibroController::class,'update'])->name('libros.update');
