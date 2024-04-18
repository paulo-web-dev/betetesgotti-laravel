<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\NoticiasController;
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

// Route::get('/', function () {
//     return view('welcome');
// });

//ROTAS REFERENTES AO SITE INSTITUCIONAL
Route::get('/a', [HomeController::class, 'home'])->name('home'); 
Route::get('/bpc-loas', [HomeController::class, 'bpcloas'])->name('bpcloas');
Route::get('/noticias', [HomeController::class, 'noticias'])->name('noticias');
Route::get('/noticia/{noticia}', [HomeController::class, 'noticia'])->name('noticia');
Route::post('/email', [HomeController::class, 'email'])->name('email');

//Rotas do Painel
Route::get('/home', [NoticiasController::class, 'home'])->name('home');
Route::get('/painel/noticias', [NoticiasController::class, 'noticias'])->name('noticias-painel');
Route::get('/painel/form/noticia', [NoticiasController::class, 'formNoticia'])->name('form-noticias');
Route::post('/painel/cad/noticia', [NoticiasController::class, 'cadNoticia'])->name('cad-noticias');
Route::get('/painel/info/noticia/{noticia}', [NoticiasController::class, 'infoNoticia'])->name('info-noticia');
Route::post('/painel/upd/noticia', [NoticiasController::class, 'updNoticia'])->name('upd-noticias');
Auth::routes();

