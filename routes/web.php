<?php

use Illuminate\Support\Facades\Route;

Route::livewire('/', 'pages::home')->name('home');

// auth
Route::get('/logout', function() {
    auth()->guard()->logout();
    return redirect('/');
})->name('logout');
Route::livewire('/login', 'pages::auth.login')->name('login');
Route::livewire('/register', 'pages::auth.register')->name('register');

// Vocab
Route::middleware("auth")->group(function() {
    Route::livewire('/new', 'pages::vocab.create')->name('new');
    Route::livewire('/history', 'pages::vocab.history')->name('history');
    Route::livewire('/profile', 'pages::profile')->name('profile');
});
