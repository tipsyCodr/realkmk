<footer style="text-align: center;">
    <footer class="mb-[100px]">
        <div class="ads w-full flex justify-center items-center">
            <?php
            $adController = new \App\Http\Controllers\AdController();
            $ad = $adController->getAd(1);
            ?>
            <x-ad :ad="$ad ?? null" />
        </div>
        <div class="environment">
            <p>Copyright © 2024 RealKMK. All rights reserved.</p>
        </div>

        <div class="copyrights mb-32">
            {{-- <p>Designed and developed by <a href="https://www.facebook.com/vshlkumar566">Hemant Kumar</a>
            </p> --}}
        </div>
    </footer>
    </body>
    @vite('resources/js/app.js')
