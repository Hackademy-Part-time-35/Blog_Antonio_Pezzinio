<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use App\Http\Requests\StoreArticleRequest;


class ArticleController extends Controller
{
    public function index()
    {
        return view('articles.index', ['articles' => Article::all()]);
    }

    public function create()
    {
        return view('articles.create');
    }

    public function store(Request $request)
    {

        $article = Article::create($request->all());

        if ($request->hasFile('image') && $request->file('image')->isValid()) {

            $fileName = uniqid('img_').'.'.$request->file('image')->extension();

            $path = 'public/images/articles/'.$article->id;

            $article->image = $request->file('image')->storeAs($path, $fileName);

            $article->save();

        }

        return redirect()->back()->with(['success' => 'Articolo creato correttamente']);

        /*
        $article->title = 'Sono un articolo';
        $article->category = 'Sport';
        $article->description = '...';
        $article->visible = true;
        $article->body = 'Sono il contenuto';


        $article->save();
        */
    }
}
