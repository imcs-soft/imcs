<?php

use Illuminate\Support\Facades\Route;

Route::view('/', 'home')->name('home');
Route::view('/cursos', 'courses')->name('cursos');
Route::view('/cursos/{curso}', 'courses.show')->name('curso');
Route::view('/curso-estado/{curso}', 'courses.status')->name('curso-estado');
Route::view('/mis-cursos', 'my-courses')->name('mis-cursos');
Route::view('/fqa', 'fqa')->name('fqa');
Route::view('/mis-certificados', 'my-certificates')->name('mis-certificados');
Route::view('/biblioteca', 'library')->name('biblioteca');


Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
