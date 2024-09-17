{{-- If your happiness depends on money, you will never be happy with yourself. --}}

<div>
    @if ($currentStep == 1)
        <div class="job-form">
            @foreach ($categories as $category)
                <a href="#" wire:click="setCategory({{ $category->id }})">{{ $category->id }}.
                    {{ $category->name }}</a>
            @endforeach
        </div>
    @endif

    @if ($currentCategory == 1 && $currentStep == 2)
        <div class="job-form">
            @foreach ($categoryTypes as $categoryType)
                <a href="#" wire:click="setCategoryType({{ $categoryType->id }})">{{ $categoryType->name }}</a>

                {{ $categoryType->name }}
            @endforeach
        </div>
    @endif

</div>
