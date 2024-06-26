<?php

namespace App\Http\Controllers;

use App\Models\Article;

class PageController extends Controller
{
    private $articles;

    public function __construct()
    {
        /*
        $this->articles = [

            0 => ['title' => 'Titolo articolo #1', 'category' => 'Sport #1', 'description' => '...', 'visible' => true],
            1 => ['title' => 'Titolo articolo #2', 'category' => 'Sport #2', 'description' => '...', 'visible' => true],
            2 => ['title' => 'Titolo articolo #3', 'category' => 'Sport #3', 'description' => '...', 'visible' => true],
            3 => ['title' => 'Titolo articolo #4', 'category' => 'Sport #4', 'description' => '...', 'visible' => true],

        ];
        */
        // $this->articles = \App\Models\Article::all();

    }

    public function welcome()
    {
        //dd($this->articles);
        return view('welcome');
    }

    public function articles()
    {

        $articles = Article::all();

        return view('pages.articles', [
            'articles' => $articles,
            'title' => 'Articoli',
        ]);

        /*
        $this->articles = [];

        $title = "Pagina ARTICOLI";
        return view('pages.articles', [
            'title'=> $title,
            'articles'=> $this->articles
        ]);
        */
    }

    public function article($id)
    {
        $article = Article::findOrFail($id);

        /*
        $article = $this->articles[$id];
        */
        return view('pages.article', [
            'article' => $article,
        ]);

    }

    public function aboutUs()
    {
        $title = 'Pagina CHI SIAMO';
        $paragraf = 'Benvenuti nella nostra pagina';

        return view('pages.aboutUs', ['title' => $title, 'paragraf' => $paragraf]);
    }
}
