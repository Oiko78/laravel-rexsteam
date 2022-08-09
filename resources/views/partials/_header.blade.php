@php
$user = auth()->user();
@endphp

<header class="bg-gray-900" x-data="{ open: false }">
    <nav class="container mx-auto flex items-center space-x-10 p-2 text-lg font-semibold text-white">
        <a class="" href="/">Home</a>
        @if ($user?->role['id'] === App\Models\Role::ADMIN)
            <a href="/manage"><img class="" src="" alt="">Manage Game</a>
        @endif
        <form class="" style="margin-left: auto !important;" action="/">
            <x-form.input class="w-80 py-1 font-thin text-black opacity-70 focus:opacity-95" name="search"
                          type="text" value="{{ request('search') }}" label="" placeholder="Search" />
        </form>
        @auth
            @if ($user?->role['id'] === App\Models\Role::MEMBER)
                <a href="/cart"><img class="aspect-square h-5 w-5 bg-white" src="" alt=""></a>
            @endif
            <div class="relative">
                <x-form.button class="text-light text-md flex h-auto w-auto py-0 px-0 text-left text-black"
                               x-on:click="open = !open" bgColor="bg-none">
                    <img class="aspect-square h-10 w-10 rounded-full bg-white" src="" alt="">
                </x-form.button>
                <div class="overflow-none absolute right-0 z-10 mt-2 flex w-52 flex-col rounded-lg bg-white py-1 text-left font-light text-black shadow-lg"
                     x-show="open" x-on:click.outside="open = !open">
                    <a class="p-1 px-4 hover:bg-black/5" href="/profile">Profile</a>
                    @if ($user?->role['id'] === App\Models\Role::MEMBER)
                        <a class="p-1 px-4 hover:bg-black/5" href="/friends">Friends</a>
                        <a class="p-1 px-4 hover:bg-black/5" href="/history">Transaction History</a>
                    @endif
                    <a class="p-1 px-4 hover:bg-black/5" href="/logout">Logout</a>
                </div>
            </div>
        @else
            <a class="" href="/login">Login</a>
            <a class="" href="/register">Register</a>
        @endauth
    </nav>
</header>
