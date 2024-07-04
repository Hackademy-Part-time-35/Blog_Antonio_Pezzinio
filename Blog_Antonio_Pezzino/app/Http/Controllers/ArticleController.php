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


    }

    public function edit(Article $article)
    {
        return view('articles.edit', ['article' => $article, 'categories' => \App\Models\Category::all()]);
    }

    public function update(StoreArticleRequest $request, Article $article)
    {
        $article->update($request->all());

        return redirect()->route('articles.index')->with(['success' => 'Articolo modificato correttamente']);
    }

    public function destroy(Article $article)
    {
        $article->delete();

        return redirect()->route('articles.index')->with(['success' => 'Articolo cancellato correttamente']);
    }






}
