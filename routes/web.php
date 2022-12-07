<?php

use Illuminate\Support\Facades\Route; //url donde se encuentra el paquete Route | cuando usamos el USE hacemos referencia a una carpeta
//llamamos los controladores
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionsController;

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
    return view('home'); //aca hacemos referencia a la ruta que queremos navegar
})->middleware('auth'); //para solo Autenticar, que no podamos movernos de otra pestana que no sea inicio

Route::get('/register' ,[RegisterController::class , 'create'])
    ->middleware('guest')
    ->name('register.index');


Route::post('/register' ,[RegisterController::class , 'store'])->name('register.store');

Route::get('/login' ,[SessionsController::class , 'create'])
    ->middleware('guest') //para no salir a inicio de seccion
    ->name('login.index');

Route::post('/login' ,[SessionsController::class , 'store'])
    ->name('login.store');

Route::post('/login/destroy' ,[SessionsController::class , 'destroy'])
    ->middleware('guest')
    ->name('login.destroy');
