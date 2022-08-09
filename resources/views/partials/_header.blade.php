@php
$user = auth()->user();
@endphp

<header x-data="{ open: false }" class="bg-gray-900">
    <nav class="container mx-auto flex items-center space-x-10 p-2 text-lg font-semibold text-white">
        <a href="/" class="">Home</a>
        @if ($user?->role['id'] === App\Models\Role::ADMIN)
            <a href="/manage"><img src="" class="" alt="">Manage Game</a>
        @endif
        <form action="/" class="" style="margin-left: auto !important;">
            <x-form.input type="text" name="search" label="" placeholder="Search"
                          value="{{ request('search') }}"
                          class="w-80 py-1 font-thin text-black opacity-70 focus:opacity-95" />
        </form>
        @auth
            @if ($user?->role['id'] === App\Models\Role::MEMBER)
                <a href="/cart"><img src="" class="aspect-square h-5 w-5 bg-white" alt=""></a>
            @endif
            <div class="relative">
                <x-form.button x-on:click="open = !open"
                               class="text-light text-md flex h-auto w-auto py-0 px-0 text-left text-black"
                               bgColor="bg-none">
                    <img src="" class="aspect-square h-10 w-10 rounded-full bg-white" alt="">
                </x-form.button>
                <div x-show="open" x-on:click.outside="open = !open"
                     class="overflow-none absolute right-0 z-10 mt-2 flex w-52 flex-col rounded-lg bg-white py-1 text-left font-light text-black shadow-lg">
                    <a href="/profile" class="p-1 px-4 hover:bg-black/5">Profile</a>
                    @if ($user?->role['id'] === App\Models\Role::MEMBER)
                        <a href="/friends" class="p-1 px-4 hover:bg-black/5">Friends</a>
                        <a href="/history" class="p-1 px-4 hover:bg-black/5">Transaction History</a>
                    @endif
                    <a href="/logout" class="p-1 px-4 hover:bg-black/5">Logout</a>
                </div>
            </div>
        @else
            <a href="/login" class="">Login</a>
            <a href="/register" class="">Register</a>
        @endauth
    </nav>
</header>
