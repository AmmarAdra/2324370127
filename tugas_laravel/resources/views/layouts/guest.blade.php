<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>{{ config('app.name', 'Laravel') }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="bg-gray-100 min-h-screen flex items-center justify-center px-4">

    <div class="w-full max-w-md bg-white p-8 rounded-xl shadow-lg">
        {{ $slot }}

        <div class="mt-6 text-center text-xs text-gray-400">
            &copy; {{ now()->year }} {{ config('app.name') }}. All rights reserved.
        </div>
    </div>

</body>
</html>
