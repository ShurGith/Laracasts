<?php $titulo = "Mostrando la entrada ". $post->id; ?>
<x-layout meta-title="{{$titulo}}" meta-description="Meta Description {{$titulo}}" >
  <x-slot:heading>{{ $titulo }}</x-slot:heading>
  <x-slot:datos>
@include('components.card')
</x-slot:datos>
</x-layout>
