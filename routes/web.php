<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;


Route::controller(HomeController::class)->group(function () {
    Route::get('/', 'index')->name('home');
});

Route::controller(LoginRegisterController::class)->group(function () {
    Route::get('/login', 'login')->name('login')->middleware('authenticated');
    Route::get('/register', 'register')->name('register')->middleware('authenticated');
    Route::post('process/login', 'processLogin')->name('processLogin');
    Route::post('process/register', 'processRegister')->name('processRegister');
    Route::get('logout', 'logout')->name('logout');
});

Route::controller(AdminController::class)->group(function () {
    Route::middleware(['auth', 'admin'])->group(function () {
        Route::get('/admin', 'admin')->name('admin');
    });
});
