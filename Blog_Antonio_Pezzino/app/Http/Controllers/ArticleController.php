<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Article;
use App\Http\Requests\StoreArticleRequest;

class ArticleController extends Controller
{

    public function index()
    {
        $articles = auth()->user()->articles;

        return view('articles.index', ['articles' => Article::all()]);
    }

    public function create()
    {
        return view('articles.create', ['categories' => \App\Models\Category::all()]);
    }
    public function store(Request $request)
    {

        $article = Article::create($request->all());

        $article->user_id = auth()->user()->id;

        if($request->hasFile('image') && $request->file('image')->isValid()) {

            $fileName = uniqid('img_') . '.' . $request->file('image')->extension();


            $path = 'public/images/articles/' . $article->id;

            $article->image = $request->file('image')->storeAs($path, $fileName);

            

        }

        $article->save();

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

    public function edit(Article $article)
    {

        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }
        


        return view('articles.edit', ['article' => $article, 'categories' => \App\Models\Category::all()]);  
    }

    public function update(StoreArticleRequest $request, Article $article)
    {

        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }
        

        $article->update($request->all());
        return redirect()->route('articles.index')->with(['success' => 'Articolo modificato correttamente']);
    }

    public function destroy(Article $article)
    {

        if($article->user_id !== auth()->user()->id) {
            abort(403);
        }
 

        $article->delete();
        return redirect()->route('articles.index')->with(['success' => 'Articolo cancellato correttamente']);
    }
}
