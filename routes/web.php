<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\TableroController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\DepartamentosController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return redirect('login');
});

Route::get('login', [LoginController::class, 'index'])->name('login');
Route::get('dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('solicitudes', [SolicitudController::class, 'index'])->name('solicitudes');
Route::get('tablero', [TableroController::class, 'index'])->name('tablero');
Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios');
Route::get('departamentos', [DepartamentosController::class, 'index'])->name('departamentos');