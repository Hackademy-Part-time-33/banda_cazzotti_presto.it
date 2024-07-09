<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\GoogleLoginController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RevisorController;
use App\Http\Controllers\AnnouncementController;

Route::get('/', [PageController::class,'homepage'])->name('homepage');

Route::get('/chi-siamo', [PageController::class,'about'])->name('about');

Route::get('/contatti', [PageController::class,'contacts'])->name('contacts');



Route::resource('articles', ArticleController::class);

Route::get("/category/{category}", [ArticleController::class,'byCategory'])->name('byCategory');

Route::get('/google/redirect', [GoogleLoginController::class, 'redirectToGoogle'])->name('google.redirect');
Route::get('/google/callback', [GoogleLoginController::class, 'handleGoogleCallback'])->name('google.callback');

Route::get("/revisor/index", [RevisorController::class,'index'])->middleware('isRevisor')->name('revisor.index');

Route::patch("/accept/{article}", [RevisorController::class,'accept'])->name('accept');

Route::patch("/reject/{article}", [RevisorController::class,'reject'])->name('reject');
Route::get('/search/article',[ArticleController::class,'searchArticles'])->name('articles.search');

Route::post("/revisor/request", [RevisorController::class,'becomeRevisor'])->middleware('auth')->name('become.revisor');

Route::get('/make/revisor/{user}' , [RevisorController::class, 'makeRevisor'])->name('make.revisor');


Route::get('/workwithus' , [RevisorController::class, 'showWork'])->middleware('auth')->name('lavora-con-noi');
 
