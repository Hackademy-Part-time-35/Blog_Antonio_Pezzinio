<x-layout :title="$article['title']">


    <a href="{{ route('articles') }}">Indietro</a>

    <h1>{{ $article['title'] }}</h1>

    <h2>{{ $article['category'] }}</h2>

    <p>{{ $article['description'] }}</p>



    @if($article->image)
    <div class="mt-2">
        <img class="img-fluid" src="{{ ($article->image) }}" alt="{{ $article->title }}">
    </div>
    @endif



</x-layout>
