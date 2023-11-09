<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AtivoController;
use App\Http\Controllers\TransacaoController;
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

    //Ativos
    Route::controller(AtivoController::class)->prefix('ativos')->group(function() {
        Route::get('create','create')->name('ativo');
        Route::post('store','store')->name('ativo');
        Route::get('edit/{id}','edit')->name('ativo.edit');
        Route::put('edit/{id}','update')->name('ativo.update');
        Route::delete('destroy/{id}','destroy')->name('ativo.destroy');

    });



   

    //Rotas de ativos
    Route::get('/ativos', [AtivoController::class,'create'])->name('ativos');
    Route::post('/ativos', [AtivoController::class, 'store'])->name('ativos');
    
    
   

    //Rotas de transações
    Route::get('/transacaos', [TransacaoController::class, 'create'])->name('transacaos');


});

require __DIR__.'/auth.php';
