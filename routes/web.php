<?php

use Illuminate\Support\Facades\Route;

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

Route::get('/', [\App\Http\Controllers\PageController::class, 'index'])->name('/');
Route::get('/cerita-kami', [\App\Http\Controllers\PageController::class, 'story'])->name('cerita-kami');
Route::get('/galeri', [\App\Http\Controllers\PageController::class, 'gallery'])->name('galeri');
