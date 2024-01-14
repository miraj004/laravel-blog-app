<x-layout>
    @include('posts._header')
    @if($posts->count())
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6 dark:bg-[#1d2e4a]">
            <x-featured :post="$posts[0]"/>
            <div class="lg:grid lg:grid-cols-6">
                @foreach($posts->skip(1) as $post)
                    <x-post-card :post="$post" class="{{ $loop->iteration < 3 ? 'col-span-3':'col-span-2' }}"/>
                @endforeach
            </div>
            {{ $posts->links('vendor.pagination.tailwind') }}
        </main>
    @else
        <div class="my-10">
            <p class="text-center text-red-400">
                Post Not Found. Please check back later!
            </p>
        </div>
    @endif
</x-layout>

