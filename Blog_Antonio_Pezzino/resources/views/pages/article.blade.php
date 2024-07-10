<x-layout :title="$article['title']">


    <a href="{{ route('articles') }}">Indietro</a>
    
    <h1>{{ $article['title'] }}</h1>

    <h2>{{ $article['category'] }}</h2>

    <p>{{ $article['description'] }}</p>







</x-layout>
