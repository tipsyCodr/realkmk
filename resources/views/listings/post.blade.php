<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
<x-app-layout>
    <div class="wrapper ">
        <h1 class="font-bold text-3xl text-center py-2"> Include Some Details.</h1>
        @if ($categoryType->slug === 'houses-and-apartments-for-sale' || $categoryType->slug === 'shops-and-offices-for-sale')
            <x-property-form :category="$category" :categoryType="$categoryType" :states="$states" :cities="$cities" />
        @endif
        @if ($category->slug === 'jobs')
            <x-job-form :category="$category" :categoryType="$categoryType" :states="$states" :cities="$cities" />
        @endif
        @if ($categoryType->slug === 'land-and-plot')
            <x-land-form :category="$category" :categoryType="$categoryType" :states="$states" :cities="$cities" />
        @endif
    </div>
</x-app-layout>
