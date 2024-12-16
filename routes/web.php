<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [\App\Http\Controllers\PagesController::class, 'home'])->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::controller(\App\Http\Controllers\PeticioneController::class)->group(function () {
    Route::get('peticiones', 'index')->name('peticiones.index');
    Route::get('peticiones/add', 'create')->name('peticiones.add');
    Route::post('peticiones', 'store')->name('peticiones.store');
    Route::get('peticiones/{id}', 'show')->name('peticiones.show');
    Route::get('mispeticiones', 'listMine')->name('peticiones.mine');
    Route::post('peticiones/firmar/{id}', 'firmar')->name('peticiones.firmar');
});

Route::controller(\App\Http\Controllers\UsersController::class)->group(function () {
    Route::get('misfirmas', 'peticionesfirmadas')->name('users.firmas');
});

Route::middleware([\App\Http\Middleware\Admin::class])->controller(\App\Http\Controllers\AdminPeticionesController::class)->group(function () {
    Route::get('admin', 'index')->name('admin.home');
    Route::get('admin/peticiones/index', 'index')->name('adminpeticiones.index');
    Route::get('admin/peticiones/{id}', 'show')->name('adminpeticiones.show');
    Route::get('admin/peticion/add', 'create')->name('adminpeticiones.create');
    Route::get('admin/peticiones/edit/{id}', 'edit')->name('adminpeticiones.edit');
    Route::post('admin/peticiones', 'store')->name('adminpeticiones.store');
    Route::delete('admin/peticiones/{id}', 'delete')->name('adminpeticiones.delete');
    Route::put('admin/peticiones/{id}', 'update')->name('adminpeticiones.update');
    Route::put('admin/peticiones/estado/{id}', 'cambiarEstado')->name('adminpeticiones.estado');
});

Route::middleware([\App\Http\Middleware\Admin::class])->controller(\App\Http\Controllers\AdminCategoriasController::class)->group(function () {
    Route::get('admin/categorias/index', 'index')->name('admincategorias.index');
    Route::get('admin/categorias/{id}', 'show')->name('admincategorias.show');
    Route::get('admin/categorias/add', 'create')->name('admincategorias.create');
    Route::get('admin/categorias/edit/{id}', 'edit')->name('admincategorias.edit');
    Route::post('admin/categorias', 'store')->name('admincategorias.store');
    Route::delete('admin/categorias/{id}', 'delete')->name('admincategorias.delete');
    Route::put('admin/categorias/{id}', 'update')->name('admincategorias.update');
});

Route::middleware([\App\Http\Middleware\Admin::class])->controller(\App\Http\Controllers\AdminUsersController::class)->group(function () {
    Route::get('admin/users/index', 'index')->name('adminusers.index');
    Route::get('admin/users/{id}', 'show')->name('adminusers.show');
    Route::get('admin/users/add', 'create')->name('adminusers.create');
    Route::get('admin/users/edit/{id}', 'edit')->name('adminusers.edit');
    Route::post('admin/users', 'store')->name('adminusers.store');
    Route::delete('admin/users/{id}', 'delete')->name('adminusers.delete');
    Route::put('admin/users/{id}', 'update')->name('adminusers.update');
});

require __DIR__.'/auth.php';
