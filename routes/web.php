<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class,'homepage'])->name('homepage');

Route::get('/chi-siamo', [PageController::class,'about'])->name('about');

Route::get('/contatti', [PageController::class,'contacts'])->name('contacts');

Route::resource('articles', ArticleController::class);


