<x-layout :title="$title">


    <h1 class="title_1">{{$title}}</h1>



    
    
        

@if ($articles)




    <div class="container">
        <div class="row g-3 mt-5">
            @foreach($articles as $article)
            @if($article['visible'])
            <div class="col-lg-3">
                <x-card
                    :category="$article->category->name"
                    :title="$article['title']"
                    :route="route('articles.show', $article->id)"
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
