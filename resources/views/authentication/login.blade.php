@extends('shared.layout')

@section('title', 'Register')
@section('overlay')
    <form method="POST" action="/login"
          class="m-5 w-full space-y-6 rounded-xl bg-gray-900 p-5 shadow-xl sm:w-3/5 lg:w-2/5 xl:w-1/3">
        @csrf

        <header class="text-3xl font-bold text-white">
            <p class="text-center">Login Page</p>
        </header>

        <main class="flex flex-col space-y-2 font-thin">
            <x-form.input type="text" name="name" label="Username" placeholder="Username" />
            <x-form.input type="password" name="password" label="Password" placeholder="Password" />
            <x-form.input type="checkbox" name="remember" label="Remember me" />
        </main>

        <footer class="flex flex-col items-center space-y-1">
            <x-form.button type="submit" text="Login" class="w-2/3" />
            <a href="/register" class="text-white hover:opacity-90 active:opacity-80">Don't have an account?</a>
        </footer>
    </form>
@endsection
