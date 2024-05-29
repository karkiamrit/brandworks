{{--<!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <meta charset="UTF-8">--}}
{{--    <meta name="viewport" content="width=device-width, initial-scale=1.0">--}}
{{--    <title>Home</title>--}}
{{--    @vite('resources/css/app.css')--}}
{{--</head>--}}
{{--<body class="bg-gray-200">--}}
{{--    <!-- Navigation Bar -->--}}
{{--    <nav class="flex items-center justify-between p-6 bg-white shadow">--}}
{{--        <div>--}}
{{--            <a class="text-2xl font-bold" href="#">Navbar</a>--}}
{{--        </div>--}}
{{--        <div>--}}
{{--            <ul class="flex space-x-4">--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-gray-500 hover:text-red-500" href="#">Home</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-gray-500 hover:text-red-500" href="#">Features</a>--}}
{{--                </li>--}}
{{--                <li class="nav-item">--}}
{{--                    <a class="nav-link text-gray-500 hover:text-red-500" href="#">Pricing</a>--}}
{{--                </li>--}}
{{--            </ul>--}}
{{--        </div>--}}
{{--    </nav>--}}

{{--    <!-- Logo and Center Content -->--}}
{{--    <div class="container mx-auto flex items-center justify-center">--}}
{{--        <div class="text-center">--}}
{{--            <img src="{{ asset('home/logo.png') }}" alt="Logo" class="mx-auto">--}}
{{--        </div>--}}
{{--    </div>--}}

{{--    @vite('resources/js/app.js')--}}
{{--</body>--}}
{{--</html>--}}

<x-guest-layout>
        <!-- Logo and Center Content -->
        <div class="container mx-auto flex items-center justify-center">
            <div class="text-center">
                <img src="{{ asset('home/logo.png') }}" alt="Logo" class="mx-auto">
            </div>
        </div>
</x-guest-layout>
