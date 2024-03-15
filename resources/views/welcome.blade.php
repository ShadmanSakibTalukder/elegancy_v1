<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>{{ config('app.name') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

        <!-- Styles -->
        @vite('resources/css/app.css')
    </head>
    <body class="bg-[#fbfbfb]">
        <div class="flex justify-between items-center px-20 mt-4 bg-white-shadow py-2">
            <img src="{{asset('images/logo.jpg')}}" alt="">

            <div class="text-2xl relative">
                <i class='bx bx-heart'></i>
                <i class='bx bxs-user-circle'></i>
                <i class='bx bx-cart'></i>
                <span class="absolute top-0 -right-2.5 bg-indigo-600 rounded-full w-4 h-4 text-xs text-white-center"> 0 </span>
            </div>

        </div>
        
    </body>
</html>
