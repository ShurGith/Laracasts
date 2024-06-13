<?php $titulo = 'Listado de Posts';
$meta_descripcion = 'Meta Descripción '. $titulo;  ?>

@extends('components.layout')
    @section('datos')

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
    @endsection
