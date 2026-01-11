<div class="flex w-screen items-center justify-center">
    <div class="dark:from-neutral-950 dark:to-neutral-900">
        <div
            class="flex flex-col items-center align-center border-2 border-gray-400 rounded-2xl bg-muted gap-6 p-6 md:p-10">
            @session('success')
                <div class="border-1 p-2 bg-green-100 border-green-600 text-green-800 rounded-md alert alert-success">

                    {{ $value }}

                </div>
            @endsession
            <form class="flex flex-col gap-8" wire:submit="store">
                <div class="grid grid-cols-2 grid-rows-2 gap-16">
                    <div class="flex flex-col gap-1">
                        <div>
                            <label for="name">Namn:</label>
                        </div>
                        <input type="text" wire:model="name" id="name"
                            class="border border-gray-400 p-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        @error('name')
                            <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1">
                        <div>
                            <label for="address">Adress:</label>
                        </div>
                        <input type="text" wire:model="address" id="address"
                            class="border border-gray-400 p-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">

                        @error('address')
                            <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1">
                        <div>
                            <label for="email">E-mail:</label>
                        </div>
                        <input type="text" wire:model="email" id="email"
                            class="border border-gray-400 p-1 focus:border-indigo-500 focus:ring-indigo-500 rounded-md shadow-sm">
                        @error('email')
                            <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex flex-col gap-1">
                        <div>
                            <label for="type">Typ:</label>
                        </div>
                        <select wire:model="type" id="type" class="border p-1 rounded-md">
                            <option value="">Välj din kundtyp</option>
                            <option value="Privat">Privat</option>
                            <option value="Företag">Företag</option>
                        </select>
                        @error('type')
                            <span class="error text-red-600">{{ $message }}</span>
                        @enderror
                    </div>
                </div>
                <div class="self-center justify-self-center">
                    <button type="submit"
                        class="inline-flex items-center px-4 py-2 bg-gray-800 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-gray-700 focus:bg-gray-700 active:bg-gray-900 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 transition ease-in-out duration-150">
                        Spara
                    </button>
                </div>
            </form>
        </div>
    </div>

</div>
