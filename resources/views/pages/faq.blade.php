<x-app-layout>
    <div class="px-4 py-16 mx-auto sm:max-w-xl md:max-w-full lg:max-w-screen-xl md:px-24 lg:px-8 lg:py-20">
        <div class="max-w-xl sm:mx-auto lg:max-w-2xl">
            <div class="max-w-xl mb-10 md:mx-auto sm:text-center lg:max-w-2xl md:mb-12">
                <div>
                    <p
                        class="inline-block px-3 py-px mb-4 text-xs font-semibold tracking-wider text-teal-900 uppercase rounded-full bg-teal-accent-400">
                        Pytania i odpowiedzi
                    </p>
                </div>
                <h2
                    class="max-w-lg mb-6 font-sans text-3xl font-bold leading-none tracking-tight text-gray-900 sm:text-4xl md:mx-auto">
                    <span class="relative inline-block">
                        <svg viewBox="0 0 52 24" fill="currentColor"
                            class="absolute top-0 left-0 z-0 hidden w-32 -mt-8 -ml-20 text-blue-gray-100 lg:w-32 lg:-ml-28 lg:-mt-10 sm:block">
                            <defs>
                                <pattern id="70326c9b-4a0f-429b-9c76-792941e326d5" x="0" y="0" width=".135"
                                    height=".30">
                                    <circle cx="1" cy="1" r=".7"></circle>
                                </pattern>
                            </defs>
                            <rect fill="url(#70326c9b-4a0f-429b-9c76-792941e326d5)" width="52" height="24"></rect>
                        </svg>
                        <span class="relative">Odpowiedzi</span>
                    </span>
                    na najczęściej zadawane pytania.
                </h2>
                <p class="text-base text-gray-700 md:text-lg">
                    Pytania dotyczące ochrony pożarowej oraz tego jak zostać strażakiem ochotnikiem.
                </p>
            </div>
        </div>
        <div class="max-w-screen-xl sm:mx-auto">
            <div class="grid grid-cols-1 gap-10 row-gap-8 lg:grid-cols-2">
                @foreach ($faqs as $faq)

                <div>
                    <p class="mb-4 text-xl font-medium">{{$faq->question}}</p>
                    <p class="text-gray-700">
                        {{$faq->answear}}
                    </p>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</x-app-layout>