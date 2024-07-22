<div>
    <div class="border border-rounded border-rounded-3 p-3">
        <h4 class="mb-3">Crea Utente</h4>

        <form wire:submit="submit">
            <div class="row g-3">
                <div class="col-12">
                    <label>Nome</label>
                    <input type="text" class="form-control" wire:model="name">
                </div>
                <div class="col-12">
                    <label>Email</label>
                    <input type="email" class="form-control" wire:model="email">
                </div>
                <div class="col-12">
                    <label>Password</label>
                    <input type="password" class="form-control" wire:model="password">
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">Crea Utente</button>
                </div>
            </div>
        </form>
    </div>
</div>
