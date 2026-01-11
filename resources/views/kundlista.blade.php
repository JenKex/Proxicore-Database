<x-layouts.app>
    <div>
        {{-- <p>Kundlista här</p> --}}
        @foreach ($users as $user)
            <div wire:key="{{ $user->id }}">
                <a href="kunddetaljer/{{ $user->id }}">
                    <div>
                        <p>{{ $user->id }}</p>
                        <p>{{ $user->name }}</p>
                        <p>{{ $user->address }}</p>
                        <p>{{ $user->email }}</p>
                        <p>{{ $user->type }}</p>
                    </div>
                </a>
            </div>
        @endforeach
    </div>
</x-layouts.app>
