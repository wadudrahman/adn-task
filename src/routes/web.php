<?php

use App\Http\Controllers\AuthController;
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
})->name('landing');

Route::get('/registration', [AuthController::class, 'showRegistrationView'])->name('registration.get');
Route::post('/registration', [AuthController::class, 'registration'])->name('registration.post');
Route::get('/login', [AuthController::class, 'showLoginView'])->name('login.get');
Route::post('/login', [AuthController::class, 'showLoginView'])->name('login.post');

