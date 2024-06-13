 <nav class="bg-gray-800">
        <div class="mx-auto max-w-7xl px-4 sm:px-6 lg:px-8">
            <div class="flex h-16 items-center justify-between">
                <div class="flex items-center">
                    <div class="flex-shrink-0">
                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30"><title>shape-102</title><g fill="none"><g clip-path="url(#nccp1717170353312-4869984_clip0_231_793)"><path fill-rule="evenodd" clip-rule="evenodd" d="M7.5 0h22.5v22.5l-7.5 7.5v-22.5h-22.5l7.5-7.5z m-7.5 24.76v-9.76h9.76l-9.76 9.76z m15 5.24h-9.63l9.63-9.63v9.63z" fill="url(#nccp1717170353312-4869984_paint0_linear_231_793)"></path></g><defs><linearGradient id="nccp1717170353312-4869984_paint0_linear_231_793" x1="177" y1="0" x2="39.5" y2="152.5" gradientUnits="userSpaceOnUse"><stop stop-color="#0315d9"></stop><stop offset="1" stop-color="#E7E9FF"></stop></linearGradient><clipPath id="nccp1717170353312-4869984_clip0_231_793"><path fill="#fff" d="M0 0h30v30h-30z"></path></clipPath></defs></g></svg>
                    </div>
                    <div class="hidden md:block">
                        <div class="ml-10 flex items-baseline space-x-4">
                            <!-- Current: "bg-gray-900 text-white", Default: "text-gray-300 hover:bg-gray-700 hover:text-white" -->
                            <x-nav-link href="{{ route('indice') }}" :active="request()->is('/')">Indice</x-nav-link>
                            <x-nav-link href="{{ route('blog') }}" :active="request()->is('blog')">Blog</x-nav-link>
                            <x-nav-link href="{{ route('contact') }}" :active="request()->is('contact')">Contacto</x-nav-link>
                            <x-nav-link href="{{ route('about') }}" :active="request()->is('about')">Nosotros</x-nav-link>
                            <x-nav-link href="{{ route('posts.index') }}" :active="request()->is('posts')">Listado</x-nav-link>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </nav>
    <header class="bg-white shadow">
        <div class="mx-auto max-w-7xl px-4 py-6 sm:px-6 lg:px-8">
            <h1 class="text-3xl font-bold tracking-tight text-gray-900">{{$heading}}</h1>
        </div>
    </header>
