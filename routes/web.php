<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;

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

// Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/', [ItemController::class, 'index'])->name('items.index');
Route::get('/items/create', [ItemController::class, 'create'])->name('items.create')->middleware('auth');
Route::post('/items',[ItemController::class,'store'])->name('items.store');
Route::get('/items/{id}', [ItemController::class,'show'])->name('items.show');
Route::get('/items/{id}/edit', [ItemController::class, 'edit'])->name('items.edit')->middleware('auth');
Route::put('/items{id}', [ItemController::class, 'update'])->name('items.update')->middleware('auth');
Route::delete('/items/{item}',[ItemController::class, 'destroy'])->name('items.destroy')->middleware('auth');
Route::post('/logout', [ItemController::class, 'logout'])->name('logout');
Route::get('/dashboard', [ItemController::class, 'dashboard'])->name('dashboard')->middleware('auth');


Route::get('/register', [ItemController::class, 'register'])->name('register');
Route::get('/login', [ItemController::class, 'login'])->name('login');