<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
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
Route::get('/', [HomeController::class, 'home'])->name('home');
Route::get('/bpc-loas', [HomeController::class, 'bpcloas'])->name('bpcloas');
Route::post('/email', [HomeController::class, 'email'])->name('email');