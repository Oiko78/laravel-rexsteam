@if ($attributes['type'] == 'checkbox')
  <div class="w-full flex-row space-x-1">
    @if ($attributes['name'] == 'remember')
      <input type="{{ $attributes['type'] }}" name="{{ $attributes['name'] }}"
             placeholder="{{ $attributes['placeholder'] }}" class="rounded-md py-2 px-4">
    @else
      <input type="{{ $attributes['type'] }}" name="{{ $attributes['name'] }}"
             placeholder="{{ $attributes['placeholder'] }}" value="{{ old($attributes['name']) }}"
             class="rounded-md py-2 px-4">
    @endif
    <label for="{{ $attributes['name'] }}" class="text-white">{{ $attributes['label'] }}</label>
  </div>
@else
  <div class="w-full flex-col space-y-1">
    <label for="{{ $attributes['name'] }}" class="text-white">{{ $attributes['label'] }}</label>
    <input type="{{ $attributes['type'] }}" name="{{ $attributes['name'] }}"
           placeholder="{{ $attributes['placeholder'] }}" value="{{ old($attributes['name']) }}"
           class="w-full rounded-md py-2 px-4">
  </div>
@endif



@error($attributes['name'])
  @section('errors')
    @parent
    <li class="">{{ $message }}</li>
  @endsection
@enderror
