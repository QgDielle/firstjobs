<div>
    <h1>
        {{$value}}
    </h1>
    <button class="btn btn-success" wire:click='increment'>Add+</button>
    <button class="btn btn-danger" wire:click='decrement'>Less -</button>
    <button class="btn btn-primary" wire:click='incrementByNumber(5)'>Add 5</button>
</div>
