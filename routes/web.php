<?php
use Illuminate\Auth\Middleware\Authenticate;
use App\Http\Controllers\ServicioController;
use App\Http\Controllers\ProfesionalController;
use App\Http\Controllers\ReservaController;
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
Route::post('profesional/registroservicio/registro',[ServicioController::class,'registrar'])->name('registroservicio');

Route::get('profesional/mostrarservicios/{profesional_id}',[ServicioController::class,'mostrarservicios']);
// /{profesional_id}
Route::post('servicios/mostrar/reservas',[ReservaController::class,'reserva'])->name('reserva');
Route::get('servicios/reservas/carrito',[ReservaController::class,'mostrar']);