<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" href="images/favicon.ico" />
    <title>Rexsteam | @yield('title')</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css"
          integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('/css/app.css') }}">

    <script src="https://cdn.tailwindcss.com"></script>
    <script src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js" defer></script>
</head>

<body class="h-screen w-screen bg-gradient-to-r from-slate-100 to-gray-300">

    @hasSection('errors')
        <x-notification>
            @section('errors')
            @show
        </x-notification>
    @endif

    @if (session()->has('message'))
        <x-notification>
            <p>{{ session('message') }}</p>
        </x-notification>
    @endif


    @hasSection('overlay')
        <div class="absolute flex h-full w-full items-center justify-center">
            @yield('overlay')
        </div>
    @endif

    @hasSection('main')
        <div class="flex h-screen flex-col">
            @include('partials._header')
            @yield('main')
            @include('partials._footer')
        </div>
    @endif

    @stack('scripts')
</body>

</html>
