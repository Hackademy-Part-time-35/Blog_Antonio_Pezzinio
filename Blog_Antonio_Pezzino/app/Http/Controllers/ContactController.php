<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class ContactController extends Controller
{
    public function contacts()
    {
        $title = 'Pagina CONTATTI';

        return view('pages.contacts', ['title' => $title]);
    }

    public function submit(Request $request)
    {

        //dd($request->all());

        $mail = new \App\Mail\Contact($request->name, $request->email, $request->message, $request->priority);

        Mail::to('admin@example.com')->send($mail);

        return redirect()->back()->with(['success' => 'Form inviato correttamente.']);

    }
}
