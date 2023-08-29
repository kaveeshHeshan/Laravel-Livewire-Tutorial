<div>

    <div class="container my-5">
        <h1>{{__('Counter')}}</h1>
        <hr>
        <br>
        <div class="">
            <h1>{{ $count }}</h1>
     
            <button class="btn btn-sm btn-success" wire:click="increment">+</button>
            
            <button class="btn btn-sm btn-danger" wire:click="decrement">-</button>
        </div>
        <div class="">
            <div wire:loading wire:target="increment">  
                Increasing Count...
            </div>
            <div wire:loading wire:target="decrement">
                Decreasing Count...
            </div>
        </div>
    </div>
</div>
