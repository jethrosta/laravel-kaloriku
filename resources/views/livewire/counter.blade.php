{{--<div>
    <input type="text" wire:model="search" placeholder="Search users ..."/>
    <ul>
        @foreach($users as $user)
            <li>{{ $user->name }}</li>
        @endforeach
    </ul>
</div>--}}
<div style="text-align: center">
    <button wire:click="increment">+</button>
    <button wire:click="m">-</button>
    <h1>{{ $count }}</h1>
</div>
