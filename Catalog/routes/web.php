<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\PageController;

Route::get('/', function () {
    return view('welcome');
});


Route::get('/contatti', [PageController::class, 'contacts'])->name('contacts');

Route::get('articolo/{id}', [PageController::class, 'articleView'])->name('article.view');


//livewire


