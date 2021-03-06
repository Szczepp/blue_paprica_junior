<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\ExampleController;

Route::get('/', [MainController::class, 'index'])->name('main.home');
Route::post('/store', [MainController::class, 'store'])->name("main.store");

Route::get('/show', [ExampleController::class, 'index'])->name('example.index');

Auth::routes();
