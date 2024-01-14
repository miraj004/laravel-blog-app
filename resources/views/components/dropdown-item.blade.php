@props(['active'=>false, 'class'=>null])
@php
    $class = "w-full block text-left text-sm px-2 py-1 ";
@endphp
@if(!$active)
<a
    {{ $attributes }}
    class="{{ $class .= 'hover:bg-gray-50 dark:text-gray-300 dark:hover:bg-[#223f69]' }}"
>
    {{ $slot  }}
</a>
@else
    <span class="{{ $class .= 'text-blue-500 dark:text-[#15c7b3]' }}">
        {{ $slot  }}
    </span>
@endif
