<div>
    <form wire:submit="save">
        <div>
            <div>
                <label for="name">Name:</label>
            </div>
            <input type="text" wire:model="name" id="name"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
            @error('name') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <div>
            <div>
                <label for="name">Address:</label>
            </div>
            <input type="text" wire:model="address" id="address"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">

                        @error('address') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <div>
            <div>
                <label for="name">E-mail:</label>
            </div>
            <input type="text" wire:model="email" id="email"
                class="border-gray-300 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        @error('email') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <div>
            <div>
                <label for="type">Typ:</label>
            </div>
            <select wire:model="type" id="type">
                <option value="">Välj din kundtyp</option>
                <option value="Privat">Privat</option>
                <option value="Företag">Företag</option>
            </select>
                    @error('type') <span class="error">{{ $message }}</span> @enderror 
        </div>
        <div>
            <button type="submit"
                class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                Save
            </button>
        </div>
    </form>
</div>
