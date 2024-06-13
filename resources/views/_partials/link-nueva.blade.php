@props(['active' => false])
<div class="w-full flex justify-center">
    <a class="{{ $mt }} text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2 dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{route('posts.create')}}">Nueva Entrada</a>
  </div>
