@extends('shared.layout')

@php
$day_list = array_map(fn($day) => ['id' => $day, 'name' => $day, 'value' => $day], range(1, 31));
$month_list = array_map(fn($month) => ['id' => $month, 'name' => date('F', mktime(0, 0, 0, $month, 10)), 'value' => $month], range(1, 12));
$year_list = array_map(fn($year) => ['id' => $year, 'name' => $year, 'value' => $year], range(1970, date('Y')));
@endphp

@section('title', 'Home')
@section('main')
    <form class="h-full space-y-5 p-5" method="POST" action="/games/{{ $game['id'] }}">
        <div class="relative flex h-full flex-col justify-center space-y-5 border-2 border-black p-5">
            <img class="mx-auto aspect-video w-1/5" src="{{ $game['cover'] }}" alt="">
            <h1 class="mx-auto w-1/2 text-center text-lg font-bold uppercase text-gray-700">
                Content in this product may not be appropriate for all ages, or may not be appropriate for
                viewing at work
            </h1>
            <div class="mx-auto w-[70%] rounded-lg bg-gray-200 p-5 py-8 shadow-lg">
                <div class="mx-auto flex w-[40%] flex-col space-y-3">
                    <p class="text-center">Please enter your birth date to continue</p>
                    <div class="flex space-x-2">
                        <div class="w-[25%]">
                            <p class="text-center">Day</p>
                            <x-form.dropdown name="day" value=1 label="" placeholder="" :items="$day_list">
                            </x-form.dropdown>
                        </div>
                        <div class="w-[45%]">
                            <p class="text-center">Month</p>
                            <x-form.dropdown name="month" value=1 label="" placeholder="" :items="$month_list">
                            </x-form.dropdown>
                        </div>
                        <div class="w-[30%]">
                            <p class="text-center">Year</p>
                            <x-form.dropdown name="year" value=1970 label="" placeholder="" :items="$year_list">
                            </x-form.dropdown>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mx-auto flex w-80 space-x-7">
                <x-form.button class="w-3/5 py-2" type="submit" text="View Page" bgColor="bg-gray-600" />
                <x-form.button class="w-2/5 py-2 text-gray-600" type="button" text="Cancel" bgColor="bg-white"
                               onclick="window.location.href = '/'" />
            </div>
        </div>
    </form>
@endsection
