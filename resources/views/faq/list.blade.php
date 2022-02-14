<x-app-layout>
    <h2>Lista pytań i odpowiedzi</h2>
    <table class="border table-auto">
        <tr>
            <td>ID</td>
            <td>Pytanie</td>
            <td>Odpowiedź</td>
            <td>Akcja</td>
        </tr>
        @foreach ($faqs as $faq)
        <tr>
            <td>{{$faq->id}}</td>
            <td>{{$faq->question}}</td>
            <td>{{$faq->answear}}</td>
            <td>
                <a href="{{ route('faq.edit', $faq->id) }}">Edit</a>
            </td>
        </tr>
        @endforeach
    </table>
</x-app-layout>