<?php

use App\Http\Controllers\Admin\ComicController;
use Illuminate\Support\Facades\Route;


Route::get('/', [ComicController::class, 'index'])->name('home');

Route::resource('comics', ComicController::class);

