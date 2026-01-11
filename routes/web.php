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

// Place these in Livewire components and make them into LW routes -- showUserPage::class, showCreateUserPage::class, etc?

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->name('dashboard');

// Route::get('/kunddetaljer', function (){
//     return view('kunddetaljer');
// })->name('kunddetaljer');

Route::get('/kunddetaljer', ShowCreateUser::class)->name('kunddetaljer');

Route::get('/kundlista', ShowUsers::class)->name('kundlista');

// Route::post('/kunddetaljer', [UserController::class, 'createUser'
// ])->name('kunddetaljer.create');

Route::get('/kunddetaljer/{id}', ShowEditUser::class)
->where('id', '[0-9]+')->name('kunddetaljer.redigera');

// Route::get('/kunddetaljer/{id}', [UserController::class, 'show'])
// ->where('id', '[0-9]+')->name('kunddetaljer.redigera');

// Route::put('/kunddetaljer/{id}', [UserController::class, 'update'])
// ->where('id', '[0-9]+')->name('kunddetaljer.redigera');

// Route::get('/kundlista', [UserController::class, 'index'])->name('kundlista');

Route::get('/kundlista', ShowUsers::class)->name('kundlista');
