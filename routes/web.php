<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    
    Route::get('/verificacion', function () {
        $user = Auth::user();
        
        return view('dashboard.verificacion', [
            'verificado' => $user->verificado ?? false,
            'rfc' => $user->rfc ?? null,
            'razonSocial' => $user->razon_social ?? null,
            'direccionFiscal' => $user->direccion_fiscal ?? null,
            'fechaVerificacion' => $user->fecha_verificacion ?? null
        ]);
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
    
    Route::get('/notificaciones', function () {
        return view('dashboard.notificaciones');
    })->name('notificaciones.index');
    
    Route::get('/calificaciones', function () {
        return view('dashboard.calificaciones');
    })->name('calificaciones.index');

    Route::get('/completar-registro', function () {
        return view('dashboard.completar-registro');
    })->name('registro.completar');

    Route::get('/menus/{establecimiento}', function ($establecimiento) {
        return view('dashboard.menu-detalle', ['establecimiento' => $establecimiento]);
    })->name('menus.detalle');

    Route::get('/pagos/datos-bancarios', function () {
        return view('pagos.datos-bancarios');
    })->name('pagos.datos-bancarios');
});

require __DIR__.'/auth.php';