<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HalamanController;
// use App\Http\Controllers\ProductController;
use App\Http\Controllers\NewsController;
use App\Http\Controllers\ProgramController;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HometController;
use App\Http\Controllers\PostController;

Route::get('/home', [App\Http\Controllers\HalamanController::class, 'index'])->name('home');
//product-route biasa
// Route::get('/product', [PostController::class, 'product'])->name('product');

Route::get('/product',[PostController::class,'product']);
    //product-prefix
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