<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">

    <title>{{ config('app.name') }}</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.min.js" defer></script>

    <!-- Styles -->


    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }

    </style>
</head>

<body>
    <div class="min-h-screen flex">
        <div class="py-12 px-10 w-1/4">
            <div class="flex space-2 items-center border-b-2 pb-4">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg" class="h-14 w-14 text-indigo-600" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M3.055 11H5a2 2 0 012 2v1a2 2 0 002 2 2 2 0 012 2v2.945M8 3.935V5.5A2.5 2.5 0 0010.5 8h.5a2 2 0 012 2 2 2 0 104 0 2 2 0 012-2h1.064M15 20.488V18a2 2 0 012-2h3.064M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                    </svg>
                </div>
                <div class="ml-3">
                    <h1 class="text-3xl font-bold text-indigo-600">{{ config('app.name') }}</h1>
                    <p class="text-center text-sm text-indigo-600 mt-1 font-serif">DASHBOARD</p>
                </div>
            </div>

            <div class="mt-8">
                <ul class="space-y-10 {{ (request()->is('Productos')) ? 'space-x-4 mt-6 p-2 bg-indigo-600 text-white' : 'text-gray-500' }}">                 
                    <li>
                        <a href="{{route('Productos.index')}}"
                            class="flex items-center text-sm font-semibold  hover:text-indigo-600 transition duration-200">
                            <svg xmlns="http://www.w3.org/2000/svg"
                                class="h-6 w-6 mr-4  hover:text-indigo-600 transition duration-200"
                                viewBox="0 0 20 20" fill="currentColor">
                                <path
                                    d="M2 11a1 1 0 011-1h2a1 1 0 011 1v5a1 1 0 01-1 1H3a1 1 0 01-1-1v-5zM8 7a1 1 0 011-1h2a1 1 0 011 1v9a1 1 0 01-1 1H9a1 1 0 01-1-1V7zM14 4a1 1 0 011-1h2a1 1 0 011 1v12a1 1 0 01-1 1h-2a1 1 0 01-1-1V4z" />
                            </svg>
                            Productos</a>
                    </li>


                </ul>
            </div>
            <div class="flex mt-20 space-x-4 items-center">
                <div>
                    <svg xmlns="http://www.w3.org/2000/svg"
                        class="h-6 w-6 text-gray-400 hover:text-indigo-600 transition duration-200" fill="none"
                        viewBox="0 0 24 24" stroke="currentColor">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1" />
                    </svg>
                </div>
                <a href="{{route('logout')}}"
                    class="block font-semibold text-gray-500 hover:text-indigo-600 transition duration-200">Salir</a>
            </div>
        </div>
        <div class="bg-indigo-50 flex-grow py-12 px-10 ">
            @yield('content')

        </div>
    </div>
</body>


</html>
