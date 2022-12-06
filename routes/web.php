<?php

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

Route::get('/', [\App\Http\Controllers\ProjetsController::class, 'index'])->name('home');
Route::get('/projets', [\App\Http\Controllers\ProjetsController::class, 'index'])->name('projets.index');

Route::get('/projets/{projet}/{slug}.html', [\App\Http\Controllers\ProjetsController::class, 'show'])
    ->where('id', '[1-9][0-9]*')
    ->name('projets.show');
