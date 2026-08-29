<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');

// auth
Route::get('/logout', function() {
    auth()->guard()->logout();
    return redirect('/');
})->name('user');
Route::livewire('/login', 'pages::auth.login')->name('login');
Route::livewire('/register', 'pages::auth.register')->name('register');
