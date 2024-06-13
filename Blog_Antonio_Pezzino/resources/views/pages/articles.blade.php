<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body>
    <nav>
        <a href="{{ route('welcome') }}">Home</a>
        <a href="{{ route('articles') }}">Articoli</a>
        <a href="{{ route('about-us') }}">Chi Siamo</a>
        <a href="{{ route('contacts') }}">Contatti</a>
    </nav>

    {{-- Modo di aggiungere un commento in Blade --}}
    @if($titleIsVisible)
    <h1 class="title">{{ $title }}</h1>
    @endif

    @foreach($articles as $index => $article)
        @if($article['visible'])
        <li>
            <a href="{{ route('articles.show', $index) }}">{{ $index }} - {{ $article['title'] }}</a>
        </li>
        @endif
    @endforeach
</body>
</html>


<?php


//rotta parametrica
