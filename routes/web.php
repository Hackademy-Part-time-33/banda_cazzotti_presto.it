<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'homepage'])->name('homepage');

Route::resource('Articles', ArticleController::class);