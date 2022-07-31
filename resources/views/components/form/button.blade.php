@props(['bgColor' => 'bg-violet-600'])
<button
        {{ $attributes->merge([
            'class' =>
                'relative text-white mx-auto text-bold hover:opacity-90 active:opacity-80 focus:opacity-80 rounded-lg w-full py-2 px-4 ' .
                $bgColor,
            'type' => 'button',
        ]) }}>
  {{ ($slot != '' ? $slot : $attributes['text']) ?? '' }}
</button>
