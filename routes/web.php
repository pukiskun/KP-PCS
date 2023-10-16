<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DataController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ArsipController;
use App\Http\Controllers\MobilController;
use App\Http\Controllers\PrintController;
use App\Http\Controllers\ProfileController;

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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware(['auth'])->group(function () {
    Route::get('/home', [HomeController::class, 'index'])->name('home');

    //Profile
    Route::get('/profile', [ProfileController::class, 'index'])->name(
        'profile'
    );
    Route::post('/profile/update', [ProfileController::class, 'update'])->name(
        'profile.update'
    );
    Route::get('/profile/edit', [ProfileController::class, 'edit'])->name(
        'profile.edit'
    );
    Route::get('/profile/update-password', [
        ProfileController::class,
        'editPassword',
    ])->name('profile.editPassword');
    Route::post('/profile/update-password', [
        ProfileController::class,
        'updatePassword',
    ])->name('profile.updatePassword');

    // Data
    Route::resource('data', DataController::class);
    Route::get('edit/{id}', [DataController::class, 'edit'])->name('data.edit');
    Route::post('edit/update/{id}', [DataController::class, 'update'])->name(
        'data.update'
    );
    Route::get('detail/{id}', [DataController::class, 'show'])->name(
        'data.show'
    );
    Route::get('delete/{id}', [DataController::class, 'destroy'])->name(
        'data.delete'
    );

    // Print Barcode
    Route::get('download/{id}', [PrintController::class, 'download']);

    // Pemeriksaan Kendaraan
    Route::resource('mobil', MobilController::class);
    Route::get('detail-mobil/{id}', [MobilController::class, 'show'])->name(
        'mobil.show'
    );
    Route::get('edit-mobil/{id}', [MobilController::class, 'edit'])->name(
        'mobil.edit'
    );
    Route::post('edit-mobil/update/{id}', [
        MobilController::class,
        'update',
    ])->name('mobil.update');
});

Auth::routes();
