<x-layout>
    <x-slot:page>Job</x-slot>

            <h1 class="font-bold text-lg text-blue-500 py-10">{{ $job['title']}}</h1>
            <p> This job pays  - {{ $job['salary']}}</p>
            <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
        {{-- @endforeach --}}
    </ul>
</x-layout>