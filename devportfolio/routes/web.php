<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\FormController;
use App\Http\Controllers\SecureController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// Homepage
Route::get('/', function () {
    return view('homepage');
});

// Basic pages
Route::get('/profile', [ProfileController::class, 'show']);
Route::get('/dashboard', [DashboardController::class, 'show']);

// Form routes
Route::get('/form', [FormController::class, 'index']);
Route::post('/form', [FormController::class, 'store'])->name('form.store');

//Secure Routes
Auth::routes();
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//Secure CRUD form
Route::get('/secure', [SecureController::class, 'index'])->name('auth.formoverview')->middleware('auth');
Route::get('/secure', [FormController::class, 'showOverview'])->name('auth.formoverview')->middleware('auth');
Route::get('/form/{id}', [FormController::class, 'show'])->name('form.show')->middleware('auth');
Route::get('/form/{id}/edit', [FormController::class, 'edit'])->name('form.edit')->middleware('auth');
Route::put('/form/{id}', [FormController::class, 'update'])->name('form.update')->middleware('auth');
Route::delete('/form/{id}', [FormController::class, 'destroy'])->name('form.destroy')->middleware('auth');


