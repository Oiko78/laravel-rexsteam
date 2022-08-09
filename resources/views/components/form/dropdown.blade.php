@props(['items'])

@php
$items = is_array($items) ? $items : $items->toArray();
$idx = array_search(old($attributes['name']) ?? $attributes['value'], array_column($items, 'id'));
$value = $idx !== false ? $items[$idx]['id'] : null;
$text = $idx !== false ? $items[$idx]['name'] : $attributes['placeholder'] ?? 'Select an item';
@endphp

<div x-data="{{ $attributes['name'] }}" class="space-y-1">
    <label for="{{ $attributes['name'] }}" class="text-white"> {{ $attributes['label'] }} </label>
    <input type="text" name="{{ $attributes['name'] }}" hidden value="" class="w-full rounded-md py-[0.5rem] px-4">
    <div class="relative">
        <x-form.button x-on:click="open = !open" class="text-light text-md text-left text-black" bgColor="bg-white">
            <span x-text="text" class="truncate"></span>
            <span class="absolute inset-y-0 right-0 ml-3 flex items-center pr-2">
                <svg class="h-5 w-5 text-gray-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"
                     fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd"
                          d="M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z"
                          clip-rule="evenodd" />
                </svg>
            </span>
        </x-form.button>

        <div x-show="open" x-on:click.outside="open = !open"
             class="absolute z-20 mt-1 max-h-24 w-full overflow-auto rounded-md bg-white py-0 px-0 shadow-lg">
            @foreach ($items as $item)
                <x-form.button x-on:click="value = {{ $item['id'] }}; text = '{{ $item['name'] }}'; open = !open; document.getElementsByName('{{ $attributes['name'] }}')[0].value = {{ $item['id'] }};"
                               class="text-light text-md rounded-none px-4 py-1 text-left text-black hover:bg-black/10"
                               bgColor="bg-white">
                    <p x-text="'{{ $item['name'] }}'" class=""></p>
                    <span x-show="'{{ $item['id'] }}' == value;"
                          class="absolute inset-y-0 right-0 flex items-center pr-4 text-indigo-600">
                        <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor"
                             aria-hidden="true">
                            <path fill-rule="evenodd"
                                  d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z"
                                  clip-rule="evenodd" />
                        </svg>
                    </span>
                </x-form.button>
            @endforeach
        </div>
    </div>
</div>
@push('scripts')
    <script type="text/javascript">
        document.addEventListener('alpine:init', () => {
            Alpine.data("{{ $attributes['name'] }}", () => {
                return {
                    open: false,
                    value: "{{ $value }}",
                    text: "{{ $text }}"
                }
            })
        })
    </script>
@endpush

@error($attributes['name'])
    @section('errors')
        @parent
        <li class="">{{ $message }}</li>
    @endsection
@enderror
