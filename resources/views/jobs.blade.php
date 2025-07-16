<x-layout>
    <x-slot:page>Job</x-slot>
    <h1>Jobs page</h1>

    <ul>
        @foreach($jobs as $job)
            <li><a href='/job/{{ $job['id']}}' class="text-blue-500 hover:underline"> {{ $job['id']}}   - {{ $job['title']}}  - {{ $job['salary']}}</a> </li>
        @endforeach
    </ul>
</x-layout>