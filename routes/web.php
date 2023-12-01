<?php

use App\Http\Controllers\Admin\HomeController;
use App\Http\Controllers\Area;
use App\Http\Controllers\Libreria;
use App\Http\Controllers\Libro;
use Database\Seeders\libros;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('index');
});



Route::get('/dashboard', [HomeController::class,'index'] );

Route::get('/gaon/libros', [Libro::class, 'mostrarLibros']);


Route::get('/gaon/areas', [Area::class, 'mostrarAreas']);


Route::get('/gaon/precentacion', [Libreria::class, 'mostrarPresentacion']);
