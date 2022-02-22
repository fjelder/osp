<div class="mb-10">
    <div class="shadow-md cardsy">


        <div class="grid grid-cols-1 rounded-md md:grid-cols-2 ">
            <div class="p-5 m-3 text-sm text-zinc-700">

                <h2 class="mb-6 text-base font-semibold text-zinc-700">
                    <span class="border-b-2 border-indigo-300">Dane
                        organizacji</span>
                </h2>
                <div class="mb-2">
                    <label for="nip">Nazwa organizacji</label>
                    <input type="text" wire:model="info.name" disabled="disabled"
                        class="font-semibold capitalize text-zinc-400" />
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
                    <label for="krs">KRS</label>
                    <input type="text" wire:model="info.krs" />
                    @error('info.krs') <span class="error">{{ $message }}</span> @enderror
                </div>

            </div>

            <div class="p-5 m-3 text-sm text-zinc-700">

                <h2 class="mb-6 text-base font-semibold text-zinc-700">
                    <span class="border-b-2 border-indigo-300">Dane kontaktowe</span>
                </h2>
                <div class="mb-2">
                    <label for="email">E-mail</label>
                    <input type="email" wire:model="info.email" />
                </div>

                <div class="mb-2">
                    <label for="phone">Numer telefonu</label>
                    <input type="text" wire:model="info.number" />
                </div>

                <div class="mb-2">
                    <label for="address">Adres</label>
                    <input type="text" wire:model="info.address" />
                </div>

                <div class="mb-2">
                    <label for="linkMaps">Link do mapy Googla</label>
                    <input type="text" wire:model="info.linkMaps" />
                </div>

            </div>

            <div class="p-5 m-3 text-sm text-zinc-700">

                <h2 class="mb-6 text-base font-semibold text-zinc-700">
                    <span class="border-b-2 border-indigo-300">Media społecznościowe</span>
                </h2>
                <div class="mb-2">
                    <label for="linkFacebook">Facebook</label>
                    <input type="text" wire:model="info.linkFacebook" />
                </div>

                <div class="mb-2">
                    <label for="linkYoutube">Youtube</label>
                    <input type="text" wire:model="info.linkYoutube" />
                </div>

            </div>


        </div>
        <div class="flex justify-end border-t bg-slate-100">
            <button type="submit"
                class="flex items-center px-2 py-2 mx-5 my-4 text-sm tracking-wide text-white transition-colors bg-indigo-600 border border-indigo-600 rounded-sm hover:bg-indigo-700"
                wire:click="update">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="w-5 h-5 mr-2"
                    viewBox="0 0 16 16">
                    <path
                        d="M2 1a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V2a1 1 0 0 0-1-1H9.5a1 1 0 0 0-1 1v7.293l2.646-2.647a.5.5 0 0 1 .708.708l-3.5 3.5a.5.5 0 0 1-.708 0l-3.5-3.5a.5.5 0 1 1 .708-.708L7.5 9.293V2a2 2 0 0 1 2-2H14a2 2 0 0 1 2 2v12a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h2.5a.5.5 0 0 1 0 1H2z" />
                </svg>
                <span>Zapisz</span>
            </button>
        </div>
    </div>


</div>