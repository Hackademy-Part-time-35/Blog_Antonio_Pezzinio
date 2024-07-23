<div>
    <h4>Elenco Utenti</h4>

    <div class="mt-3">
        @foreach($users as $user)
        <div class="card mb-2">
            <div class="card-body">
                <h6>{{ $user->name }} [{{ $user->id }}] </h6>
                <p>{{ $user->email}}</p>
                
                <div class="mt-3 text-end">
                    <button wire:click="edit({{ $user->id }})" class="btn text-secondary">modifica</button>

                </div>

            </div>
        </div>

        @endforeach

    </div>
</div>
