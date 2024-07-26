<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ArticleController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\CategoryController;

Route::get('/', [HomeController::class, 'index']);

Route::get('/posts/{category:slug}', [CategoryController::class, 'show'])->name('category.show');

Route::get('/posts/{category:slug}/{article:slug}', [ArticleController::class, 'show'])->name('article.show');

Route::get('/contact', [HomeController::class, 'contact']);
