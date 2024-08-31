<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="title" content="Real Buy Sale | No Broker, 0% Commission">
    <meta name="description"
        content="A Property listing website which Lists Properties and provide with the Buyer and seller with requirements">
    <meta name="keywords"
        content="Real Buy Sale, Property, Properties, Job, Jobs, Sell Properties, Buy Properties, Listings, Property Listings, Job Listings">
    <meta name="robots" content="index, follow">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="language" content="English">
    <meta name="author" content="Hemant Kumar @TipsyCodr">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    @vite('resources/css/app.css')
    <script src="https://code.jquery.com/jquery-3.7.1.slim.min.js"
        integrity="sha256-kmHvs0B+OpCW5GVHUNjv9rOmY0IvSIRcf7zGUDTDQM8=" crossorigin="anonymous"></script>

</head>

<body>
    <div id="app" class="mt-14 ">
        <x-head />
        <x-navbar />
        <main class="my-16 ">
            {{ $slot }}
        </main>
    </div>
    <x-footer />

</body>

</html>
