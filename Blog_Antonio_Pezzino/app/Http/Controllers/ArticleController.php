<?php

namespace App\Http\Controllers;

use App\Models\Article;

use Illuminate\Http\Request;

class ArticleController extends Controller
{

}public function store()
{

    $article = new Article();

    $article->title = 'Sono un articolo';
    $article->category = 'Sport';
    $article->description = '...';
    $article->visible = true;
    $article->body = 'Sono il contenuto';


    $article->save();

}
