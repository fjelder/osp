<x-admin-layout>
    Lorem ipsum, dolor sit amet consectetur adipisicing elit. Odio, sed esse rerum quaerat incidunt quis dolor doloribus
    eligendi exercitationem cum quasi praesentium, reprehenderit officiis tempora unde. Nobis, tenetur accusantium? Cum
    provident sed sapiente minima. Repellendus dignissimos hic fugiat quibusdam ea, architecto accusamus veritatis
    itaque perferendis expedita aut temporibus harum. Quo vel iusto nam officiis ab vero odio et, adipisci consequuntur
    obcaecati nemo, optio dolores, nisi asperiores eius at. Architecto fugiat, cum dolorum optio dolorem deserunt, natus
    eius quo provident exercitationem repellat vitae. Repellendus id nobis a quos, veniam exercitationem officia
    aspernatur similique ullam, architecto ex reiciendis et aut harum tempora!git a

    <div class="my-10 space-y-3">
        <h2>Zarząd OSP</h2>21php
        @foreach(DB::select('select * from management2') as $person)
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