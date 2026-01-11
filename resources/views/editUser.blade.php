<x-layouts.app>
    <div>
        @if ($user)
            <form method="POST" action="{{ route('kunddetaljer.redigera', $user) }}">
                @csrf
                @method('PUT')
                <div>
                    <div>
                        <label for="name">Name:</label>
                    </div>
                    <input type="text" name="name" id="name" value="{{ $user->name }}"
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                </div>
                <div>
                    <div>
                        <label for="name">Address:</label>
                    </div>
                    <input type="text" name="address" id="address" value="{{ $user->address }}"
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                </div>
                <div>
                    <div>
                        <label for="name">E-mail:</label>
                    </div>
                    <input type="text" name="email" id="email" value="{{ $user->email }}"
                        class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                </div>
                <div>
                    <div>
                        <label for="type">Typ:</label>
                    </div>
                    <select name="type" id="type">
                        <option @if ($user->type == 'Privat') selected @endif value="Privat">Privat</option>
                        <option @if ($user->type == 'Företag') selected @endif value="Företag">Företag</option>
                    </select>
                </div>
                <div>
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Save
                    </button>
                </div>
            </form>
        @else
            <div>
                <p>Ingen kund med detta ID existerar. Vänligen kontrollera ID och försök igen.</p>
            </div>
        @endif
    </div>
</x-layouts.app>
