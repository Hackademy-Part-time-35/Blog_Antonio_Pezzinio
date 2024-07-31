<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;


// nei controller si alimenta,crea la logica per le pagine
class PageController extends Controller
{
    public function contacts()
    {

        $titolo = 'titoloooo';

        return view('pages.contacts', ['title' => $titolo]);

    }

    public function articleView($id)
    {
        return view('pages.article', ['articleId' => $id]);
        //dd($id);
    }



}


