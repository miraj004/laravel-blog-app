<section class="py-10">
    <section class="py-2 max-w-7xl max-h-full mx-auto">
            <div class=" flex items-center border-b dark:border-[#223f69]">
                <h1 class="flex items-center text-lg font-bold dark:text-transparent dark:bg-gradient-to-r dark:from-blue-500 dark:to-green-500 dark:bg-clip-text">
                    {{ $heading }}
                </h1>
            </div>
        <div class="flex">
            <aside class="hidden lg:block lg:w-48 pr-4">
                <ul class="mt-10 space-y-2">
                    <x-option href="/admin/posts/create" :active="request()->is('admin/posts/create')">New Post
                    </x-option>
                    <x-option href="/admin/posts" :active="request()->is('admin/posts')">All Posts</x-option>
                </ul>
            </aside>
            <main class="flex-1 items-center justify-center overflow-hidden py-10 px-5">
                {{ $slot }}
            </main>
        </div>
    </section>
</section>
