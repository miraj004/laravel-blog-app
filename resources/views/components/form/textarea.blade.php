<textarea
    id="{{ $name }}"
    name="{{ $name }}"
   {{ $attributes(["class"=>"w-full transition-colors duration-200 p-2 rounded border bg-gray-200 resize-none text-sm shadow-inner focus:bg-white focus:shadow-none focus:outline-none focus:ring focus:ring-blue-400 dark:placeholder-gray-300 dark:selection:bg-primary dark:text-white dark:bg-[#496793b4] dark:border-[#5b81b9] dark:focus:ring-primary dark:focus:border-primary dark:focus:bg-[#203759]"]) }}
    cols="30" rows="4" required>{{ old($name) ?? $slot }}</textarea>
