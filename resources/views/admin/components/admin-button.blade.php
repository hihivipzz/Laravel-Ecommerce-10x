{{-- Trong file của bạn, chẳng hạn là admin-button.blade.php --}}
@props(['name','url'])

<a href="{{ $url }}" type="button" class="text-white bg-blue-500 border border-blue-500 hover:text-white hover:bg-blue-600 hover:border-blue-600 focus:text-white focus:bg-blue-600 focus:border-blue-600 focus:ring focus:ring-blue-100 active:text-white active:bg-blue-600 active:border-blue-600 active:ring active:ring-blue-100 dark:ring-blue-400/20 px-4 py-1">
    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="inline-block w-4 h-4">
        <path d="M5 12h14"></path>
        <path d="M12 5v14"></path>
    </svg>
    <span class="align-middle">{{ $name }}</span>
</a>
