<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ClientesController;
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

Route::get('/prestamos', function () {
    return view('prestamos.prestamos');
})->middleware(['auth', 'verified'])->name('prestamos');

//rutas de clientes
Route::get('/clientes', [ClientesController::class,'index'])->middleware(['auth', 'verified'])->name('clientes');

Route::get('/crearClientes', function () {
    return view('clientes.crearCliente');
})->middleware(['auth', 'verified'])->name('crearclientes');

Route::get('/editarCliente/{id}', [ClientesController::class, 'editarCliente'])->name('editarCliente');

Route::post('/guardarNuevoCliente', [ClientesController::class, 'guardarNuevoCliente'])->name('guardarNuevoCliente');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
