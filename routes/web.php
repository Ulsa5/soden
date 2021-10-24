<?php

use Illuminate\Support\Facades\Route;
use App\Http\Livewire\Empleados;
use App\HTTP\Livewire\Empleadodebajas;

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

Route::get('/', function () {
    return view('auth.login');
});

// Route::get('/empleados', function () {
//     return view('empleados');
// })->name('empleados');

Route::get('/usuarios', function(){
    return view('usuarios');
})->name('usuarios');

Route::get('/contacto', function(){
    return view('contacto');
})->name('contacto');



Route::middleware(['auth:sanctum','verified'])->group(function(){
    Route::get('/empleados', Empleados::class)->name('empleados');
    Route::get('/empleados-de-baja', Empleadodebajas::class)->name('empleados-de-baja');
    // Route::get('/usuarios', Usuarios::class)->name('usuarios');
    // Route::get('/contacto', Contacto::class)->name('contacto');
    Route::get('/dashboard', function () {
        return view('dashboard');        
    })->name('dashboard');
});


// Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');
