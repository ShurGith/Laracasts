<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="{{$meta_descripcion ?? 'Meta description acojonante'}}">
    <title>{{ $titulo ?? 'Index' }} </title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <script src="https://cdn.tailwindcss.com" rel="stylesheet"> </script>
</head>
<body>
 @include('components.header')

<main>
    <div class="mx-auto max-w-7xl py-6 sm:px-6 lg:px-8">
        {{-- @isset($datos)
            {{$datos}}
        @endisset --}}
        @yield('datos')
        @yield('episodiodos')




    </div>
</main>



</body>
</html>
