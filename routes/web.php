<?php

use App\Http\Controllers\CategoriasController;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\NoticiasController;
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

Route::get('/', [IndexController::class, 'home'])->name('home');

Route::get('/quem-somos', [IndexController::class, 'quemsomos'])->name('quemsomos');

Route::get('/noticia/{id}', [NoticiasController::class, 'noticia'])->name('noticia');

Route::get('/categorias/{id}', [CategoriasController::class, 'categorias'])->name('categorias');