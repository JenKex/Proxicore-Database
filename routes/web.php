<?php

use Illuminate\Support\Facades\Route;
use Laravel\Fortify\Features;
use App\Http\Controllers\UserController;
use App\Livewire\ShowUsers;
use App\Livewire\ShowCreateUser;
use App\Livewire\ShowEditUser;

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::get('/kunddetaljer', ShowCreateUser::class)->name('kunddetaljer');

Route::get('/kundlista', ShowUsers::class)->name('kundlista');

Route::get('/kunddetaljer/{id}', ShowEditUser::class)
->where('id', '[0-9]+')->name('kunddetaljer.redigera');

// Grundläggande Laravel-routes utan Livewire-komponenter,
// ifall man skulle vilja ändra Frontend-bibliotek innan projektet påbörjas.

// Route::post('/kunddetaljer', [UserController::class, 'createUser'
// ])->name('kunddetaljer.create');

// Route::get('/kunddetaljer/{id}', [UserController::class, 'show'])
// ->where('id', '[0-9]+')->name('kunddetaljer.redigera');

// Route::put('/kunddetaljer/{id}', [UserController::class, 'update'])
// ->where('id', '[0-9]+')->name('kunddetaljer.redigera');

// Route::get('/kundlista', [UserController::class, 'index'])->name('kundlista');