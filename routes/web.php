<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/create-template', [App\Http\Controllers\HomeController::class, 'createTemplate'])->name('createTemplate');
Route::post('/save-template', [App\Http\Controllers\HomeController::class, 'SaveTemplate'])->name('SaveTemplate');

Route::get('/show-email-form', [App\Http\Controllers\HomeController::class, 'EmailForm'])->name('EmailForm');
Route::post('/send-email', [App\Http\Controllers\HomeController::class, 'SendEmail'])->name('SendEmail');

