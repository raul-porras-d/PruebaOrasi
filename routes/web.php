<?php

use App\Models\Pregunta;
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


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/prueba', 'App\Http\Controllers\Admin\EncuestaController@create');
Route::post('/prueba', 'App\Http\Controllers\Admin\EncuestaController@store')->name('guardar');

Route::get('/prueba-respuesta', function () {
    $pregunta = Pregunta::find(2);
    return $pregunta->respuestas;
});
