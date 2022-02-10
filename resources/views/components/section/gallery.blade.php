@if(config('set.visibleSection.gallery'))
<section id="gallery" class="gallery">
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="flex items-center justify-center w-12 h-12 mb-4 rounded-full bg-red-50">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-6 h-6" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M4 16l4.586-4.586a2 2 0 012.828 0L16 16m-2-2l1.586-1.586a2 2 0 012.828 0L20 14m-6-6h.01M6 20h12a2 2 0 002-2V6a2 2 0 00-2-2H6a2 2 0 00-2 2v12a2 2 0 002 2z" />
            </svg>
        </div>
        <div class="flex flex-col mb-6 lg:justify-between lg:flex-row md:mb-8">
            <h2
                class="max-w-lg mb-5 font-sans text-3xl font-bold tracking-tight text-gray-900 sm:text-4xl sm:leading-none md:mb-6 group">
                <span class="inline-block mb-1 sm:mb-4">
                    <span class="text-5xl text-red-700">G</span>aleria zdjęć<br class="hidden md:block" />
                    z życia naszej społeczności
                </span>
                <div
                    class="h-1 ml-auto duration-300 origin-left transform bg-red-accent-400 scale-x-30 group-hover:scale-x-100">
                </div>
            </h2>
            <p class="text-gray-700 lg:text-sm lg:max-w-md">
                "Sed ut perspiciatis unde omnis iste natus error sit iste
                voluptatem accusantium doloremque rem aperiam, ipsa eaque quae.
                Sed ut perspiciatis unde omnis iste."
            </p>
        </div>
        <div class="grid gap-6 row-gap-5 mb-8 lg:grid-cols-4 sm:row-gap-6 sm:grid-cols-2">
            <a href="/" aria-label="View Item">
                <div
                    class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
                    <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{Storage::url('img/img1.jpg')}}"
                        alt="" />
                    <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75 ">
                        <p class="text-sm font-medium tracking-wide text-white">
                            Szkolenie nowych strażaków
                        </p>
                    </div>
                </div>
            </a>
            <a href="/" aria-label="View Item">
                <div
                    class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
                    <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{Storage::url('img/img2.jpg')}}"
                        alt="" />
                    <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75 ">
                        <p class="text-sm font-medium tracking-wide text-white">
                            Akcje gaśnicze w praktyce
                        </p>
                    </div>
                </div>
            </a>
            <a href="/" aria-label="View Item">
                <div
                    class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
                    <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{Storage::url('img/img3.jpg')}}"
                        alt="" />
                    <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75 ">
                        <p class="text-sm font-medium tracking-wide text-white">
                            Nocne ćwiczenia
                        </p>
                    </div>
                </div>
            </a>
            <a href="/" aria-label="View Item">
                <div
                    class="relative overflow-hidden transition duration-200 transform rounded shadow-lg hover:-translate-y-2 hover:shadow-2xl">
                    <img class="object-cover w-full h-56 md:h-64 xl:h-80" src="{{Storage::url('img/img5.jpg')}}"
                        alt="" />
                    <div class="absolute inset-x-0 bottom-0 px-6 py-4 bg-black bg-opacity-75 ">
                        <p class="text-sm font-medium tracking-wide text-white">
                            Festyn gminny
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="text-center">
            <a href="/" aria-label=""
                class="inline-flex items-center font-semibold transition-colors duration-200 text-red-accent-400 hover:text-red-800">
                Zobacz więcej
                <svg class="inline-block w-3 ml-2" fill="currentColor" viewBox="0 0 12 12">
                    <path
                        d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z">
                    </path>
                </svg>
            </a>
        </div>
    </div>
</section>
@endif