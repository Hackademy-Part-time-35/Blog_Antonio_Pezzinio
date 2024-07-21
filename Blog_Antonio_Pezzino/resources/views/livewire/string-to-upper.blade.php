<div>
    <div>
        <input type="text" wire:model.live="text">
        <button wire:click="transform">Trasforma</button>
    </div>
    <div>
        la versione maiuscola è : {{ $text }}
    </div>
</div>
