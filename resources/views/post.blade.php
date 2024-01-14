

<x-layout>
    <div class="col-span-3">
        <div class="w-2/3 mx-auto relative">
            <article class="w-2/3 md:w-full rounded shadow-md text-sm mx-auto mt-10 hover:shadow-lg">
                <h1 class="pl-4 font-semibold text-primary text-xl">
                    <span>{{ $post->title }}</span>
                </h1>
                <div class="px-4 pb-4 pt-2 space-y-2">
                    {!! $post->excerpt !!}
                </div>
            </article>
            <a href="/" class="absolute right-0 top-0 bg-gray-100 rounded mt-2 mr-2 text-xs font-semibold px-2 py-1 shadow
            hover:scale-125 transition duration-100
            ">Go Back</a>
        </div>
    </div>
</x-layout>
