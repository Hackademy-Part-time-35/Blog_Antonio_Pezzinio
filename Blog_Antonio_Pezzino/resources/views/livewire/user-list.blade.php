<div>
    <h4>Elenco Utenti</h4>

    <div class="mt-3">
        @foreach($users as $user)
        <div class="card mb-2">
            <div class="card-body">
                <div class="row">
                    <div class="col-md-2">
                        @if($user->photo)
                        <img src="{{ Storage::url($user->photo) }}" class="img-fluid rounded rounded-circle">
                        @endif
                    </div>
                    <div class="col-md-10">
                        <h6>{{ $user->name }} [{{ $user->id }}]</h6>
                        <p>{{ $user->email }}</p>

                        <div class="mt-3 text-end">
                            <button wire:click="edit({{ $user->id }})" class="btn text-secondary">modifica</button>
                            <button wire:click="delete({{ $user->id }})" class="btn text-danger">cancella</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>
</div>