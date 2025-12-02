<?php

use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClienteController;
use App\Http\Controllers\ProcessoController;
use App\Http\Controllers\AudienciaController;
use App\Http\Controllers\TarefaController;
use App\Http\Controllers\ContratoController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    if (Auth::check()) {
        return redirect()->route('dashboard');
    }
    return redirect()->route('login');
});

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])
        ->name('dashboard');

    Route::controller(ProfileController::class)->group(function () {
        Route::get('/profile', 'edit')->name('profile.edit');
        Route::patch('/profile', 'update')->name('profile.update');
        Route::delete('/profile', 'destroy')->name('profile.destroy');
    });

    Route::resource('clientes', ClienteController::class)->except(['show']);

    Route::resource('processos', ProcessoController::class)->except(['show']);

    Route::resource('audiencias', AudienciaController::class)->except(['show']);

    Route::resource('tarefas', TarefaController::class)->except(['show']);

    Route::resource('contratos', ContratoController::class)->except(['show']);

});

require __DIR__.'/auth.php';
