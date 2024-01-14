@props(['comment'])
<article id="post-comment"
         class="flex border border-gray-200 bg-gray-50 p-6 rounded-xl space-x-4 shadow dark:shadow-none dark:border-none dark:rounded-none dark:bg-[#1d2e4a]">
    <div class="flex-shrink-0">
        <x-auth-profile :src="$comment->author->profile"/>
    </div>
    <div>
        <header class="mb-4">
            <h3 class="font-bold">
                {{ $comment->author->name }}
            </h3>
            <span class="text-xs text-gray-500 dark:text-pink-400/60">Posted
               <time class="dark:text-yellow-400/50">{{ $comment->created_at->diffForHumans() }}</time>
            </span>
        </header>
        <p class="dark:bg-gradient-to-r dark:from-[#233c62] dark:to-[#294876] dark:border dark:shadow-md dark:border-[#294876] dark:p-3 dark:rounded-2xl dark:rounded-tl-none">
            {{ $comment->body }}
        </p>
    </div>
</article>
