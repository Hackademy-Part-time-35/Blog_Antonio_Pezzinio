<x-layout :title="$title">


    <h1 class="color">{{$title}}</h1>



@if ($articles)




    <div class="container">
        <div class="row g-3 mt-5">
            @foreach($articles as $index => $article)
            @if($article['visible'])
            <div class="col-lg-3">
                <x-card
                    :category="$article['category']"
                    :title="$article['title']"
                    :route="route('articles.show', $index)"
                    />
            </div>
            @endif
        @endforeach
        </div>
    </div>

        @else

        <p>Nessun articolo disponibile</p>


@endif




</div>
</div>

</x-layout>
