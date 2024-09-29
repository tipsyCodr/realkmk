<footer style="text-align: center;">
    <footer class="mb-[100px]">
        <div class="ads w-full flex justify-center items-center">
            @php
                $ads = \App\Models\Ad::inRandomOrder()->first();
            @endphp
            @if ($ads)
                <a class="block max-w-xl w-full mx-4 mb-4 flex justify-center" href="{{ $ads->url }}" target="_blank">
                    <img class="mx-auto"
                        src="{{ asset('storage/uploads/ad_images/' . $ads->location . '/' . $ads->location . '_' . $ads->image) }}" />
                </a>
            @endif
        </div>
        <div class="environment">
            <p>Copyright © 2024 RealKMK. All rights reserved.</p>
        </div>

        <div class="copyrights mb-32">
            <p>Designed and developed by <a href="https://www.facebook.com/vshlkumar566">Hemant Kumar</a>
            </p>
        </div>
    </footer>
    </body>
    @vite('resources/js/app.js')
