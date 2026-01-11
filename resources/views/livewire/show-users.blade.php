<div class="flex w-screen justify-center overflow-scroll">
    @session('success')
        <div class="alert alert-success">

            {{ $value }}

        </div>
    @endsession
    @if ($users)
        <table class="w-full text-center">
            <thead class="text-sm text-body bg-neutral-secondary-soft border-b rounded-base border-default">
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Namn</th>
                    <th scope="col">Adress</th>
                    <th scope="col">E-mail</th>
                    <th scope="col">Kundtyp</th>
                    <th scope="col">Redigera</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                    <tr class="odd:bg-neutral-primary even:bg-neutral-100 border-b border-gray-200"
                        wire:key="{{ $user->id }}">
                        <th scope="row">{{ $user->id }}</th>
                        <td>{{ $user->name }}</td>
                        <td>{{ $user->address }}</td>
                        <td>{{ $user->email }}</td>
                        <td>{{ $user->type }}</td>
                        <td><a class="border-1 border-gray-400 p-1 rounded-md bg-gray-200"
                                href="kunddetaljer/{{ $user->id }}">Redigera</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="border-2 border-gray-400 rounded-2xl bg-muted gap-6 p-6 md:p-10">
            <p>Inga användare finns registrerade i databasen.</p>
        </div>
    @endif
</div>
