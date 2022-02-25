<div class="mb-10">
    <div class="p-5">

        <h2 class="mb-6 text-base font-semibold text-slate-400">
            <span class="capitalize border-b-2 border-indigo-300">Dane podstawowe</span>
        </h2>
        <div class="grid grid-cols-1 rounded-md md:grid-cols-2 ">
            <div class="m-3">


                <x-ui.input model="info.name" label="Dane organizacji" disabled=true />
                <x-ui.input model="info.nip" label="NIP" />
                <x-ui.input model="info.regon" label="Regon" />
                <x-ui.input model="info.krs" label="KRS" />


            </div>

            <div class="m-3">

                <x-ui.input model="info.email" label="Email" />
                <x-ui.input model="info.number" label="Numer telefonu" />
                <x-ui.input model="info.address" label="Adres" />
                <x-ui.input model="info.linkMaps" label="Link do mapy Googla" />

            </div>

            <div class="m-3">

                <x-ui.input model="info.linkFacebook" label="Facebook" />
                <x-ui.input model="info.linkYoutube" label="Youtube" />

            </div>


        </div>
        <div class="flex justify-start border rounded-lg bg-slate-100 dark:bg-slate-800 dark:border-slate-300/10">
            <button type="submit"
                class="flex items-center px-2 py-2 mx-5 my-4 text-sm tracking-wide text-white transition-colors bg-indigo-600 border border-indigo-600 rounded-sm cursor-not-allowed hover:bg-indigo-700"
                wire:click="update" disabled="disabled">
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