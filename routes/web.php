<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;


Route::get('/', [PageController::class,'homepage'])->name('homepage');

Route::get('/chi-siamo', [PageController::class,'about'])->name('about');

Route::get('/contatti', [PageController::class,'contacts'])->name('contacts');



Route::resource('articles', ArticleController::class);

Route::get("/category/{category}", [ArticleController::class,'byCategory'])->name('byCategory');

Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');
