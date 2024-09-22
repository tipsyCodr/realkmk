<!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
<x-app-layout>
    <div class="wrapper ">
        <h1 class="font-bold text-3xl text-center py-2"> Include some details.</h1>
        @if ($category->slug === 'properties')
            <x-property-form :category="$category" :categoryType="$categoryType" :states="$states" :cities="$cities" />
        @endif
        @if ($category->slug === 'jobs')
            <x-job-form :category="$category" :categoryType="$categoryType" :states="$states" :cities="$cities" />
        @endif
    </div>
</x-app-layout>
