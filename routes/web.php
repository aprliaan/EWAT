<?php

use App\Http\Controllers\LaporanHarianController;
use App\Http\Controllers\ProfileController;
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


Route::get('/dashboard', [LaporanHarianController::class, 'index'])->middleware(['auth', 'verified'])->name('dashboard');
Route::resource('/laporan-harian', LaporanHarianController::class);

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::group(['prefix' => 'users', 'active_menu' => 'user'], function() {
    //user related area
    Route::get('{id}', 'UserController@detail');
    Route::get('{id}/edit', 'UserController@editForm');
    Route::post('{id}/edit', 'UserController@editSave');
});

Route::get('/', 'App\Http\Controllers\welcome@index');


require __DIR__.'/auth.php';
