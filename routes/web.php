<?php

use Illuminate\Support\Facades\Route;
Use App\Http\Controllers\ProductoController;

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

Route::view("/", "home")->name('home');

Route::view('about','about')->name('about');

Route::view('contact','contact')->name('contact');



Route::get('productos', [ProductoController::class, 'index'])->name('productos.index');

Route::get('productos/create', [ProductoController::class, 'create'])->name('productos.create');

Route::post('productos', [ProductoController::class, 'store'])->name('productos.store');



Route::get('productos/edit/{producto}', [ProductoController::class, 'edit'])->name('edit');

Route::put('productos/{producto}', [ProductoController::class, 'update'])->name('productos.update');

Route::delete('productos/{producto}', [ProductoController::class, 'destroy'])->name('delete');