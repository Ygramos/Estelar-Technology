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



</head>

<body>
    <div class="flex items-center min-h-screen bg-white dark:bg-gray-900">
        <div class="container mx-auto">
            <div class="max-w-md mx-auto my-10">
                <div class="text-center">
                    <h1 class="my-3 text-3xl font-semibold text-gray-700 dark:text-gray-200">Registrar</h1>
                    <p class="text-gray-500 dark:text-gray-400">Registrese en nuestro sitio web y obtenga descuentos en
                        nuestros productos.</p>
                </div>
                <div class="m-7">
                    <form action="{{ route('newUser') }}" method="POST">
                        @csrf
                        <div class="mb-6">
                            <label for="name" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Nombres
                            </label>
                            <input type="text" name="name" id="nombre" placeholder="andres camilo"
                                class="w-full px-3 py-2  @error('name') bg-red-100 @enderror placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            @error('name')
                                <div class=" p-2 border-l-2 border-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <label for="email" class="block mb-2 text-sm text-gray-600 dark:text-gray-400">Email
                            </label>
                            <input type="email" name="email" id="email" placeholder="you@mail.com"
                                class="w-full px-3 py-2  @error('email') bg-red-100 @enderror placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />
                            @error('email')
                                <div class=" p-2 border-l-2 border-red-500">{{ $message }}</div>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <div class="flex justify-between mb-2">
                                <label for="password" class="text-sm text-gray-600 dark:text-gray-400">Password</label>
                                {{-- <a href="#!"
                                    class="text-sm text-gray-400 focus:outline-none focus:text-indigo-500 hover:text-indigo-500 dark:hover:text-indigo-300">Forgot
                                    password?</a> --}}
                            </div>
                            <input type="password" name="password" id="password" placeholder="Your Password"
                                class="w-full px-3 py-2 @error('password') bg-red-100 @enderror placeholder-gray-300 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-indigo-100 focus:border-indigo-300 dark:bg-gray-700 dark:text-white dark:placeholder-gray-500 dark:border-gray-600 dark:focus:ring-gray-900 dark:focus:border-gray-500" />

                            @error('password')
                                <div class=" p-2 border-l-2 border-red-500">{{ $message }}</div>
                            @enderror
                        </div>
                        <div class="mb-6">
                            <button type="submit"
                                class="w-full px-3 py-4 text-white bg-indigo-500 rounded-md focus:bg-indigo-600 focus:outline-none">registrar</button>
                        </div>
                        <p class="text-sm text-center text-gray-400">ya tienes una cuenta? <a
                                href="{{ route('login') }}"
                                class="text-indigo-400 focus:outline-none focus:underline focus:text-indigo-500 dark:focus:border-indigo-800">Login</a>.
                        </p>
                    </form>
                </div>
            </div>
        </div>
    </div>

</body>


</html>
