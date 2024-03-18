<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Backend\ComicController;
use App\Http\Controllers\Guest\PageController;

Route::get('/', [PageController::class, 'index'])->name('homePage');

Route::resource('comics', ComicController::class );
