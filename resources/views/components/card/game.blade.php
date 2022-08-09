@props(['game'])

<div class="relative p-3 sm:w-1/2 lg:w-1/3 xl:w-1/4">
    <a href="{{ '/games/' . $game['id'] }}" class="relative block rounded-lg shadow-lg hover:opacity-90">
        <img src="{{ $game['cover'] }}" alt="{{ $game['name'] }}" class="opacity-100">
        <div class="absolute bottom-0 left-0 m-2 rounded-lg bg-white/70 px-2 py-1">
            <h1 class="leading-1 text-md font-semibold">{{ $game['name'] }}</h1>
            <p class="font-light leading-5">{{ $game->category['name'] }}</p>
        </div>
    </a>
</div>
