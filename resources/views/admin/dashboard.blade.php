<x-admin-layout>
    <div class="flex p-4 mb-12 space-x-5 cardsy">
        <div class="text-indigo-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M9 3v2m6-2v2M9 19v2m6-2v2M5 9H3m2 6H3m18-6h-2m2 6h-2M7 19h10a2 2 0 002-2V7a2 2 0 00-2-2H7a2 2 0 00-2 2v10a2 2 0 002 2zM9 9h6v6H9V9z" />
            </svg>
        </div>
        <div class="">
            <h2 class="mb-2 text-2xl text-zinc-600">Panel administracyjny</h2>
            <p class="text-sm text-justify text-zinc-400">Narzędzia administracyjne serwisu <strong
                    class="tracking-wider">osprobakowo.pl</strong></p>
        </div>
    </div>
    <x-jet-banner />
    @livewire('basic-info')

</x-admin-layout>