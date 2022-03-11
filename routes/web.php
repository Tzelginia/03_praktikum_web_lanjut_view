<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HometController;

Route::get('/home', [App\Http\Controllers\HalamanController::class, 'index'])->name('home');
//product-route biasa
Route::get('/product', [ProductController::class, 'product'])->name('product');
    //product-prefix
    Route::prefix("Category")->group(function(){
        Route::get("/marbel-edu-games", [ProductController::class, 'cat1'])->name('cat1');
        Route::get("/marbel-and-friends-kids-games", [ProductController::class, 'cat2'])->name('cat2');
        Route::get("/riri-story-books", [ProductController::class, 'cat3'])->name('cat3');
        Route::get("/kolak-kids-songs", [ProductController::class, 'cat4'])->name('cat4');
    });
//program-route biasa
Route::get('/program', [ProgramController::class, 'program'])->name('program');
//program-route profix
Route::prefix("Program")->group(function(){
    Route::get("/karir", [ProgramController::class, 'karir'])->name('karir');
    Route::get("/magang", [ProgramController::class, 'magang'])->name('magang');
    Route::get("/kunjungan-industri", [ProgramController::class, 'kunjungan_industri'])->name('kunjungan_industri');
});
//news-route
Route::get('/news', [NewsController::class, 'news'])->name('news');
//about-route
Route::get('/about-us', [AboutController::class, 'about'])->name('about');
//contact-route resource
Route::resource('/contact-us', ContactController::class)->only([
    'index', 'me'])
;