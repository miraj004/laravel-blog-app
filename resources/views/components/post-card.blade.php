<article
    {{ $attributes(['class'=>"transition-colors duration-300 hover:bg-gray-100 border border-black border-opacity-0 hover:border-opacity-5 rounded-xl dark:hover:bg-[#203759] dark:hover:border-[#223f69]"]) }}
>
    <div class="py-6 px-5">
        <x-post-thumbnail :src="$post->thumbnail"/>
        <div class="mt-8 flex flex-col justify-between">
            <header>
                <x-category-button :post="$post"/>
                <div class="mt-4">
                    <h1 class="text-3xl">
                        <a href="/posts/{{ $post->slug }}"
                           class="dark:transition-colors dark:duration-300 dark:hover:text-cyan-500">{{ $post->title }}</a>
                    </h1>
                    <span class="mt-2 block text-gray-400 text-xs dark:text-pink-400/60">
                        Published <time class="dark:text-yellow-400/50">{{ $post->created_at->diffForHumans() }}</time>
                    </span>
                </div>
            </header>
            <div class="text-sm mt-4">
                {!! $post->excerpt !!}
            </div>
            <footer class="flex justify-between items-center mt-8">
                <div class="flex items-center text-sm">
                    <x-auth-profile :src="$post->author->profile"/>
                    <div class="ml-3">
                        <h5 class="font-bold">
                            <a
                                href="/?author={{ $post->author->username }}&{{ http_build_query(request()->except('author')) }}"
                            >
                                {{ $post->author->name }}</a>
                        </h5>
                    </div>
                </div>
                <div>
                    <a href="/posts/{{ $post->slug }}"
                       class="transition-colors duration-300 text-xs border border-transparent font-semibold bg-gray-200 hover:bg-gray-300 rounded-full py-2 px-8 dark:bg-[#223f69] dark:hover:bg-[#284b7c] dark:hover:border-[#2e568e]"
                    >
                        Read More
                    </a>
                </div>
            </footer>
        </div>
    </div>
</article>
