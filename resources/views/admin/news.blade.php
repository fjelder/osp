<x-admin-layout>
    <div class="flex w-full p-4 mb-12 space-x-5 cardsy">
        <div class="text-indigo-300">
            <svg xmlns="http://www.w3.org/2000/svg" class="w-16 h-16" fill="none" viewBox="0 0 24 24"
                stroke="currentColor">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                    d="M19 20H5a2 2 0 01-2-2V6a2 2 0 012-2h10a2 2 0 012 2v1m2 13a2 2 0 01-2-2V7m2 13a2 2 0 002-2V9a2 2 0 00-2-2h-2m-4-3H9M7 16h6M7 8h6v4H7V8z" />
            </svg>
        </div>
        <div class="">
            <h2 class="mb-2 text-2xl text-zinc-600">Aktualności</h2>
            <p class="text-sm text-justify text-zinc-400">Zarządzanie postami
        </div>
    </div>

    <div>

        <div class="w-full sm:px-6">
            <div class="px-4 py-4 md:px-10 md:py-7">
                <div class="flex items-center justify-between">
                    <p tabindex="0"
                        class="text-base font-bold leading-normal text-gray-800 focus:outline-none sm:text-lg md:text-xl lg:text-2xl">
                        Lista postów</p>
                    <div
                        class="flex items-center px-4 py-3 text-sm font-medium leading-none text-gray-600 bg-gray-200 rounded cursor-pointer hover:bg-gray-300">
                        <p>Sortuj:</p>
                        <select aria-label="select"
                            class="ml-1 bg-transparent focus:text-indigo-600 focus:outline-none">
                            <option class="font-sans text-sm text-indigo-800">Najnowsze</option>
                            <option class="text-sm text-indigo-800">Najstarsze</option>
                        </select>
                    </div>
                </div>
            </div>
            <div class="px-4 py-4 bg-white md:py-7 md:px-8 xl:px-10">
                <div class="items-center justify-between sm:flex">
                    <div class="flex items-center text-sm">
                        <a class="rounded-md focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800"
                            href=" javascript:void(0)">
                            <div class="px-4 py-2 text-indigo-700 bg-indigo-100 rounded-md">
                                <p>Wszystkie2</p>
                            </div>
                        </a>
                        <a class="ml-4 rounded-md focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 sm:ml-8"
                            href="javascript:void(0)">
                            <div class="px-4 py-2 text-gray-600 rounded-md hover:text-indigo-700 hover:bg-indigo-100 ">
                                <p>Opublikowane</p>
                            </div>
                        </a>
                        <a class="ml-4 rounded-md focus:outline-none focus:ring-2 focus:bg-indigo-50 focus:ring-indigo-800 sm:ml-8"
                            href="javascript:void(0)">
                            <div class="px-4 py-2 text-gray-600 rounded-md hover:text-indigo-700 hover:bg-indigo-100 ">
                                <p>Nieopublikowane</p>
                            </div>
                        </a>
                    </div>
                    <button onclick="popuphandler(true)"
                        class="inline-flex items-start justify-start px-6 py-3 mt-4 bg-indigo-600 rounded focus:ring-2 focus:ring-offset-2 focus:ring-indigo-600 sm:mt-0 hover:bg-indigo-600 focus:outline-none">
                        <p class="text-sm font-medium leading-none text-white">Nowy post</p>
                    </button>
                </div>
                <div class="overflow-x-auto mt-7">
                    <table class="w-full whitespace-nowrap">
                        <tbody>
                            <tr tabindex="0" class="h-16 border border-gray-100 rounded focus:outline-none">
                                <td>
                                    <div class="ml-5">
                                        <div
                                            class="relative flex items-center justify-center flex-shrink-0 w-5 h-5 bg-gray-200 rounded-sm">
                                            <input placeholder="checkbox" type="checkbox"
                                                class="absolute w-full h-full opacity-0 cursor-pointer focus:opacity-100 checkbox" />
                                            <div class="hidden text-white bg-indigo-700 rounded-sm check-icon">
                                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg7.svg"
                                                    alt="check-icon">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="">
                                    <div class="flex items-center pl-5">
                                        <p class="mr-2 text-base font-medium leading-none text-gray-700">Szkolenie
                                            nowych strażaków</p>
                                    </div>
                                </td>
                                <td class="pl-24">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg2.svg"
                                            alt="tag">
                                        <p class="ml-2 text-sm leading-none text-gray-600">Urgent</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg3.svg"
                                            alt="list">
                                        <p class="ml-2 text-sm leading-none text-gray-600">04/07</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg4.svg"
                                            alt="chat">
                                        <p class="ml-2 text-sm leading-none text-gray-600">23</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg5.svg"
                                            alt="paper clip">
                                        <p class="ml-2 text-sm leading-none text-gray-600">04/07</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <button
                                        class="px-3 py-3 text-sm leading-none text-red-700 bg-red-100 rounded focus:outline-none">Due
                                        today at 18:00</button>
                                </td>
                                <td class="pl-4">
                                    <button
                                        class="px-5 py-3 text-sm leading-none text-gray-600 bg-gray-100 rounded focus:ring-2 focus:ring-offset-2 focus:ring-red-300 hover:bg-gray-200 focus:outline-none">View</button>
                                </td>
                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="rounded-md focus:ring-2 focus:outline-none"
                                            onclick="dropdownFunction(this)" role="button" aria-label="option">
                                            <img class="dropbtn" onclick="dropdownFunction(this)"
                                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg6.svg"
                                                alt="dropdown">
                                        </button>
                                        <div
                                            class="absolute right-0 z-30 hidden w-24 mr-6 bg-white shadow dropdown-content">
                                            <div tabindex="0"
                                                class="w-full px-4 py-4 text-xs cursor-pointer focus:outline-none focus:text-indigo-600 hover:bg-indigo-700 hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0"
                                                class="w-full px-4 py-4 text-xs cursor-pointer focus:outline-none focus:text-indigo-600 hover:bg-indigo-700 hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="h-3"></tr>
                            <tr tabindex="0" class="h-16 border border-gray-100 rounded focus:outline-none">
                                <td>
                                    <div class="ml-5">
                                        <div
                                            class="relative flex items-center justify-center flex-shrink-0 w-5 h-5 bg-gray-200 rounded-sm">
                                            <input placeholder="checkbox" type="checkbox"
                                                class="absolute w-full h-full opacity-0 cursor-pointer focus:opacity-100 checkbox" />
                                            <div class="hidden text-white bg-indigo-700 rounded-sm check-icon">
                                                <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg7.svg"
                                                    alt="check-icon">
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td class="focus:text-indigo-600 ">
                                    <div class="flex items-center pl-5">
                                        <p class="mr-2 text-base font-medium leading-none text-gray-700">UX Wireframes
                                        </p>
                                    </div>
                                </td>
                                <td class="pl-24">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg2.svg"
                                            alt="tag">
                                        <p class="ml-2 text-sm leading-none text-gray-600">Urgent</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg3.svg"
                                            alt="list">
                                        <p class="ml-2 text-sm leading-none text-gray-600">04/07</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg4.svg"
                                            alt="chat">
                                        <p class="ml-2 text-sm leading-none text-gray-600">23</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <div class="flex items-center">
                                        <img src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg5.svg"
                                            alt="paper clip">
                                        <p class="ml-2 text-sm leading-none text-gray-600">04/07</p>
                                    </div>
                                </td>
                                <td class="pl-5">
                                    <button
                                        class="px-6 py-3 text-sm leading-none text-gray-700 bg-gray-100 rounded focus:outline-none">Due
                                        on 21.02.21</button>
                                </td>
                                <td class="pl-4">
                                    <button
                                        class="px-5 py-3 text-sm leading-none text-gray-600 bg-gray-100 rounded focus:ring-2 focus:ring-offset-2 focus:ring-red-300 hover:bg-gray-200 focus:outline-none">View</button>
                                </td>
                                <td>
                                    <div class="relative px-5 pt-2">
                                        <button class="rounded-md focus:ring-2 focus:outline-none"
                                            onclick="dropdownFunction(this)" role="button" aria-label="option">
                                            <img class="dropbtn" onclick="dropdownFunction(this)"
                                                src="https://tuk-cdn.s3.amazonaws.com/can-uploader/tasks-svg6.svg"
                                                alt="dropdown">
                                        </button>
                                        <div
                                            class="absolute right-0 z-30 hidden w-24 mr-6 bg-white shadow dropdown-content">
                                            <div tabindex="0"
                                                class="w-full px-4 py-4 text-xs cursor-pointer focus:outline-none focus:text-indigo-600 hover:bg-indigo-700 hover:text-white">
                                                <p>Edit</p>
                                            </div>
                                            <div tabindex="0"
                                                class="w-full px-4 py-4 text-xs cursor-pointer focus:outline-none focus:text-indigo-600 hover:bg-indigo-700 hover:text-white">
                                                <p>Delete</p>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                            </tr>


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <style>
            .checkbox:checked+.check-icon {
                display: flex;
            }
        </style>




    </div>
</x-admin-layout>