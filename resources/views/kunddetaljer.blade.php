<x-layouts.app :title="__('Kunddetaljer')">
    <div class="m-2">
        <form method="POST" action="{{ route('kunddetaljer.create') }}">
            @csrf
            <div>
                <div>
                    <label for="name">Name:</label>
                </div>
                <input type="text" name="name" id="name"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            </div>
            <div>
                <div>
                    <label for="name">Address:</label>
                </div>
                <input type="text" name="address" id="address"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            </div>
            <div>
                <div>
                    <label for="name">E-mail:</label>
                </div>
                <input type="text" name="email" id="email"
                    class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            </div>
            <div>
                <div>
                    <label for="type">Typ:</label>
                </div>
                <select name="type" id="type">
                    <option value="">Välj din kundtyp</option>
                    <option value="Privat">Privat</option>
                    <option value="Företag">Företag</option>
                </select>
            </div>
            <div>
                <button type="submit"
                    class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                    Save
                </button>
            </div>
        </form>
                @if ($errors->any())

            <div class="alert alert-danger">

                <ul>

                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>

            </div>
            @endif

        <a href="/kunddetaljer/1">Gå till kund 1</a>
    </div>
</x-layouts.app>
