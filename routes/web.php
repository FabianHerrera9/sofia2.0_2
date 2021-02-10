<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\FichaController;
use App\Http\Controllers\ProgramaController;
use App\Http\Controllers\AprendizController;
use App\Http\Controllers\InstructorController;

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
//index
Route::get('/', function () {return view('index.index');
});

//Fichas
Route::get('ficha',[FichaController::class,'index'])->name('ficha.index');
Route::get('ficha/create',[FichaController::class,'create'])->name('ficha.create');
Route::post('ficha',[FichaController::class,'store'])->name('ficha.store');
Route::get('ficha/edit/{id}',[FichaController::class,'edit'])->name('ficha.edit');
Route::put('ficha/{id}',[FichaController::class,'update'])->name('ficha.update');

//Programas de formacion
Route::get('programa',[ProgramaController::class,'index'])->name('programa.index');
Route::get('programa/create',[ProgramaController::class,'create'])->name('programa.create');
Route::post('programa',[ProgramaController::class,'store'])->name('programa.store');
Route::get('programa/edit/{id}',[ProgramaController::class,'edit'])->name('programa.edit');
Route::put('program/{id}', [ProgramaController::class,'update'])->name('programa.update');

//Aprendices
Route::get('aprendiz',[AprendizController::class,'index'])->name('aprendiz.index');
Route::get('aprendiz/create',[AprendizController::class,'create'])->name('aprendiz.create');
Route::post('aprendiz',[AprendizController::class,'store'])->name('aprendiz.store');
Route::get('aprendiz/edit/{id}',[AprendizController::class,'edit'])->name('aprendiz.edit');
Route::put('aprendiz/{id}', [AprendizController::class,'update'])->name('aprendiz.update');

//Instructores
Route::get('instructor',[InstructorController::class,'index'])->name('instructor.index');
Route::get('instructor/create',[InstructorController::class,'create'])->name('instructor.create');
Route::post('instructor',[InstructorController::class,'store'])->name('instructor.store');
Route::get('instructor/edit/{id}',[InstructorController::class,'edit'])->name('instructor.edit');
Route::put('instructor/{id}', [InstructorController::class,'update'])->name('instructor.update');
