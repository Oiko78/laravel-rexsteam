@if ($attributes['type'] == 'checkbox')
    <div class="flex flex-row space-x-1">
        @if ($attributes['name'] == 'remember')
            <input type="{{ $attributes['type'] }}" name="{{ $attributes['name'] }}"
                   placeholder="{{ $attributes['placeholder'] }}"
                   {{ $attributes->merge(['class' => 'rounded-md py-2 px-4']) }}>
        @else
            <input type="{{ $attributes['type'] }}" name="{{ $attributes['name'] }}"
                   placeholder="{{ $attributes['placeholder'] }}" value="{{ old($attributes['name']) }}"
                   {{ $attributes->merge(['class' => 'w-full rounded-md py-2 px-4']) }}>
        @endif
        <label for="{{ $attributes['name'] }}" class="text-white">{{ $attributes['label'] }}</label>
    </div>
@else
    <div class="flex flex-col space-y-1">
        <label for="{{ $attributes['name'] }}" class="text-white">{{ $attributes['label'] }}</label>
        <div class="input-wrapper">
            <input type="{{ $attributes['type'] }}" name="{{ $attributes['name'] }}"
                   placeholder="{{ $attributes['placeholder'] }}"
                   value="{{ old($attributes['name']) ?? $attributes['value'] }}"
                   {{ $attributes->merge(['class' => 'w-full rounded-md py-2 px-4']) }} />
            {{-- <span class="fa fa-info-circle" style="float: right; position:relative;"></span> --}}
        </div>
    </div>
@endif



@error($attributes['name'])
    @section('errors')
        @parent
        <li class="">{{ $message }}</li>
    @endsection
@enderror
