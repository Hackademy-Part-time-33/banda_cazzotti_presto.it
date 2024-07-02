<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'homepage'])->name('homepage');

<<<<<<< HEAD
Route::resource('articles', ArticleController::class);
=======
Route::get('/chi-siamo', [PageController::class,'about'])->name('about');

Route::get('/contatti', [PageController::class,'contacts'])->name('contacts');
Route::resource('Articles', ArticleController::class);
>>>>>>> 267a5e38283c389e2f0e8f2e2b2ab2eb0f57b585
