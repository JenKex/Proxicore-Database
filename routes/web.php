<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use Livewire\Volt\Volt;
use App\Http\Controllers\UserController;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

Route::get('/kunddetaljer', function (){
    return view('kunddetaljer');
})->name('kunddetaljer');

Route::post('/kunddetaljer', [UserController::class, 'registerNewUser'
])->name('user.create');

Route::get('/kunddetaljer/{id}', [UserController::class, 'show'])
->where('id', '[0-9]+')->name('kunddetaljer.redigera');

Route::get('/kundlista', [UserController::class, 'index'])->name('kundlista');