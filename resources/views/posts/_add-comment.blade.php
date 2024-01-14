@auth
    <div class="p-6 rounded-xl bg-gray-50 rounded-xl border border-gray-200 shadow-inner dark:bg-[#203759] dark:border-[#223f69]">
        <form method="POST" action="/posts/{{ $post->slug }}/comments">
            @csrf
            <header class="flex items-center">
                <x-auth-profile :src="auth()->user()?->profile"/>
                <h2 class="ml-3">
                    What is your participate?
                </h2>
            </header>
            <div class="mt-6">
                <x-form.textarea name="body" class="rounded-xl px-4 py-4" placeholder="Quick, thing of something to say!"/>
            </div>
            <div class="flex justify-end mt-6 pt-6 border-t border-gray-200 dark:border-[#223f69]">
                <x-form.button>
                    Post
                </x-form.button>
            </div>
        </form>
    </div>
@else
    <p class="font-semibold mb-20">
        <a href="/register" class="hover:underline text-blue-400">Register</a>
        or <a href="/login" class="hover:underline text-blue-400">Login</a> to leave a comment.
    </p>
@endauth
