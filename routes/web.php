<?php

use App\Http\Controllers\CertificateController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LibraryController;
use App\Http\Controllers\UserCourseController;
use Illuminate\Support\Facades\Route;

Route::get('/', HomeController::class)->name('home');
Route::get('/cursos', [CourseController::class, "index"])->name('cursos');
Route::view('/cursos/vista', 'courses.show')->name('curso');
Route::view('/fqa', 'fqa')->name('fqa');
Route::get('/biblioteca', [LibraryController::class, 'index'])->name('biblioteca');


Route::get('/mis-certificados', [CertificateController::class, 'myCertificates'])
    ->middleware(['auth', 'verified'])
    ->name('mis-certificados');

Route::middleware('auth')->group(function () {
    Route::get('/mis-cursos', [UserCourseController::class, 'index'])
        ->name('mis-cursos');

    Route::get('/mis-certificados', [CertificateController::class, 'myCertificates'])
        ->name('mis-certificados');

    Route::get('/course/{course}', [UserCourseController::class, 'show'])
        ->name('course.show');

    Route::post('/course/module/{module}/complete', [UserCourseController::class, 'completeModule'])
        ->name('module.complete');
});



Route::view('dashboard', 'dashboard')
    ->middleware(['auth', 'verified'])
    ->name('dashboard');

Route::view('profile', 'profile')
    ->middleware(['auth'])
    ->name('profile');

require __DIR__.'/auth.php';
