<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/', function () {
    return view('clientes.editarCliente');
});

Route::get('/prestamos', function () {
    return view('prestamos.prestamos');
})->middleware(['auth', 'verified'])->name('prestamos');

Route::get('/clientes', [Clientes::class,'index'])->middleware(['auth', 'verified'])->name('clientes');
Route::post('/saveNewClient', [App\Http\Controllers\ClientController::class, 'guardarNuevoCliente'])->name('saveNewClient');
Route::get('/editClient/{id}', [App\Http\Controllers\ClientController::class, 'editClient'])->name('editClient');

Route::get('/crearclientes', function () {
    return view('clientes.crearCliente');
})->middleware(['auth', 'verified'])->name('crearclientes');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
