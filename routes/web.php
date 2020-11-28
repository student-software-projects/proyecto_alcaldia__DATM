<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\localidadesController;
use App\Http\Controllers\equiposController;
use App\Http\Controllers\jugadoresController;

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
//INDEX
Route::get('/', function () {
    return view('index');
});

//LOCALIDADES
Route::get('localidades',[localidadesController::class,'index'])->name('localidades.index');
Route::get('localidades/create',[localidadesController::class,'create'])->name('localidades.create');
Route::post('localidades',[localidadesController::class,'store'])->name('localidades.store');
Route::get('localidades/edit/{id}',[localidadesController::class,'edit'])->name('localidades.edit');
Route::put('localidades/{id}',[localidadesController::class,'update'])->name('localidades.update');
Route::get('localidades/show/{id}',[localidadesController::class,'show'])->name('localidades.show');
Route::delete('localidades/{id}',[localidadesController::class,'delete'])->name('localidades.delete');

//EQUIPOS
Route::get('equipos',[equiposController::class,'index'])->name('equipos.index');
Route::get('equipos/create',[equiposController::class,'create'])->name('equipos.create');
Route::post('equipos',[equiposController::class,'store'])->name('equipos.store');
Route::get('equipos/edit/{id}',[equiposController::class,'edit'])->name('equipos.edit');
Route::put('equipos/{id}',[equiposController::class,'update'])->name('equipos.update');
Route::get('equipos/show/{id}',[equiposController::class,'show'])->name('equipos.show');
Route::delete('equipos/{id}',[equiposController::class,'delete'])->name('equipos.delete');
//Route::get('equipos/tequipo/{id}',[equiposController::class,'tequipo'])->name('equipos.tequipo');

//JUGADORES
Route::get('jugadores',[jugadoresController::class,'index'])->name('jugadores.index');
Route::get('jugadores/create',[jugadoresController::class,'create'])->name('jugadores.create');
Route::post('jugadores',[jugadoresController::class,'store'])->name('jugadores.store');
Route::get('jugadores/edit/{id}',[jugadoresController::class,'edit'])->name('jugadores.edit');
Route::put('jugadores/{id}',[jugadoresController::class,'update'])->name('jugadores.update');
Route::get('jugadores/show/{id}',[jugadoresController::class,'show'])->name('jugadores.show');
Route::delete('jugadores/{id}',[jugadoresController::class,'delete'])->name('jugadores.delete');
