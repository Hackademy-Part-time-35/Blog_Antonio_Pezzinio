<x-layout title="Modifica una categoria">
    <div class="container mt-5">
        <div class="row">
            <div class="col-lg-6 mx-auto">
                <a href="{{ route('categories.index') }}" class="btn">indietro</a>
                <h1>Modifica una Categoria</h1>

                <x-success />

                <div class="mt-5">
                    <form action="{{ route('categories.update', $category) }}" method="POST" enctype="multipart/form-data">
                        @csrf   
                        @method('PUT')                 
                        <div class="row g-3">
                            <div class="col-12">
                                <label for="name">Nome <b class="text-danger">*</b></label>
                                <input type="text" name="name" id="name" class="form-control @error('name') is-invalid @enderror"
                                        value="{{ old('name', $category->name) }}" maxlength="50">
                                @error('name') <span class="text-danger small">{{ $message }}</span> @enderror
                            </div>
                            <div class="col-12">
                                <p class="small">i campi contrassegnati da * sono obbligatori</p>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary" type="submit">Modifica Categoria</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-layout>