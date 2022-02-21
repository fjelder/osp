<div class="mb-10">
    <div class="grid grid-cols-1 md:grid-cols-2 ">
        <div class="p-5 text-sm text-zinc-700">

            <h2 class="mb-6 text-base font-semibold text-zinc-700">
                <span class="border-b-2 border-blue-300">Dane
                    organizacji</span>
            </h2>
            <div class="mb-2">
                <label for="nip">Nazwa organizacji</label>
                <input type="text" wire:model="info.name" disabled="disabled" class="bg-zinc-300" />
            </div>

            <div class="mb-2">
                <label for="nip">NIP</label>
                <input type="text" wire:model="info.nip" />
                @error('info.nip') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mb-2">
                <label for="regon">Regon</label>
                <input type="text" wire:model="info.regon" />
                @error('info.regon') <span class="error">{{ $message }}</span> @enderror
            </div>

            <div class="mb-2">
                <label for="nip">KRS</label>
                <input type="text" wire:model="info.krs" />
                @error('info.krs') <span class="error">{{ $message }}</span> @enderror
            </div>

        </div>

        <div class="p-5 text-sm text-zinc-700">

            <h2 class="mb-6 text-base font-semibold text-zinc-700">
                <span class="border-b-2 border-blue-300">Dane kontaktowe</span>
            </h2>
            <div class="mb-2">
                <label for="nip" class="text-zinc-400">E-mail</label>
                <input type="text" value="kontakt@osprobakowo.pl" class="focus:outline-none" />
            </div>

            <div class="mb-2">
                <label for="nip" class="text-zinc-400">Numer telefonu</label>
                <input type="text" value="+48 698 542 156" />
            </div>

            <div class="mb-2">
                <label for="nip" class="text-zinc-400">Adres</label>
                <input type="text" value="ul. Wiejska 9, 62-023 Robakowo" />
            </div>

            <div class="mb-2">
                <label for="nip" class="text-zinc-400">Link do mapy Googla</label>
                <input type="text" value="https://goo.gl/maps/WXKLSCLZqF3Gmqdd7" />
            </div>

        </div>

        <div class="p-5 text-sm text-zinc-700">

            <h2 class="mb-6 text-base font-semibold text-zinc-700">
                <span class="border-b-2 border-blue-300">Media społecznościowe</span>
            </h2>
            <div class="mb-2">
                <label for="nip" class="text-zinc-400">Facebook</label>
                <input type="text" wire:model="info.linkFacebook" />
            </div>

            <div class="mb-2">
                <label for="nip" class="text-zinc-400">Youtube</label>
                <input type="text" value="https://www.youtube.com" />
            </div>

        </div>


    </div>
    <button type="submit"
        class="px-2 py-2 mx-5 mt-4 text-sm tracking-wide transition-colors bg-green-500 border rounded-md shadow-md text-zinc-100 hover:bg-green-600">
        Zapisz
    </button>

</div>