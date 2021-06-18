<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\TodoController;

use App\Http\Controllers\Auth\AuthController;

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

Route::get('/home', [TodoController::class, 'home'])->name('home');

Route::post('/store',[TodoController::class, 'store'])->name('store');

Route::get('/edit/{todo}',[TodoController::class,'edit'])->name('edit');

Route::put('/update/{todo}',[TodoController::class, 'update'])->name('update');

Route::delete('/delete/{todo}',[TodoController::class,'delete'])->name('destroy');

Route::get('/register', [AuthController::class,'register'])->name('register');

Route::post('/storeUser', [AuthController::class,'storeUser'])->name('storeUser');

Route::get('/login', [AuthController::class,'login'])->name('login');

Route::post('/login', [AuthController::class,'authenticate'])->name('authenticate');

Route::get('logout', [AuthController::class,'logout'])->name('logout');
