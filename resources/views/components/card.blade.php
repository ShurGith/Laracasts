<div class="relative block overflow-hidden rounded-lg border border-gray-100 p-4 sm:p-6 lg:p-8 max-w-sm">
    <span class="absolute inset-x-0 bottom-0 h-2 bg-gradient-to-r from-green-300 via-blue-500 to-purple-600"></span>

    <div class="sm:flex sm:justify-between sm:gap-4">
        <div>
            <h3 class="text-lg font-bold text-gray-900 sm:text-xl">
                {{ $post->title }}
            </h3>

            <p class="mt-1 text-xs font-medium text-gray-600">By John Doe</p>
        </div>

        <div class="hidden sm:block sm:shrink-0">
            <img alt=""
                src="https://images.unsplash.com/photo-1633332755192-727a05c4013d?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1180&q=80"
                class="size-16 rounded-lg object-cover shadow-sm" />
        </div>
    </div>

    <div class="mt-4">
        <p class="text-pretty text-sm text-gray-500">
            {{ $post->content }}
        </p>
    </div>

    <dl class="mt-6 flex gap-4 sm:gap-6">
        <div class="flex flex-col-reverse">
            <dt class="text-sm font-medium text-gray-600">Published</dt>

            <dd class="text-xs text-gray-500">{{ date('d-m-Y', strtotime($post->created_at)) }}</dd>
        </div>

        <div class="flex flex-col-reverse">
            <dt class="text-sm font-medium text-gray-600">Reading time</dt>
            <dd class="text-xs text-gray-500">3 minute</dd>
        </div>
    </dl>
    <div class="mt-8 w-full justify-center flex">
        <a class="text-white bg-green-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 me-2  dark:bg-blue-600 dark:hover:bg-blue-700 focus:outline-none dark:focus:ring-blue-800" href="{{route('posts.index')}}">Volver al Listado</a></div>
</div>
