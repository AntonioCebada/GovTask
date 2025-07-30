<?php
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\SolicitudController;
use App\Http\Controllers\TableroController;
use App\Http\Controllers\UsuariosController;
use App\Http\Controllers\DepartamentosController;
use Illuminate\Support\Facades\Route;


//Route::get('/', function () {
//    return redirect('login');
//});

//login
Route::get('login', [LoginController::class, 'index'])->name('login');
Route::post('login', [LoginController::class, 'autenticar']);
Route::post('logout', [LoginController::class, 'logout'])->name('logout');

// home
Route::get('dashboard', function(){
    return view('dashboard');
})->middleware('auth')->name('dashboard');

// vista de solicitudes
Route::get('solicitudes', [SolicitudController::class, 'index'])->name('solicitudes');

//vista de los usuarios y sus roles, tanto existentes como nuevos (ruta protegida)
Route::middleware(['auth', 'role:Administrador'])->group(function(){
    Route::get('usuarios', [UsuariosController::class, 'index'])->name('usuarios');
    Route::post('usuarios', [UsuariosController::class, 'registrar']);
    Route::delete('usuarios/{id}', [UsuariosController::class, 'eliminar'])->name('usuarios.eliminar');
    Route::put('usuarios/{id}', [UsuariosController::class, 'actualizar'])->name('usuarios.actualizar');
});

//departamentos
Route::get('departamentos', [DepartamentosController::class, 'index'])->name('departamentos');