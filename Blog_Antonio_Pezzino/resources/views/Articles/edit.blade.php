<x-layout title="Modifica un Articolo">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <a href="{{ route('articles.index') }}" class="btn">indietro</a>
                <h1>Modifica un Articolo</h1>

                <x-success />

                <div class="mt-5">
                    <form action="{{ route('articles.update', $article) }}" method="POST" enctype="multipart/form-data">
                        @csrf      
                        @method('PUT')              
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="title">Titolo <b class="text-danger">*</b></label>
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                                        maxlength="150" value="{{ old('title', $article->title) }}">
                                @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="category">Categoria *</label>
                                <select name="category" id="category" class="form-control">
                                    @foreach($categories as $category)
                                    <option value="{{ $category->name }}" @selected($article->category === $category->name)>{{ $category->name }}</option>
                                    @endforeach
                                </select>
                                @error('category') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="description">Descrizione *</label>
                                <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                        maxlength="255" value="{{ old('description', $article->description) }}">
                                @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <label for="image">Immagine</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>
                            <div class="col-12">
                                <label for="body">Contenuto</label>
                                <textarea name="body" id="body" rows="8" class="form-control">{{ old('body', $article->body) }}</textarea>
                            </div>
                            <div class="col-12">
                                <p class="small">i campi contrassegnati da * sono obbligatori</p>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Modifica Articolo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>