<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="icon" href="images/favicon.ico" />
  <title>Rexsteam | @yield('title')</title>

  <script src="https://cdn.tailwindcss.com"></script>
  <script src="https://unpkg.com/alpinejs@3.10.3/dist/cdn.min.js" defer></script>
</head>

<body class="h-screen w-screen bg-gradient-to-r from-teal-200 to-sky-400">

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


  <div class="absolute flex h-full w-full items-center justify-center">
    @yield('overlay')
  </div>

  <main class="section">
    @yield('main')
  </main>

  @stack('scripts')
</body>

</html>
