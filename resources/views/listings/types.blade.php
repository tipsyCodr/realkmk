<!-- Be present above all else. - Naval Ravikant -->
<x-app-layout>
    <div class="py-4">
        <h1  class='p-4  text-3xl font-bold'>{{ $category->name }}</h1>
        
        <ul>
            @foreach ($categoryTypes as $categoryType)
                <li>
                    <a class="block hover:bg-gray-300 py-4 px-4 border"
                    href="{{ route('listing.form', ['category' => $category->slug, 'role' => $roles, 'categoryType' => $categoryType->slug]) }}">
                        {{ $categoryType->name }}
                    </a>
                </li>
            @endforeach
        </ul>
        {{$role}}
    </div>
</x-app-layout>
