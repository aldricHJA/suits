@extends('layouts.plantilla')

@section('titulo', 'CRUD * Actualizar')

@section('contenido')
    <div>
        <div class="mx-9 my-8 bg-pink-300 p-16 text-white container-center text-center rounded-lg shadow-md">
            <div>
                <h1 class="text-4xl mb-3 text-center">Actualizar Producto</h1>
            </div>
            <form action="{{route('crud.updateProducto' , $producto->id)}}" method="POST">
                @csrf
                @method('PUT')
                <div class="mb-6">
                    <label for="nombre" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Producto</label>
                    <input type="text" id="nombre" name="nombre" value="{{$producto->nombre}}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="precio"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Precio</label>
                    <input type="text" id="precio" name="precio" value="{{$producto->precio}}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                </div>
                <div class="mb-6">
                    <label for="proveedor"
                        class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Proveedor</label>
                    <select type="text" id="proveedor" name="proveedor"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="{{$producto->proveedor}}">{{$producto->proveedor}}</option>
                        @foreach ($proveedor as $item)
                            <option value="{{$item->proveedor}}">{{$item->proveedor}}</option>
                        @endforeach
                    </select>
                </div>
              
                <button type="submit"
                    class="text-white bg-gradient-to-r from-purple-400 via-purple-500 to-purple-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-purple-300 dark:focus:ring-purple-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-3">Actualizar Proveedor</button>
            </form>
            <a href="{{ route('crud.index') }}">
                <button type="button"
                    class="text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-3">Regresar</button>
            </a>
        </div>
    </div>
@endsection
