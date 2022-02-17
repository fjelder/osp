@if(config('set.visibleSection.partners'))
<div id="partners" class="partners">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="flex flex-col items-center mb-6 space-x-10 lg:justify-between lg:flex-row md:mb-8">
            <h2
                class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
                <span class="inline-block mb-1 sm:mb-4">
                    Wsparli nasze<br class="hidden md:block" />
                    działania
                </span>
                <div
                    class="h-1 ml-auto duration-300 origin-left transform bg-red-accent-400 scale-x-30 group-hover:scale-x-100">
                </div>
            </h2>

            <div class="flex flex-col flex-wrap items-center flex-1 space-y-5 lg:space-x-5 lg:flex-row">
                <a href="https://kornik.pl/" target="_blank" class="">
                    <img src="{{Storage::url('img/partners/kornik_logo.png')}}" alt="Gmina Kórnik" />
                </a>

            </div>
        </div>
    </div>
</div>
@endif