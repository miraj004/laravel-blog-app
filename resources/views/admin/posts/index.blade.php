<x-layout>
    <x-setting heading="All Posts">
        <div
            class="flex justify-end space-x-2 p-3 bg-gray-50 border-b dark:bg-[#182945] dark:border-[#223f69]">
            <x-post-search action="/admin/posts/"/>
            <x-category-dropdown home="/admin/posts/"/>
        </div>
        @if($posts->count())
            <div id="table-div" class="relative overflow-x-auto  max-h-[500px]">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400 overflow-y-auto">
                    <thead
                        id="table-head"
                        class="sticky top-0 z-10 text-xs text-gray-700 uppercase bg-gray-50 dark:bg-[#182945] dark:text-gray-400">
                    <tr>
                        <th scope="col" class="py-3 px-6" colspan="2">
                            Title
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Category
                        </th>
                        <th scope="col" class="py-3 px-6">
                            Author
                        </th>
                        <th scope="col" class="py-3 px-6" colspan="2">
                            Action
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($posts as $post)
                        <tr class="bg-white transition-colors duration-300 border-b dark:bg-[#203759] dark:border-[#223f69] hover:bg-gray-50 dark:hover:bg-[#223f69]">
                            <th scope="row"
                                class="flex items-center py-4 px-3 whitespace-nowrap">
                                <div class="w-10 overflow-hidden flex items-center shadow-md">
                                    <x-post-thumbnail class="rounded-none h-full" :src="$post->thumbnail"/>
                                </div>
                            </th>
                            <td class="py-2 px-6 text-sm text-gray-900 dark:text-white">
                                <a href="/posts/{{ $post->slug }}"
                                   class="dark:transition-colors dark:duration-300 dark:hover:text-cyan-400"
                                >
                                    {{ $post->title }}
                                </a>
                            </td>
                            <td class="py-2 px-6">
                                <x-category-button :post="$post"/>
                            </td>
                            <th scope="row"
                                class="flex items-center py-2 px-6 text-gray-900 whitespace-nowrap dark:text-white">
                                <div
                                    class="w-9 h-9 rounded-full overflow-hidden{{ !$post->author->profile ? ' border border-gray-900 dark:border-blue-400':'' }}">
                                    <x-auth-profile class="w-full h-full object-cover"
                                                    :src="$post->author->profile"
                                    />
                                </div>
                                <div class="pl-3 items-center">
                                    <div class="text-sm font-semibold">
                                        <a href="/?author={{ $post->author->username }}&{{ http_build_query(request()->except('author')) }}">
                                            {{ $post->author->name }}
                                        </a>
                                    </div>
                                    <div class="text-xs font-normal text-gray-500">{{ $post->author->email }}</div>
                                </div>
                            </th>
                            <td class="py-2 px-6">
                                <a href="/admin/posts/{{ $post->id }}/edit"
                                   class="font-medium text-sm text-blue-600 dark:text-blue-500 hover:underline">Edit</a>
                            </td>
                            <td class="py-2 px-6">
                                <form action="/admin/posts/{{ $post->id }}" method="post">
                                    @method('delete')
                                    @csrf
                                    <button type="submit"
                                            class="font-medium text-sm text-blue-600 dark:text-blue-500 hover:text-red-400 hover:underline">
                                        Delete
                                    </button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
                <div class="sticky bottom-0 w-full bg-gray-50 shadow-inner dark:bg-[#182945] py-2 px-2">
                    {{ $posts->links() }}
                </div>
            </div>

        @else
            <div class="my-10">
                <p class="text-center text-red-400">
                    Result Not Found. Please try something else!
                </p>
            </div>
        @endif
    </x-setting>
</x-layout>
