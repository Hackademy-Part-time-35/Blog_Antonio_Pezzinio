<x-layout title="Pagina articolo n.{{ $articleId }}">
<h1>Pagina articolo n.{{ $articleId }}</h1>
<p>Contenuto dell'articolo...</p>

<x-card :name="'titolo articolo n.' . $articleId" />

</x-layout>
    

