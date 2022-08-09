@extends('shared.layout')

@section('title', 'Register')
@section('overlay')
    <form method="POST" action="/register"
          class="m-5 w-full space-y-6 rounded-xl bg-gray-900 p-5 shadow-xl sm:w-3/5 lg:w-2/5 xl:w-1/3">
        @csrf

        <header class="text-3xl font-bold text-white">
            <p class="text-center">Register Page</p>
        </header>

        <main class="flex flex-col space-y-2 font-thin">
            <x-form.input type="text" name="name" label="Username" placeholder="Username" />
            <div class="flex flex-row space-x-3">
                <x-form.input type="text" name="first_name" label="First Name" placeholder="First Name" />
                <x-form.input type="text" name="last_name" label="Last Name" placeholder="Last Name" />
            </div>
            <x-form.input type="password" name="password" label="Password" placeholder="Password" />
            <x-form.input type="password" name="password_confirmation" label="Confirm Password"
                          placeholder="Confirm Password" />
            <x-form.dropdown name="role_id" label="Role" :items="$roles" placeholder="Select a Role" />
        </main>

        <footer class="flex flex-col items-center space-y-1">
            <x-form.button type="submit" text="Register" class="w-2/3" />
            <a href="/login" class="text-white hover:opacity-90 active:opacity-80">Already have an account?</a>
        </footer>
    </form>
@endsection
