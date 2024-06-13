<?php $titulo = isset($post->id) ? "Editando la entrada: " . $post->title : "Creando un nuevo post"; ?>
<x-layout meta-title="{{$titulo}}" meta-description="Meta Description {{$titulo}}" >
    <x-slot:heading>{{ $titulo }}</x-slot:heading>
    <x-slot:datos>
        <a class="mb-6 text-white bg-red-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800"
           href="{{route('posts.index')}}">Volver al Listado</a>
        @include('components.form')
    </x-slot:datos>
</x-layout>
