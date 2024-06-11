<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/articles', function () {

    $title = 'Pagina articoli';

    return view('articles', ['title' => $title]);
});

Route::get('/contatti', function () {

    $title = 'Pagina contatti';

    return view('contatti', ['title' => $title]);
});

Route::get('/whoweare', function () {

    $title = 'Pagina chi siamo';
    $paragraph = 'Benvenuti nella nostra pagina';

    return view('whoweare', ['title' => $title], ['paragraph' => $paragraph]);
});
