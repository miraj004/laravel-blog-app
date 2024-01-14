@props(['active' => false])

<li class="{{ $active ? "bg-gray-100 text-black dark:bg-[#223f69] dark:text-white":"bg-gray-50 text-gray-400 dark:text-gray-300 dark:bg-[#203759] hover:bg-gray-100 hover:text-gray-900 dark:hover:bg-[#223f69] dark:hover:text-gray-100" }} transition-colors duration-300 font-semibold text-sm flex items-center rounded-xl w-full shadow-inner">
    @if($active)
        <span class="w-full px-3 py-2">
            {{ $slot }}
        </span>
    @else
        <a {{ $attributes }}
           class="w-full px-3 py-2">
            {{ $slot }}
        </a>
    @endif

</li>
