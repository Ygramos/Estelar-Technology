@extends('layouts.user')
@section('content')
    <main class=" ">
        <div class="container flex flex-col px-6  mx-auto space-y-6 md:h-128  py-4 md:flex-row md:items-center md:space-x-6">
            <div class="flex flex-col items-center w-full md:flex-row md:w-1/3">
                <div class="flex justify-center order-2 mt-6 md:mt-0 md:space-y-3 md:flex-col">
                    <button class="w-3 h-3 mx-2 bg-blue-500 rounded-full md:mx-0 focus:outline-none"></button>
                    <button
                        class="w-3 h-3 mx-2 bg-gray-300 rounded-full md:mx-0 focus:outline-none hover:bg-blue-500"></button>
                    <button
                        class="w-3 h-3 mx-2 bg-gray-300 rounded-full md:mx-0 focus:outline-none hover:bg-blue-500"></button>
                    <button
                        class="w-3 h-3 mx-2 bg-gray-300 rounded-full md:mx-0 focus:outline-none hover:bg-blue-500"></button>
                </div>

                <div class="max-w-lg md:mx-12 md:order-2">
                    <h1 class="text-3xl font-medium tracking-wide text-gray-800 dark:text-white md:text-4xl">Lo mejor para
                        usted y su familia</h1>
                    <p class="mt-4 text-gray-600 dark:text-gray-300">
                        Imac de 21.5 pulgadas, Intel i5, 8gb ram, 1tb, placa de video nvidia g force.
                    </p>
                    <div class="mt-6">
                        <a href="#"
                            class="block px-3 py-2 capitalize font-semibold text-center text-white transition-colors duration-200 transform bg-blue-500 rounded-md md:inline hover:bg-blue-400">
                            agregar al carrito</a>
                    </div>
                </div>
            </div>

            <div class="flex items-center justify-center w-full h-96 ">
                <img class=" w-full h-full rounded-md"
                    src="https://traguatan.com/img/cms/COMPUTADOR%20PORTATIL%202%20EN%201%20BMAX%20MAXBOOK%20Y13/3.jpg"
                    alt="">
            </div>
        </div>
        <div class="container mx-auto px-6">
            <div class="h-96 rounded-md overflow-hidden bg-cover bg-center"
                style="background-image: url('https://traguatan.com/img/cms/COMPUTADOR%20PORTATIL%202%20EN%201%20BMAX%20MAXBOOK%20Y13/1.jpg')">
                <div class="bg-gray-900 bg-opacity-50 flex items-center h-full">
                    <div class="px-10 max-w-xl">

                        <button
                            class="flex items-center mt-4 px-3 py-2 bg-blue-600 text-white text-sm uppercase font-medium rounded hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                            <span>Comprar Ahora</span>
                            <svg class="h-5 w-5 mx-2" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                <path d="M17 8l4 4m0 0l-4 4m4-4H3"></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <div class="mt-16 px-10">
                <h3 class="text-gray-600 text-2xl font-medium">Computadores</h3>
                <div class="grid gap-6 grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 mt-6">
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-72 w-full bg-cover"
                            style="background-image: url('https://traguatan.com/3545-large_default/computador-portatil-bmax-maxbook-y13.jpg')">
                            <button
                                class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Computador Portatil 2 en 1 Bmax MaxBook Y13</h3>
                            <span class="text-gray-500 mt-2">$ 1.649.950</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-72  w-full bg-cover"
                            style="background-image: url('https://traguatan.com/4185-medium_default/computador-portatil-dere-v14s.jpg')">
                            <button
                                class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Portátil Dere V14S | Ram 12GB</h3>
                            <span class="text-gray-500 mt-2">$ 1.649.950</span>
                        </div>
                    </div>
                    <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                        <div class="flex items-end justify-end h-72 w-full bg-cover"
                            style="background-image: url('https://traguatan.com/3760-medium_default/computador-portatil-ryzen-5maibenben-m545-.jpg')">
                            <button
                                class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                    stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                    <path
                                        d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                    </path>
                                </svg>
                            </button>
                        </div>
                        <div class="px-5 py-3">
                            <h3 class="text-gray-700 uppercase">Portatil Ryzen™5 Maibenben M545</h3>
                            <span class="text-gray-500 mt-2">$ 2.999.950</span>
                        </div>
                    </div>
                    
                    @foreach ($productos as $producto)
                        <div class="w-full max-w-sm mx-auto rounded-md shadow-md overflow-hidden">
                            <div class="flex items-end justify-end h-72  w-full bg-cover object-cover"
                                style="background-image: url('{{asset($producto->img_url)}}')">
                                <button
                                    class="p-2 rounded-full bg-blue-600 text-white mx-5 -mb-4 hover:bg-blue-500 focus:outline-none focus:bg-blue-500">
                                    <svg class="h-5 w-5" fill="none" stroke-linecap="round" stroke-linejoin="round"
                                        stroke-width="2" viewBox="0 0 24 24" stroke="currentColor">
                                        <path
                                            d="M3 3h2l.4 2M7 13h10l4-8H5.4M7 13L5.4 5M7 13l-2.293 2.293c-.63.63-.184 1.707.707 1.707H17m0 0a2 2 0 100 4 2 2 0 000-4zm-8 2a2 2 0 11-4 0 2 2 0 014 0z">
                                        </path>
                                    </svg>
                                </button>   
                            </div>
                            <div class="px-5 py-3">
                                <h3 class="text-gray-700 uppercase">{{$producto->nombre_producto}}</h3>
                                <span class="text-gray-500 mt-2">${{ number_format( $producto->valor, 0) }}</span>
                            </div>
                        </div>
                    @endforeach

                </div>
            </div>
        </div>
    </main>


@endsection
