<x-layout :title="$anime['title']">
    <div class="container mt-5">

    <a href="{{ route('anime.genres') }}" class="text-secondary">indietro</a>
        <h1>{{ $anime['title'] }}</h1>
        <p class="lead">
            {{ $anime['title_japanese'] }}
        </p>
        
        <div class="mt-5">
            <div class="row">
                <div class="col-lg-3">
                    <img src="{{ $anime['images']['jpg']['image_url'] }}" alt="{{ $anime['title'] }}">
                </div>
                <div class="col-lg-9">
                    {!! nl2br(e($anime['synopsis'])) !!}
                </div>
            </div>
        </div>
    </div>    
</x-layout>