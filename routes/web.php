<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Livewire\ImponenteComponent;

use App\Http\Livewire\HomeComponent;
use App\Http\Controllers\PrestamoController;

use Illuminate\Support\Carbon;

Route::get('/', HomeComponent::class)->name('home');

Route::get('prestamos/create', [PrestamoController::class, 'create'])->name('prestamos.create');


Route::get('imponente', ImponenteComponent::class)->name('imponente');

Route::get('prueba', function () {
    return auth()->user()->imponente->prestamos;
});
