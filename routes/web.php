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

    //Dashboard
    Route::get('/teste', function () {
        return view('teste');
    });

    //Carteiras
    Route::get('/carteiras', [CarteiraController::class,'create'])->name('carteiras');
    Route::post('/carteiras', [CarteiraController::class, 'store'])->name('carteiras');
    Route::controller(CarteiraController::class)->prefix('carteiras')->group(function() {
        Route::delete('destroy/{id}','destroy')->name('carteira.destroy');
    });

    //Ativos
    Route::get('/ativos', [AtivoController::class,'create'])->name('ativos');
    Route::post('/ativos', [AtivoController::class, 'store'])->name('ativos');
    Route::controller(AtivoController::class)->prefix('ativos')->group(function() {
        Route::get('edit/{id}','edit')->name('ativo.edit');
        Route::put('edit/{id}','update')->name('ativo.update');
        Route::delete('destroy/{id}','destroy')->name('ativo.destroy');
    });




});

require __DIR__.'/auth.php';
