<?php

use App\Http\Controllers\UsuarioController;
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

Route::get('/usuario', function () {
    return view('usuario',['usuario' => 'Doull', 'pass' => '123']);
});

Route::get('/subviews', function () {
    return view('layout.main');
});

Route::get('/listado', [UsuarioController::class,'index']);
