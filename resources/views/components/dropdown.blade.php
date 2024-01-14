<div x-data="{show:false}" @click.away="show = false"
    {{ $attributes(["class"=>"transition-colors duration-300 relative min-w-[120px] lg:inline-flex items-center"]) }}
>
    <div @click="show = !show"
            :class="{'transform transition duration-300 ': show}"
            x-transition:enter-end="transform opacity-100 scale-100"
            x-transition:leave="transition ease-in duration-75"
            x-transition:leave-start="transform opacity-100 scale-100"
            class="flex w-full appearance-none bg-transparent text-sm font-semibold items-center">
       {{ $trigger }}
    </div>
    <div id="dropdown"
         x-show="show"
         class="absolute flex-column bg-white text-sm mt-10 z-20 top-2 w-full py-2 rounded-xl max-h-48 overflow-auto shadow-lg scroll-smooth dark:bg-[#203759]"
         x-transition:enter="transition ease-out duration-100"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
    >
        {{ $slot }}
    </div>
</div>
