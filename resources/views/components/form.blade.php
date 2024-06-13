<?php $accion = isset($post->id) ? route('posts.update', $post->id) : route('posts.store') ; ?>
<form method="POST" action="{{ $accion }}" class="max-w-sm mx-auto mt-12">
    @isset($post->id)  @method("PUT") @endisset
      @csrf
      <div class="mb-5">
          <label for=title" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Titulo</label>
          <input type="text" name="title" id="title" class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500" value="@isset($post->title){{$post->title}} @endisset">
          @error('title')
                @component('components.form-error')
                    @slot('mensaje',  $message )
                @endcomponent
           @enderror
      </div>
      <div>
          <label for=title" class="block mb-2 text-sm font-medium text-green-700 dark:text-green-500">Contenido</label>
          <textarea  name="content" id="content" class="bg-green-50 border border-green-500 text-green-900 dark:text-green-400 placeholder-green-700 dark:placeholder-green-500 text-sm rounded-lg focus:ring-green-500 focus:border-green-500 block w-full p-2.5 dark:bg-gray-700 dark:border-green-500">@isset($post->content){{$post->content}} @endisset</textarea>
          @error('content')
          @component('components.form-error')
              @slot('mensaje',  $message )
          @endcomponent
     @enderror
      </div>
      <input type="submit" class="mt-6 text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800" value="@if(@isset($post->id)) Guardar Cambios @else Crear Nuevo @endif">
  </form>
