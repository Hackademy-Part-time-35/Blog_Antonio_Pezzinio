<?php

use App\Http\Controllers\PageController;
use Illuminate\Support\Facades\Route;

Route::get('/', [PageController::class, 'welcome'])->name('welcome');

Route::get('/articoli', [PageController::class, 'articles'])->name('articles');

Route::get('/articoli/{id}', [PageController::class, 'article'])->name('articles.show');

Route::get('/contatti', [PageController::class, 'contacts'])->name('contacts');

Route::get('/chisiamo', [PageController::class, 'aboutUs'])->name('aboutUs');
