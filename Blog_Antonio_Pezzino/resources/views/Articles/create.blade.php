<x-layout title="Crea un nuovo Articolo">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <h1>Crea un nuovo Articolo</h1>

                <x-success />

                @if($errors->any())
                <div class="alert alert-danger">
                    @foreach($errors->all() as $error)
                    <span>{{ $error }}</span><br>
                    @endforeach
                </div>
                @endif

                <div class="mt-5">
                    <form action="{{ route('articles.store') }}" method="POST" enctype="multipart/form-data">
                        @csrf

                        <div class="row g-3">
                            <div class="col-12">
                                <label for="title">Titolo <b class="text-danger">*</b></label>
                                <input type="text" name="title" id="title" class="form-control @error('title') is-invalid @enderror"
                                        maxlength="150" value="{{ old('title') }}">
                                @error('title') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-12">
                                <label for="category">Categoria <b class="text-danger">*</b></label>
                                <input type="text" name="category" id="category" class="form-control @error('category') is-invalid @enderror"
                                        maxlength="50" value="{{ old('category') }}">
                                @error('category') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-12">
                                <label for="description">Descrizione <b class="text-danger">*</b></label>
                                <input type="text" name="description" id="description" class="form-control @error('description') is-invalid @enderror"
                                        maxlength="255" value="{{ old('description') }}">
                                @error('description') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>

                            <div class="col-12">
                                <label for="image">Immagine</label>
                                <input type="file" name="image" id="image" class="form-control">
                            </div>

                            <div class="col-12">
                                <label for="body">Contenuto</label>
                                <textarea name="body" id="body" rows="8" class="form-control">{{ old('body') }}</textarea>
                            </div>

                            <div class="col-12">
                                <p class="small">i campi contrassegnati da * sono obbligatori</p>
                            </div>

                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Crea Articolo</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>
