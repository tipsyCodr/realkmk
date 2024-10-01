<x-app-layout>
    
    @foreach ($ads as $ad)
        {{ $ad->name }}
    @endforeach

</x-app-layout>
