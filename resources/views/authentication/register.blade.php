@extends('shared.layout')

@section('title', 'Register')
@section('overlay')
    <form class="m-5 w-full space-y-6 rounded-xl bg-gray-900 p-5 shadow-xl sm:w-3/5 lg:w-2/5 xl:w-1/3" method="POST"
          action="/register">
        @csrf

        <header class="text-3xl font-bold text-white">
            <p class="text-center">Register Page</p>
        </header>

        <main class="flex flex-col space-y-2 font-thin">
            <x-form.input name="name" type="text" label="Username" placeholder="Username" />
            <div class="flex flex-row space-x-3">
                <x-form.input name="first_name" type="text" label="First Name" placeholder="First Name" />
                <x-form.input name="last_name" type="text" label="Last Name" placeholder="Last Name" />
            </div>
            <x-form.input name="password" type="password" label="Password" placeholder="Password" />
            <x-form.input name="password_confirmation" type="password" label="Confirm Password"
                          placeholder="Confirm Password" />
            <x-form.dropdown name="role_id" label="Role" :items="$roles" placeholder="Select a Role" />
        </main>

        <footer class="flex flex-col items-center space-y-1">
            <x-form.button class="w-2/3" type="submit" text="Register" />
            <a class="text-white hover:opacity-90 active:opacity-80" href="/login">Already have an account?</a>
        </footer>
    </form>
@endsection
