<?php

use App\Http\Controllers\{
    Controller,
    UserController
};

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


Route::get('/', [Controller::class, 'login'])->name('login');
Route::get('/cadastro', [Controller::class, 'cadastro'])->name('cadastro');
Route::get('/transacao', [Controller::class, 'transacao'])->name('transacao');
Route::get('/investidor', [Controller::class, 'investidor'])->name('investidor');
Route::get('/carteira', [Controller::class, 'carteira'])->name('carteira');




 


