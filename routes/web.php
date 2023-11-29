<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AtivoController;
use App\Http\Controllers\CarteiraController;
use App\Http\Controllers\DashboardController;
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

Route::get('/', function () {
    return view('auth.login');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    //Dashboard
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

    //Carteiras
    Route::get('/carteiras', [CarteiraController::class,'create'])->name('carteiras');

    //Ativos
    Route::controller(AtivoController::class)->prefix('ativos')->group(function() {
        Route::get('/ativos','create')->name('ativo.create');
        Route::post('/ativos','store' )->name('ativo.create');
        Route::put('update/{id}','update')->name('ativo.update');
        Route::delete('destroy/{id}','destroy')->name('ativo.destroy');
    });

});

require __DIR__.'/auth.php';
