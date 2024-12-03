<?php

use App\Http\Controllers\OrdersController;
use App\Http\Controllers\SettingsController;
use App\Http\Middleware\RegisterOnceOnInstall;
use Illuminate\Support\Facades\Route;

Route::middleware([
    RegisterOnceOnInstall::class,
])->group(function() {
    Route::get('/register', function () {
        return view('dashboard');
    })->name('dashboard');

    Route::middleware([
        'auth:sanctum',
        config('jetstream.auth_session'),
        'verified',
    ])->group(function () {
        Route::get('/', function () {
            return view('dashboard');
        })->name('dashboard');

        Route::get('/settings', [SettingsController::class, 'index']);

        Route::get('/orders', [OrdersController::class, 'index']);
    });
});
