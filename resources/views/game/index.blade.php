@extends('shared.layout')

@section('title', 'Home')
@section('main')
    <main class="space-y-5 p-5">
        <div class="flex flex-row space-x-5 font-semibold leading-4 text-gray-500">
            <img class="aspect-square h-5 w-5 bg-white" src="" alt="">
            <img class="aspect-square h-5 w-5 bg-white" src="" alt="">
            <p class="">{{ $game->category['name'] }}</p>
            <img class="aspect-square h-5 w-5 bg-white" src="" alt="">
            <p class="">{{ $game['name'] }}</p>
        </div>
        <div class="flex space-x-4">
            <div class="w-[70%] rounded-lg">
                <iframe class="aspect-video w-full rounded-lg" src="{{ $game['trailer'] }}" frameborder="0"></iframe>
            </div>
            <div class="w-[30%] space-y-3 text-gray-600">
                <img class="w-full rounded-lg" src="{{ $game['cover'] }}" alt="{{ $game['title'] }}">
                <h1 class="text-xl font-bold text-gray-800">{{ $game['name'] }}</h1>
                <p class="overflow-hidden"
                   style="display: -webkit-box; -webkit-line-clamp: 7; -webkit-box-orient: vertical;">
                    {{ $game['short_description'] }}
                    Lorem ipsum
                    dolor sit
                    amet, consectetur
                    adipisicing
                    elit.
                    Et aperiam consequuntur vero. Unde praesentium error voluptatum. Veritatis, veniam quibusdam cumque
                    doloremque possimus eaque dolore quia maiores vero nulla culpa natus! Lorem, ipsum dolor sit amet
                    consectetur adipisicing elit. Harum quia voluptatem tempora delectus ratione laudantium aliquam
                    voluptates veritatis unde qui atque, sit quibusdam voluptatum officiis molestiae eveniet culpa itaque
                    ullam.</p>
                <div class="">
                    <p class=""><b>Genre</b>: {{ $game->category['name'] }}</p>
                    <p class=""><b>Release Date</b>: {{ $game['release_date'] }}</p>
                    <p class=""><b>Developer</b>: {{ $game['developer'] }}</p>
                    <p class=""><b>Publisher</b>: {{ $game['publisher'] }}</p>
                </div>
            </div>
        </div>
    </main>
@endsection
