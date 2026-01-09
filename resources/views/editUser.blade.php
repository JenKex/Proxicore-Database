<x-layouts.app>
    <div>
        @if ($user)
            <p>{{ $user }}</p>
        @else
        <div>
            <p>Ingen kund med detta ID existerar. Vänligen kontrollera ID och försök igen.</p>
        </div>
        @endif
    </div>
</x-layouts.app>
