@props(['currentCategory'=>null, 'home' => '/'])
<x-dropdown
    class="transition-colors duration-300 bg-gray-100 rounded-xl shadow-inner border border-transparent hover:border-gray-300 dark:hover:border-transparent dark:bg-[#203759] dark:hover:bg-[#223f69]/90 dark:hover:border-[#] dark:hover:bg-[#284b7c]">
    <x-slot name="trigger">
        <button class="flex w-full appearance-none bg-transparent text-sm font-semibold items-center py-2 pr-2 pl-3 justify-between">
            <span class="pr-9">{{ ucwords($currentCategory?->name ?? 'categories') }}</span>
            <x-icon type="arrow-down"/>
        </button>
    </x-slot>
    <x-dropdown-item href="{{ $home }}?{{ http_build_query(request()->except('category', 'page')) }}"
                     :active="!request('category')">

    </x-dropdown-item>
    @foreach($categories as $category)
        <x-dropdown-item
            href="{{ $home }}?category={{ $category->slug }}&{{ http_build_query(request()->except('category', 'page')) }}"
            :active="$category->id === $currentCategory?->id">
            {{ $category->name }}
        </x-dropdown-item>
    @endforeach
</x-dropdown>

