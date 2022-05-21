<?php

use Illuminate\Support\Facades\Route;
use App\Models\Interes;
use App\Models\Perfiles;
use App\Models\Favoritos;
use App\Models\Bloqueados;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/interes', function () {
    return Interes::All();
});

Route::get('/perfiles', function () {
    return Perfiles::All();
});

Route::get('/favoritos', function () {
    return Favoritos::All();
});

Route::get('/bloqueados', function () {
    return Bloqueados::All();
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
