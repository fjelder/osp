<x-admin-layout>


    <div class="my-10 space-y-3">
        <h2>Zarząd OSP</h2>21php
        @foreach(DB::select('select * from management') as $person)
        <div class="flex items-center justify-start space-x-3">
            <input type="text" value="{{$person->order}}" class="w-10 text-center bg-transparent border-0"
                disabled="disabled">
            <input type="text" value="{{$person->name}}" class="bg-transparent border-0 border-b">
            <input type="text" value="{{$person->position}}" class="bg-transparent border-0 border-b">
            <img src="{{ Storage::url($person->profilePhotoPath) }}" alt="Man"
                class="inline-block w-8 h-8 rounded-full">
            <input type="file" class="text-slate-300">
            <button class="px-3 py-1 transition-colors border rounded-md hover:bg-slate-400">
                <x-heroicon-o-check class="h-5" />
            </button>
            @if($loop->last)
            <button class="px-3 py-1 transition-colors border rounded-md hover:bg-red-400">
                <x-heroicon-o-trash class="h-5" />
            </button>
            @endif
        </div>
        @endforeach

    </div>

</x-admin-layout>