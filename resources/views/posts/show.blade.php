<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-6xl mx-auto mt-10 lg:mt-20 space-y-6">
            <article class="max-w-4xl mx-auto lg:grid lg:grid-cols-12 gap-x-10">
                <div class="col-span-4 lg:text-center lg:pt-14 mb-10">
                    <x-post-thumbnail :src="$post->thumbnail"/>
                    <p class="mt-4 block text-gray-400 text-xs dark:text-pink-400/70">
                        Published
                        <time class="dark:text-yellow-400/70">{{ $post->created_at->diffForHumans() }}</time>
                    </p>
                    <div class="flex items-center lg:justify-center text-sm mt-4">
                        <x-auth-profile :src="$post->author->profile"/>
                        <div class="ml-3 text-left">
                            <h5 class="font-bold">
                                <a href="/posts/author/{{ $post->author->username }}">
                                    {{ $post->author->name }}
                                </a>
                            </h5>
                        </div>
                    </div>
                </div>
                <div class="col-span-8">
                    <div class="hidden lg:flex justify-between mb-6">
                        <a href="/"
                           class="transition-colors duration-300 relative inline-flex items-center text-lg hover:text-blue-500 dark:hover:text-cyan-500">
                            <x-icon type="left-arrow"/>
                            Back to Posts
                        </a>
                        <x-category-button :post="$post"/>
                    </div>
                    <h1 class="font-bold text-3xl lg:text-4xl mb-10">
                        {{ $post->title }}
                    </h1>
                    <div class="space-y-4 lg:text-lg leading-loose">
                        {!! $post->body !!}
                    </div>
                </div>
                <section class="col-span-8 col-start-5 mt-10 space-y-6">
                    @include('posts._add-comment')
                    @foreach($post->comments as $comment)
                        <x-post-comment :comment="$comment"/>
                    @endforeach
                </section>

            </article>
        </main>
    </section>
</x-layout>
