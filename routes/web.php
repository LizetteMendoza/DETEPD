<?php

use App\Http\Controllers\ApplicationController;
use App\Http\Controllers\FormaController;
use Illuminate\Support\Facades\DB;
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

Route::get('/', function () {
    return view('welcome');
});

//Esta ruta integra todos los metodos estandar en el controlador de la solicitud (CRUD), 
//si se agregan se tiene que agregar su ruta idividual
Route::resource('/solicitud', ApplicationController::class);

//Ruta de sesiones
Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified'
])->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
});
