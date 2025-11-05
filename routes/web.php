<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');  // 👈 ESTA LÍNEA ES CRÍTICA
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    // Tus rutas del dashboard
    Route::get('/verificacion', function () {
        return view('dashboard.verificacion');
    })->name('verificacion.create');
    
    Route::get('/horarios', function () {
        return view('dashboard.horarios');
    })->name('horarios.index');
    
    Route::get('/menus', function () {
        return view('dashboard.menus');
    })->name('menus.index');
    
    Route::get('/promociones', function () {
        return view('dashboard.promociones');
    })->name('promociones.index');
    
    Route::get('/banners', function () {
        return view('dashboard.banners');
    })->name('banners.index');
    
    Route::get('/planes', function () {
        return view('dashboard.planes');
    })->name('planes.index');
    
    Route::get('/deactivate', function () {
        return view('dashboard.deactivate');
    })->name('deactivate');
});

require __DIR__.'/auth.php';