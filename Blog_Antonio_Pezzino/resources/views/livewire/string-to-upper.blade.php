<div>
    <div>
        <input type="text" wire:model.live="text">
        <button wire:click="transform">Trasform</button>
    </div>
    <div>
        La versione maiuscola è: {{ $text }}
    </div>
</div>