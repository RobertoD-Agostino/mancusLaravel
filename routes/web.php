<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicController;
use App\Http\Controllers\EmailController;

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

Route::get('/', [PublicController::class, 'home'])->name('home');
Route::get('/gallery', [PublicController::class, 'gallery'])->name('gallery');
Route::get('/form', [PublicController::class, 'form'])->name('form');

Route::post('/email/submit', [EmailController::class, 'submit'])->name('emailSubmit');

Route::post('lingua/{lang}', [PublicController::class, 'setLanguage'])->name('set-language');