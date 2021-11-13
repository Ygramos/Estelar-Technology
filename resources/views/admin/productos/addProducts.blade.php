@extends('layouts.admin')
@section('content')
    @if ($errors->any())
        <section class="py-1 " x-data="{ showModal1: true}" :class="{'overflow-y-hidden': showModal1 }">
        @else
            <section class="py-1 " x-data="{ showModal1: false}" :class="{'overflow-y-hidden': showModal1 }">
    @endif
    <div class="w-full xl:mb-0 px-4 mx-auto ">
        <div class="relative flex flex-col min-w-0 break-words bg-white w-full mb-6 shadow-lg rounded ">
            <div class="rounded-t mb-0 px-4 py-3 border-0">
                <div class="flex flex-wrap items-center">
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1">
                        <h3 class="font-semibold text-base text-blueGray-700">Productos agregados</h3>
                    </div>
                    <div class="relative w-full px-4 max-w-full flex-grow flex-1 text-right">
                        <button @click="showModal1 = true"
                            class="bg-indigo-500 text-white active:bg-indigo-600 text-xs font-bold uppercase px-3 py-1 rounded outline-none focus:outline-none mr-1 mb-1 ease-linear transition-all duration-150"
                            type="button">Agregar</button>

                    </div>
                </div>
            </div>

            <div class="block w-full overflow-x-auto">
                <table class="items-center bg-transparent w-full border-collapse ">
                    <thead>
                        <tr>
                            <th
                                class="px-6 bg-gray-100 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                id
                            </th>
                            <th
                                class="px-6 bg-gray-100 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                nombre
                            </th>
                            <th
                                class="px-6 bg-gray-100 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                codigo
                            </th>
                            <th
                                class="px-6 bg-gray-100 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                valor
                            </th>
                            <th
                                class="px-6 bg-gray-100 text-blueGray-500 align-middle border border-solid border-blueGray-100 py-3 text-xs uppercase border-l-0 border-r-0 whitespace-nowrap font-semibold text-left">
                                opciones
                            </th>
                        </tr>
                    </thead>

                    <tbody>
                        @foreach ($productos as $producto)
                            <tr>
                                <th
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4 text-left text-blueGray-700">
                                    {{ $producto->id }}
                                </th>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $producto->nombre_producto }}

                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    {{ $producto->codigo_producto }}

                                </td>
                                <td
                                    class="border-t-0 px-6 align-middle border-l-0 border-r-0 text-xs whitespace-nowrap p-4">
                                    <i class="fas fa-arrow-down text-red-500 mr-4"></i>
                                    {{ $producto->valor }}

                                </td>
                                <td>
                                    {{-- <button class=" p-2 m-1 bg-indigo-500 text-white rounded">
                                        editar
                                    </button>
                                    <button class=" p-2 m-1 bg-red-500 text-white rounded">
                                        eliminar
                                    </button> --}}


                                    <div x-data="{ open: false }">
                                        <button
                                            class="p-2 border border-indigo-500 rounded-md hover:bg-indigo-700 hover:text-white mx-2"
                                            @click="open = true">Editar</button>
                                        <!-- Dialog (full screen) -->



                                        <div class="fixed z-10 inset-0 overflow-y-auto" x-show="open">

                                            <div class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto"
                                                x-show="open" x-transition:enter="transition duration-300"
                                                x-transition:enter-start="opacity-0" x-transition:enter-end="opacity-100"
                                                x-transition:leave="transition duration-300"
                                                x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
                                                <div
                                                    class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
                                                    <div class="relative bg-white shadow-lg rounded-md text-gray-900 z-20"
                                                        @click.away="open = false" x-show="open"
                                                        x-transition:enter="transition transform duration-300"
                                                        x-transition:enter-start="scale-0"
                                                        x-transition:enter-end="scale-100"
                                                        x-transition:leave="transition transform duration-300"
                                                        x-transition:leave-start="scale-100"
                                                        x-transition:leave-end="scale-0">
                                                        <header class="flex items-center justify-between p-2">
                                                            <h2 class="font-semibold">Actualizar productos </h2>
                                                            <button class="focus:outline-none p-2" @click="open = false">
                                                                <svg class="fill-current"
                                                                    xmlns="http://www.w3.org/2000/svg" width="18"
                                                                    height="18" viewBox="0 0 18 18">
                                                                    <path
                                                                        d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                                                                    </path>
                                                                </svg>
                                                            </button>
                                                        </header>

                                                        <form method="POST"
                                                            action="{{ route('update.Productos', ['id' => $producto->id]) }}"
                                                            enctype=" multipart/form-data">
                                                            @csrf
                                                            <main class=" text-center overflow-auto ">
                                                                <div class=" bg-gray-100  flex flex-col justify-center ">
                                                                    <div class="relative  w-11/12 max-w-xl sm:mx-auto">
                                                                        <div
                                                                            class="relative p-2 my-2 bg-white shadow-sm sm:rounded-xl">
                                                                            <div class="mb-5 relative">
                                                                                <input type="text" name="nombre_producto"
                                                                                    value="{{ $producto->nombre_producto }}"
                                                                                    class="peer pt-8 border border-gray-200  focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                                                                                    placeholder="portatil levono"
                                                                                    autocomplete="off" />
                                                                                <label for="nombre_producto"
                                                                                    class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">
                                                                                    nombre del producto</label>

                                                                            </div>
                                                                            <div class="mb-5 relative">
                                                                                <input type="text" name="codigo_producto"
                                                                                    value="{{ $producto->codigo_producto }}"
                                                                                    class="peer pt-8 border border-gray-200    focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                                                                                    placeholder="password"
                                                                                    autocomplete="off" />
                                                                                <label for="codigo_producto"
                                                                                    class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Cod-Producto</label>

                                                                            </div>
                                                                            <div class="mb-5 relative">
                                                                                <input type="text" name="valor"
                                                                                    value="{{ $producto->valor }}"
                                                                                    class="peer pt-8 border border-gray-200 r  focus:outline-none rounded-md
                                                     focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                                                                                    placeholder="valor_producto"
                                                                                    autocomplete="off" />
                                                                                <label for="valor_producto"
                                                                                    class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75
                                                     peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0
                                                      -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 
                                                      absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100
                                                       ease-in-out">Valor</label>

                                                                            </div>
                                                                            <div class="mb-5 relative">
                                                                                <input type="text" name="cantidad"
                                                                                    value="{{ $producto->cantidad }}"
                                                                                    class="peer pt-8 border border-gray-200  focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                                                                                    placeholder="password"
                                                                                    autocomplete="off" />
                                                                                <label for="cantidades"
                                                                                    class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 
                                                    peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 
                                                    peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 
                                                    h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">cantidades</label>

                                                                            </div>


                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </main>
                                                            <footer class="flex justify-center p-2">
                                                                <button type="submit"
                                                                    class="w-full bg-indigo-600 text-white p-3 rounded-md">Guardar</button>
                                                            </footer>
                                                        </form>

                                                    </div>
                                                </div>
                                            </div>

                                        </div>
                                    </div>
                                    <div x-data="{ openDelete: false }">
                                        <button
                                            class="p-2 border border-red-500 rounded-md hover:bg-red-700 hover:text-white"
                                            @click="openDelete = true">
                                            Eliminar
                                        </button>

                                        <div class="fixed z-10 inset-0 overflow-y-auto" x-show="openDelete">
                                            <form method="POST"
                                                action="{{ route('delete.productos', ['id' => $producto->id]) }}">
                                                @csrf
                                                <div
                                                    class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
                                                    <div class="fixed inset-0 bg-black bg-opacity-40 transition-opacity"
                                                        @click="openDelete = false"></div>

                                                    <!-- This element is to trick the browser into centering the modal contents. -->
                                                    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"
                                                        aria-hidden="true">&#8203;</span>


                                                    <div
                                                        class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full">
                                                        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
                                                            <div class="sm:flex sm:items-start">
                                                                <div
                                                                    class="mx-auto flex-shrink-0 flex items-center justify-center h-12 w-12 rounded-full bg-red-100 sm:mx-0 sm:h-10 sm:w-10">
                                                                    <!-- Heroicon name: outline/exclamation -->
                                                                    <svg class="h-6 w-6 text-red-600"
                                                                        xmlns="http://www.w3.org/2000/svg" fill="none"
                                                                        viewBox="0 0 24 24" stroke="currentColor"
                                                                        aria-hidden="true">
                                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                                            stroke-width="2"
                                                                            d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z" />
                                                                    </svg>
                                                                </div>
                                                                <div class="mt-3 text-center sm:mt-0 sm:ml-4 sm:text-left">
                                                                    <h3 class="text-lg leading-6 font-medium text-gray-900"
                                                                        id="modal-title">
                                                                        Eliminar registro
                                                                    </h3>
                                                                    <div class="mt-2">
                                                                        <p class="text-sm text-gray-500">
                                                                            Esta seguro de eliminar este
                                                                            registro
                                                                        </p>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div
                                                            class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
                                                            <button type="submit"
                                                                class="w-full inline-flex justify-center rounded-md border border-transparent shadow-sm px-4 py-2 bg-red-600 text-base font-medium text-white hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-red-500 sm:ml-3 sm:w-auto sm:text-sm">
                                                                Eliminar
                                                            </button>
                                                            <button type="button" @click="openDelete = false"
                                                                class="mt-3 w-full inline-flex justify-center rounded-md border border-gray-300 shadow-sm px-4 py-2 bg-white text-base font-medium text-gray-700 hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 sm:mt-0 sm:ml-3 sm:w-auto sm:text-sm">
                                                                Cancel
                                                            </button>
                                                        </div>
                                                    </div>
                                                </div>

                                            </form>

                                        </div>

                                    </div>

                                </td>
                            </tr>
                        @endforeach

                    </tbody>

                </table>
            </div>
        </div>
    </div>

    <!-- Modal1 -->
    <div class="fixed inset-0 w-full h-full z-20 bg-black bg-opacity-50 duration-300 overflow-y-auto" x-show="showModal1"
        x-transition:enter="transition duration-300" x-transition:enter-start="opacity-0"
        x-transition:enter-end="opacity-100" x-transition:leave="transition duration-300"
        x-transition:leave-start="opacity-100" x-transition:leave-end="opacity-0">
        <div class="relative sm:w-3/4 md:w-1/2 lg:w-1/3 mx-2 sm:mx-auto my-10 opacity-100">
            <div class="relative bg-white shadow-lg rounded-md text-gray-900 z-20" @click.away="showModal1 = false"
                x-show="showModal1" x-transition:enter="transition transform duration-300"
                x-transition:enter-start="scale-0" x-transition:enter-end="scale-100"
                x-transition:leave="transition transform duration-300" x-transition:leave-start="scale-100"
                x-transition:leave-end="scale-0">
                <header class="flex items-center justify-between p-2">
                    <h2 class="font-semibold">Agregar productos </h2>
                    <button class="focus:outline-none p-2" @click="showModal1 = false">
                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" width="18" height="18"
                            viewBox="0 0 18 18">
                            <path
                                d="M14.53 4.53l-1.06-1.06L9 7.94 4.53 3.47 3.47 4.53 7.94 9l-4.47 4.47 1.06 1.06L9 10.06l4.47 4.47 1.06-1.06L10.06 9z">
                            </path>
                        </svg>
                    </button>
                </header>

                <form action="{{ route('Productos.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <main class=" text-center overflow-auto ">
                        <div class=" bg-gray-100  flex flex-col justify-center ">
                            <div class="relative  w-11/12 max-w-xl sm:mx-auto">
                                <div class="relative p-2 my-2 bg-white shadow-sm sm:rounded-xl">
                                    <div class="mb-5 relative">
                                        <input type="text" name="nombre_producto" value="{{ old('nombre_producto') }}"
                                            class="peer pt-8 border border-gray-200  @error('nombre_producto') bg-red-100 @enderror focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                                            placeholder="portatil levono" autocomplete="off" />
                                        <label for="nombre_producto"
                                            class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">
                                            nombre del producto</label>
                                        @error('nombre_producto')
                                            <div class=" p-2 border-l-2 border-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-5 relative">
                                        <input type="text" name="codigo_producto" value="{{ old('codigo_producto') }}"
                                            class="peer pt-8 border border-gray-200  @error('codigo_producto') bg-red-100 @enderror  focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                                            placeholder="password" autocomplete="off" />
                                        <label for="codigo_producto"
                                            class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">Cod-Producto</label>
                                        @error('codigo_producto')
                                            <div class=" p-2 border-l-2 border-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-5 relative">
                                        <input type="text" name="valor" value="{{ old('valor') }}"
                                            class="peer pt-8 border border-gray-200 @error('valor') bg-red-100 @enderror  focus:outline-none rounded-md
                                                     focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                                            placeholder="valor_producto" autocomplete="off" />
                                        <label for="valor_producto"
                                            class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75
                                                     peer-placeholder-shown:scale-100 scale-75 peer-focus:scale-75 peer-placeholder-shown:translate-y-0
                                                      -translate-y-3 peer-focus:-translate-y-3 peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 
                                                      absolute top-0 left-0 px-3 py-5 h-full pointer-events-none transform origin-left transition-all duration-100
                                                       ease-in-out">Valor</label>
                                        @error('valor')
                                            <div class=" p-2 border-l-2 border-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="mb-5 relative">
                                        <input type="text" name="cantidad" value="{{ old('cantidad') }}"
                                            class="peer pt-8 border border-gray-200  @error('cantidad') bg-red-100 @enderror focus:outline-none rounded-md focus:border-gray-500 focus:shadow-sm w-full p-3 h-16 placeholder-transparent"
                                            placeholder="password" autocomplete="off" />
                                        <label for="cantidades"
                                            class="peer-placeholder-shown:opacity-100   opacity-75 peer-focus:opacity-75 peer-placeholder-shown:scale-100 scale-75 
                                                    peer-focus:scale-75 peer-placeholder-shown:translate-y-0 -translate-y-3 peer-focus:-translate-y-3 
                                                    peer-placeholder-shown:translate-x-0 translate-x-1 peer-focus:translate-x-1 absolute top-0 left-0 px-3 py-5 
                                                    h-full pointer-events-none transform origin-left transition-all duration-100 ease-in-out">cantidades</label>
                                        @error('cantidad')
                                            <div class=" p-2 border-l-2 border-red-500">{{ $message }}</div>
                                        @enderror
                                    </div>
                                    <div class="">
                                        <label>Imagen principal</label>
                                        <input type="file" name="imagen" id="imagen" accept="image/*">
                                    </div>

                                </div>
                            </div>
                        </div>
                    </main>
                    <footer class="flex justify-center p-2">
                        <button type="submit" class="w-full bg-indigo-600 text-white p-3 rounded-md">Guardar</button>
                    </footer>
                </form>

            </div>
        </div>
    </div>
    </section>
@endsection
