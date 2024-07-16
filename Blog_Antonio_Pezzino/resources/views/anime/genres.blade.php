<x-layout title="Generi Anime">
    <div class="container mt-5">
        <h1>Generi Anime</h1>
        
        <div class="mt-5">
            <ul>
                @foreach($genres as $genre)
                <li>
                        <a href="{{ route('anime.bygenres', $genre['mal_id']) }}">
                        <b>{{ $genre['name'] }}</b> ({{ $genre['count'] }})</a>
                </li>
                @endforeach
            </ul>
        </div>
    </div>    
</x-layout>