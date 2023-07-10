<?php

use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ProfesionalController;
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
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('servicios/mostrar',[ServicioController::class,'mostrar']);
Route::get('servicios/detalle/{id}',[ServicioController::class,'detalle']);

Route::get('profesional',[ProfesionalController::class,'mostrar']);
Route::post('profesional/registrar',[ProfesionalController::class,'registrar']);
Route::get('profesional/servicios',[ProfesionalController::class,'servicios']);
Route::get('profesional/registroservicio',function(){
    return view('registroservicio');
});

Route::get('profesional/mostrarservicios/{id}',[ProfesionalController::class,'mostrarservicios']);
