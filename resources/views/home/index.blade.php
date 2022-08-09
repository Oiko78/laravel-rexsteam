@extends('shared.layout')

@section('title', 'Home')
@section('main')
    <main class="space-y-5 p-5">
        <div class="flex justify-between px-3">
            @if (request('search') ?? null)
                <h1 class="text-3xl font-bold text-gray-900">Search Games</h1>
            @else
                <h1 class="text-3xl font-bold text-gray-900">Top Games</h1>
            @endif
            {{ $games->links() }}
        </div>
        <div class="flex flex-wrap">
            @forelse($games as $game)
                <x-card id="{{ $game['id'] }}" url="{{ $game['cover'] }}" title="{{ $game['name'] }}"
                        genre="{{ $game->category['name'] }}">
                </x-card>
            @empty
                <p class="pl-3 text-lg font-light">There are no games content can be showed right now</p>
            @endforelse
        </div>
    </main>
@endsection
