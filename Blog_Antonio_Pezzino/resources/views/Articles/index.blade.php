<x-layout title="Elenco Articoli">
    <div class="container mt-5">
        <div class="row">



            <div class="col-lg-6">

                <h1>Elenco Articoli</h1>


            </div>
            <div class="col-lg-6 text-end">
                <a href="{{ route('articles.create') }}" class="btn btn-primary">Crea Articolo</a>
            </div>
        </div>

        <div class="mt-5">
            <table class="table table-bordered">
                <thead>

                    <tr>
                        <th>#</th>
                        <th>Titolo</th>
                        <th></th>
                    </tr>

                </thead>
                <tbody>

                    @foreach($articles as $article)
                    <tr>
                        <td>{{ $article->id }}</td>
                        <td>{{ $article->title }}</td>
                        <td></td>
                    </tr>

                    @endforeach
                </tbody>
            </table>

        </div>
    </div>
</x-layout>