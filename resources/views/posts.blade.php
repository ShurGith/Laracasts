<?php $titulo = 'Listado de Posts'; ?>
<x-layout meta-title="{{ $titulo }}" meta-description="Meta Description {{ $titulo }}">
    <x-slot:heading>{{ $titulo }}</x-slot:heading>
    <x-slot:datos>
        @component('_partials.link-nueva')
        @slot('mt', '')
       @endcomponent
        <div class="flex  justify-center flex-wrap gap-2 mt-6">
            @forelse($posts as $post)
                @include('components.card-list')

            @empty
                <p>No Hay datos</p>
            @endforelse
        </div>
        @component('_partials.link-nueva')
         @slot('mt', 'mt-20')
        @endcomponent
    </x-slot:datos>
</x-layout>
