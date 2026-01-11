<div>
    @session('success')
        <div class="alert alert-success">

            {{ $value }}

        </div>
    @endsession
    @foreach ($users as $user)
        <div wire:key="{{ $user->id }}">
            <a href="kunddetaljer/{{ $user->id }}" wire:navigate>
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
