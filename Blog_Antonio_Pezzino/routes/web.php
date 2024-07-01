<?php

use App\Http\Controllers\ArticleController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/articoli', [PageController::class, 'articles'])->name('articles');

Route::get('/articoli/{id}', [PageController::class, 'article'])->name('articles.show');

Route::get('/chisiamo', [PageController::class, 'aboutUs'])->name('aboutUs');

Route::get('/contatti', [ContactController::class, 'contacts'])->name('contacts');
Route::post('/contatti/invia', [ContactController::class, 'submit'])->name('contacts.submit');

Route::get('/articles', [ArticleController::class, 'index'])->name('articles.index');
Route::get('/articles/create', [ArticleController::class, 'create'])->name('articles.create');

Route::post('/articles/store', [ArticleController::class, 'store'])->name('articles.store');
