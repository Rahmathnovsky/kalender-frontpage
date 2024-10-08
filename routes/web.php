<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\WebsiteController;
use App\Http\Controllers\FormController;

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

Route::get('/home', [WebsiteController::class, 'index'])->name('home');
Route::post('/registration-phone', [WebsiteController::class, 'registrationPhone'])->name('registration-phone');

Route::get('/registration-form', [FormController::class, 'formRegistration'])->name('registration-form');
Route::post('/submit', [FormController::class, 'formRegistrationSubmit'])->name('registration-form-submit');
