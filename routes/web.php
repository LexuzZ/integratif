<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\TicketController;
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

Route::get('/', function () {
    return view('welcome');
});

Route::controller(AuthController::class)->group(function () {
    Route::get('register', 'register')->name('register');
    Route::post('register', 'registerSave')->name('register.save');
    Route::get('login', 'login')->name('login');
    Route::post('login', 'loginAction')->name('login.action');
    Route::get('logout', 'logout')->middleware('auth')->name('logout');
});
Route::middleware('auth')->group(function () {
    Route::get('dashboard', function () {
        return view('dashboard');
    })->name('dashboard');
    Route::controller(TicketController::class)->prefix('tickets')->group(function () {
        Route::get('', 'index')->name('tickets');
        Route::get('create', 'create')->name('tickets.create');
        Route::post('store', 'store')->name('tickets.store');
        Route::get('show/{id}', 'show')->name('tickets.show');
        Route::get('edit/{id}', 'edit')->name('tickets.edit');
        Route::put('edit/{id}', 'update')->name('tickets.update');
        Route::delete('destroy/{id}', 'destroy')->name('tickets.destroy');
    });

    Route::get('/profile', [App\Http\Controllers\AuthController::class, 'profile'])->name('profile');
});
