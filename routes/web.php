<?php

use App\Http\Controllers\CarteraController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientesController;
use App\Http\Controllers\PrestamosController;
use App\Http\Controllers\PrestamosClienteController;
use App\Models\Clientes;
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
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

route::get('/detalle', function () {
    return view('carteras.detalle');
});

// Rutas prestamos
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/prestamos',[PrestamosController::class, 'index'])->name('prestamosindex');
    Route::get('/prestamos/{id}', [PrestamosClienteController::class, 'prestamos'])->name('prestamos');
    Route::get('/crearPrestamo/{id}', [PrestamosController::class, 'prestamos'])->middleware(['auth', 'verified'])->name('crearPrestamo');
    Route::post('/guardarPrestamo', [PrestamosController::class, 'guardarPrestamo'])->name('guardarPrestamo');
    Route::get('/editarPrestamo/{id}', [ClientesController::class, 'editarPrestamo'])->name('editarPrestamo');
});



// Rutas carteras
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/carteras', [CarteraController::class, 'index'])->name('carteras');
    Route::get('/crearCartera', [CarteraController::class, 'crearCartera'])->name('crearCartera');
    Route::post('/guardarCartera', [CarteraController::class, 'guardarCartera'])->name('guardarCartera');
    Route::get('/editarCartera/{id}', [CarteraController::class, 'editarCartera'])->name('editarCartera');
    Route::get('/detalleCartera/{id}', [CarteraController::class, 'detalleCartera'])->name('detalleCartera');
});


//rutas de clientes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/clientes', [ClientesController::class,'index'])->name('clientes');
    Route::get('/crearCliente', [ClientesController::class,'CrearCliente'])->name('crearclientes');
    Route::get('/editarCliente/{id}', [ClientesController::class, 'editarCliente'])->name('editarCliente');
    Route::post('/guardarNuevoCliente', [ClientesController::class, 'guardarNuevoCliente'])->name('guardarNuevoCliente');
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
