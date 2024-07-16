<x-layout title="Anime">
    <div class="container mt-5">
        <h1>Anime</h1>
        
        <a href="{{ route('anime.genres') }}" class="text-secondary">indietro</a>
        <div class="mt-5">
            @foreach($anime as $item)
                <div class="card mb-2">
                    <div class="card-body">
                        <div class="row">
                            <div class="col-md-3">
                                <img class="img-fluid" src="{{ $item['image'] }}" alt="{{ $item['title'] }}">
                            </div>
                            <div class="col-md-9">
                                <h5>{{ $item['title'] }}</h5>
                                <div>
                                    Anno creazione: {{ $item['year'] }}
                                </div>
                                <div>
                                    Valutazione: {{ $item['score'] }}/10
                                </div>
                             <div class="mt-3">
                                    <a href="{{ route('anime.byid', $item['id']) }}" class="btn btn-primary">Dettagli</a>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    </div>    
</x-layout>