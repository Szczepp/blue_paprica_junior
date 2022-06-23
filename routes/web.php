<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;

Route::get('/', [MainController::class, 'index'])->name('main');

Route::POST('/', [MainController::class, 'store'])->name("main.store");
