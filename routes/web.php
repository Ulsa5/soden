<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Empleados;
use App\Http\Livewire\Empleadodebajas;
use App\Http\Livewire\Contactos;
use App\Http\Livewire\Usuarios;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/contactos', Contactos::class)->name('contactos');
    Route::get('/usuarios', Usuarios::class)->name('usuarios');
    Route::get('/empleados', Empleados::class)->name('empleados');
    Route::get('/empleados-de-baja', Empleadodebajas::class)->name('empleados-de-baja');
    Route::get('/dashboard', function () {
        return view('dashboard');        
    })->name('dashboard');
    Route::get('/', function () {
        return view('auth.login');        
    })->name('login');
});
