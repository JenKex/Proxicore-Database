<div>
{{-- Figure out how to flash messages for successful updates --}}
{{-- Now works, but remains on screen. Maybe it should time out, or maybe it'll be fine if it's just prettier? --}}
    @session("success")
        <div class="alert alert-success">

            {{ $value }}

        </div>
    @endsession
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
