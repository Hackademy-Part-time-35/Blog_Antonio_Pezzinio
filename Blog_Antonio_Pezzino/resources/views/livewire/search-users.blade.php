<div class="mt-5">
    <div class="row">
        <div class="col-md-3">
            <label>Ricerca Utente</label>
            <input wire:model.live="search" type="text" class="form-control">
        </div>
        <div class="col-md-9">
            <h4>Elenco degli utenti</h4>

            @foreach($users as $user)
            <div class="card mb-2">
                <div class="card-body">
                    <span class="fw-bold">{{ $user->name }}</span>
                    <div class="text-secondary">
                        <a href="mailto:{{ $user->email }}">{{ $user->email }}</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</div>
