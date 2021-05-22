<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DepartamentoController;

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
    return view('template/main/index');
});
Route::get('departamento/graphic',[DepartamentoController::class,'graphic'])->name('cliente.graphic');
