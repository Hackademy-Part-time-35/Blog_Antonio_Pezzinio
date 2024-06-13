<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {

    return view('welcome');

})->name('welcome');

Route::get('/articoli', function () {

    $title = 'Articoli';

    $titleIsVisible = true;

    $articles = [
        0 => ['title' => 'Titolo articolo #1', 'category' => 'Sport #1', 'visible' => true],
        1 => ['title' => 'Titolo articolo #2', 'category' => 'Sport #2', 'visible' => true],
        2 => ['title' => 'Titolo articolo #3', 'category' => 'Sport #3', 'visible' => true],
        3 => ['title' => 'Titolo articolo #4', 'category' => 'Sport #4', 'visible' => true],
    ];

    //$articles = [];

    return view('pages.articles', [
        'titleIsVisible' => $titleIsVisible,
        'title' => $title,
        'articles' => $articles,
    ]);

})->name('articles');

Route::get('/articoli/{id}', function ($id = null) {

    $articles = [
        0 => ['title' => 'Titolo articolo #1', 'category' => 'Sport #1', 'description' => '...', 'visible' => true],
        1 => ['title' => 'Titolo articolo #2', 'category' => 'Sport #2', 'description' => '...', 'visible' => true],
        2 => ['title' => 'Titolo articolo #3', 'category' => 'Sport #3', 'description' => '...', 'visible' => true],
        3 => ['title' => 'Titolo articolo #4', 'category' => 'Sport #4', 'description' => '...', 'visible' => true],
    ];

    $article = $articles[$id];

    return view('pages.article', ['article' => $article]);

})->name('articles.show');

Route::get('/contatti', function () {

    return view('pages.contacts');

})->name('contacts');

Route::get('/chi-siamo', function () {

    $description = 'Descrizione della pagina Chi Siamo';

    return view('pages.about-us', [
        'title' => 'Chi Siamo',
        'description' => $description,
    ]);

})->name('about-us');
