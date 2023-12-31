@extends('layouts.plantilla')

@section('titulo', 'CRUD * Eliminar')

@section('contenido')
    <div>
        <div class="mx-9 my-8 bg-sky-300 p-16 text-white container-center text-center rounded-lg shadow-md">
            <div>
                <h1 class="text-4xl mb-3 text-center">Eliminar Proveedor</h1>
            </div>
            <form action="{{route('crud.destroyProveedor', $proveedor->id)}}" method="POST">
                @csrf
                @method('DELETE')
                <div class="mb-6">
                    <input type="text" id="id" hidden>
                </div>
                <div class="mb-6">
                    <label for="proveedor" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Proveedor</label>
                    <input type="text" id="proveedor" name="proveedor" value="{{$proveedor->proveedor}}"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        readonly>
                </div>
                

                <button type="submit"
                    class="text-white bg-gradient-to-r from-green-400 via-green-500 to-green-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-green-300 dark:focus:ring-green-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-3">Eliminar
                    Proveedor</button>
            </form>
            <a href="{{route('proveedores')}}">
                <button type="button"
                    class="text-white bg-gradient-to-r from-yellow-400 via-yellow-500 to-yellow-600 hover:bg-gradient-to-br focus:ring-4 focus:outline-none focus:ring-yellow-300 dark:focus:ring-yellow-800 font-medium rounded-lg text-sm px-5 py-2.5 text-center mr-2 mb-2 mt-3">Regresar</button>
            </a>
        </div>
    </div>
@endsection
