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
        return view('dashboard.promociones.index');
    })->name('promociones.index');
    
    Route::get('/promociones/create', function () {
        return view('dashboard.promociones.create');
    })->name('promociones.create');
    
    Route::post('/promociones', function () {
        return redirect()->route('promociones.index');
    })->name('promociones.store');
    
    Route::get('/promociones/{id}', function ($id) {
        return view('dashboard.promociones.show', ['promocion' => ['id' => $id]]);
    })->name('promociones.show');
    
    Route::get('/promociones/{id}/edit', function ($id) {
        return view('dashboard.promociones.edit-prueba'); // Vista de prueba
    })->name('promociones.edit');
    
    Route::put('/promociones/{id}', function ($id) {
        return redirect()->route('promociones.index');
    })->name('promociones.update');
    
    Route::delete('/promociones/{id}', function ($id) {
        return redirect()->route('promociones.index');
    })->name('promociones.destroy');
    
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

    Route::get('/completar-registro', [App\Http\Controllers\ClienteController::class, 'create'])->name('registro.completar');
    Route::post('/completar-registro', [App\Http\Controllers\ClienteController::class, 'store'])->name('clientes.store');

    Route::get('/menus/{establecimiento}', function ($establecimiento) {
        return view('dashboard.menu-detalle', ['establecimiento' => $establecimiento]);
    })->name('menus.detalle');

    Route::get('/pagos/datos-bancarios', function () {
        return view('pagos.datos-bancarios');
    })->name('pagos.datos-bancarios');

    Route::get('/promociones-prueba/{id}/edit', function ($id) {
        return view('dashboard.promociones.edit-prueba');
    })->name('promociones.edit.prueba');
});

Route::view('/privacy', 'privacy')->name('privacy');
Route::view('/terms', 'terms')->name('terms');

require __DIR__.'/auth.php';