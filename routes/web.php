<?php

use Illuminate\Support\Facades\Route,
    App\Http\Controllers\PontoController;

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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::group(['prefix'=>'ponto', 'as'=>'ponto.', 'middleware'=>['auth']], function(){
    Route::get('/index', [App\Http\Controllers\PontoController::class, 'index'])->name('index');
    Route::get('create', [App\Http\Controllers\PontoController::class, 'create'])->name('create');
    Route::post('store', [App\Http\Controllers\PontoController::class, 'store'])->name('store');
    Route::get('{ponto}/edite', [App\Http\Controllers\PontoController::class, 'edite'])->name('edite');
    Route::put('{ponto}/update', [App\Http\Controllers\PontoController::class, 'update'])->name('update');
    Route::get('{ponto}/show', [App\Http\Controllers\PontoController::class, 'show'])->name('show');
    Route::get('{ponto}/destroy', [App\Http\Controllers\PontoController::class, 'destroy'])->name('destroy');
});
