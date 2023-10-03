<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArsipController;

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

Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('data', DataController::class);
Route::resource('arsip', ArsipController::class);

Route::get('edit/{id}', [DataController::class, 'edit'])->name('data.edit');
Route::post('edit/update/{id}', [DataController::class, 'update'])->name(
    'data.update'
);
Route::get('detail/{id}', [DataController::class, 'show'])->name('data.show');
Route::get('delete/{id}', [DataController::class, 'destroy'])->name(
    'data.delete'
);
