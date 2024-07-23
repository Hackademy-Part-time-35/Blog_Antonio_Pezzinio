<div>
    <div class="border border-rounded border-rounded-3 p-3">
        @if($userId)
        <div class="row">
            <div class="col-10">
                <h4 class="mb-3">Modifica Utente</h4>
            </div>
            <div class="col-2">
            <button wire:click="resetForm" class="btn btn-outline-danger">X</button>
            </div>
        </div>
        
        

        @else
        <h4 class="mb-3">Crea Utente</h4>
        @endif

        <x-success />

        <form wire:submit="submit">
            <div class="row g-3">
                <div class="col-12">
                    <label>Nome</label>
                    <input type="text" class="form-control" wire:model="name">
                    @error('name') <span class="small text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="col-12">
                    <label>Email</label>
                    <input type="email" class="form-control" wire:model="email">
                    @error('email') <span class="small text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="col-12">
                    <label>Password</label>
                    <input type="password" class="form-control" wire:model="password">
                    @error('password') <span class="small text-danger">{{ $message }}</span>@enderror
                </div>
                <div class="col-12">
                    <label>FOTO</label>
                    <input type="file" class="form-control" wire:model="photo">
                    @if($photo)
                        <img src="{{ $photo->temporaryUrl() }}" class="img-fluid mt-2">
                    @endif
                </div>
                <div>
                    <button type="submit" class="btn btn-primary">{{ $userId ? 'Modifica' : 'Crea' }} Utente</button>
                </div>
            </div>
        </form>
    </div>
</div>
