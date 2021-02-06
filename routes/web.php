<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\FichaController;
use App\Http\Controllers\ProgramaController;

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

Route::get('ficha',[FichaController::class,'index'])->name('ficha.index');
Route::get('ficha/create',[FichaController::class,'create'])->name('ficha.create');
Route::post('ficha',[FichaController::class,'store'])->name('ficha.store');
Route::get('ficha/edit/{id}',[FichaController::class,'edit'])->name('ficha.edit');
Route::put('ficha/{id}',[FichaController::class,'update'])->name('ficha.update');

Route::get('programa',[ProgramaController::class,'index'])->name('programa.index');
Route::get('programa/create',[ProgramaController::class,'create'])->name('programa.create');
Route::post('programa',[ProgramaController::class,'store'])->name('programa.store');
