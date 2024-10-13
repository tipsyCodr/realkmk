<x-admin-layout>
    <h1 class="font-bold text-4xl p-4 text-center">
        Admin Panel
    </h1>
    <div class="flex w-full flex-col sm:flex-row p-2 justify-center items-center ">
        <article
            class="mx-4  mt-10 hover:animate-background rounded-xl bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 p-0.5 shadow-xl transition hover:bg-[length:400%_400%] hover:shadow-sm hover:[animation-duration:_4s]">
            <a href="{{ route('admin.listings.list') }}">
                <div class="rounded-[10px] bg-white p-4 !pt-20 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-gray-500"> Listings </time>
                    <a href="{{ route('admin.listings.list') }}">
                        <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                            View Listings For Properties
                        </h3>
                    </a>
                    <div class="mt-4 flex flex-wrap gap-1">
                        <a href="{{ route('admin.listings.list') }}"
                            class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-1.5 text-xs text-purple-600">
                            Properties
                        </a>
                    </div>
                </div>
            </a>
        </article>
        <article
            class="mx-4  mt-10 hover:animate-background rounded-xl bg-gradient-to-r from-green-300 via-blue-500 to-purple-600 p-0.5 shadow-xl transition hover:bg-[length:400%_400%] hover:shadow-sm hover:[animation-duration:_4s]">
            <a class='w-full h-full' href="{{ route('admin.requests.list') }}">
                <div class="rounded-[10px] bg-white p-4 !pt-20 sm:p-6">
                    <time datetime="2022-10-10" class="block text-xs text-gray-500"> Requests </time>
                    <a href="{{ route('admin.requests.list') }}">
                        <h3 class="mt-0.5 text-lg font-medium text-gray-900">
                            View Request For Job and Properties
                        </h3>
                    </a>
                    <div class="mt-4 flex flex-wrap gap-1">
                        <a href="{{ route('admin.requests.jobs.list') }}"
                            class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-1.5  text-xs text-purple-600">
                            Properties
                        </a>
                        <a href="{{ route('admin.requests.properties.list') }}"
                            class="whitespace-nowrap rounded-full bg-purple-100 px-2.5 py-1.5  text-xs text-purple-600">
                            Job
                        </a>
                    </div>
                </div>
            </a>
        </article>
    </div>
</x-admin-layout>
