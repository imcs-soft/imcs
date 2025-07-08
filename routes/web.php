<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/t1', 'template_1');
Route::view('/t2', 'template_2');
Route::view('/cursos', 'home')->name('cursos');
Route::view('/fqa', 'home')->name('fqa');

Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
