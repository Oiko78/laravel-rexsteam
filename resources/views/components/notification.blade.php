<div class="{{ session('success') ? 'bg-green-100 dark:bg-green-200' : 'bg-red-100 dark:bg-red-200' }} absolute left-1/2 top-5 z-10 flex w-4/5 -translate-x-1/2 rounded-lg p-4 drop-shadow-lg sm:w-4/5 lg:w-3/5 xl:w-2/3"
     x-data="flash_message" x-show="open" x-on:click.outside="open = !open " x-init="timer = setTimeout(() => open = false, 2000)"
     x-on:mousemove="window.clearTimeout(timer); timer = window.setTimeout(() => open = false, 2000)"
     x-on:mouseleave="timer = window.setTimeout(() => open = false, 2000)" x-on:click="window.clearTimeout(timer);">
    <svg class="{{ session('success') ? 'text-green-700 dark:text-green-800' : 'text-red-700 dark:text-red-800' }} h-5 w-5 flex-shrink-0"
         aria-hidden="true" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
        <path fill-rule="evenodd"
              d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z"
              clip-rule="evenodd"></path>
    </svg>
    @if (session('success'))
        <div class="ml-3 text-sm font-medium text-green-700 dark:text-green-800">
            <h1 class="font-bold">Success!</h1>
            <div class="">
                {{ $slot }}
            </div>
        </div>
    @else
        <div class="ml-3 text-sm font-medium text-red-700 dark:text-red-800">
            <h1 class="font-bold">There were error(s) with your submission</h1>
            <ul class="list-disc px-4">
                {{ $slot }}
            </ul>
        </div>
    @endif
    <button class="{{ session('success') ? 'bg-green-100 text-green-500 hover:bg-green-200 focus:ring-green-400 dark:bg-green-200 dark:text-green-600 dark:hover:bg-green-300' : 'bg-red-100 text-red-500 hover:bg-red-200 focus:ring-red-400 dark:bg-red-200 dark:text-red-600 dark:hover:bg-red-300' }} -mx-1.5 -my-1.5 ml-auto inline-flex h-8 w-8 rounded-lg p-1.5 focus:ring-2"
            type="button" x-show="open" x-on:click="open = !open">
        <svg class="h-5 w-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd"
                  d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z"
                  clip-rule="evenodd"></path>
        </svg>
    </button>
</div>

@push('scripts')
    <script type="text/javascript">
        document.addEventListener('alpine:init', () => {
            Alpine.data("flash_message", () => {
                return {
                    open: true,
                    timer: null
                }
            })
        })
    </script>
@endpush
