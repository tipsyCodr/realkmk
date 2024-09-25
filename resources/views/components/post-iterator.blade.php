@php
    use App\Http\Controllers\AdController;
    $ad_cont = new AdController();
@endphp

<div class="grid grid-cols-2 sm:grid-cols-1 md:grid-cols-3 xl:grid-cols-4 gap-4">
    <?php $adCount = 0; ?>
    @foreach ($posts as $post)
        <x-post-item :post="$post" />
        @if ($loop->iteration == 2 || $loop->iteration % 6 == 0)
            <?php $adCount++; ?>
            <!-- Show ad here -->
            <div class="col-span-2 sm:col-span-1 md:col-span-1 xl:col-span-1">
                <x-ad :ad="$ad_cont->getAd($adCount)" />
            </div>
        @endif
    @endforeach
</div>
