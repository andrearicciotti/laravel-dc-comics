<?php

use App\Http\Controllers\Admin\ComicController;
use App\Http\Controllers\Admin\HomeController;
use Illuminate\Support\Facades\Route;


Route::get('/', [HomeController::class, 'index'])->name('home');

Route::resource('comics', ComicController::class);

