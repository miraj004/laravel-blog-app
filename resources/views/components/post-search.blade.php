@props(['action' => '/'])
<div class="relative lg:inline-flex items-center bg-gray-100 rounded-xl px-3 py-2 dark:bg-[#203759] shadow-inner">
    <form method="GET" action="{{ $action }}">
        @if(request('category'))
            <input type="hidden" name="category" value="{{ request('category') }}"/>
        @endif
        <input type="text" name="search" placeholder="Find something"
               value="{{ request('search') }}"
               class="bg-transparent placeholder-black w-full font-semibold text-sm dark:placeholder-gray-200 outline-none rounded dark:focus:outline-cyan-500 dark:selection:bg-cyan-800 dark:selection:text-cyan-200">
    </form>
</div>
