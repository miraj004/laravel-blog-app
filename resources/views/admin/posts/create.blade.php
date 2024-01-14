<x-layout>
    <x-setting heading="New Post">
        <div
            class="flex-1 h-full max-w-5xl mx-auto bg-white rounded-lg overflow-hidden shadow dark:bg-[#203759] dark:border-[#223f69]">
            <form action="/admin/posts" method="POST" enctype="multipart/form-data">
                <div class="flex flex-col lg:flex-row">
                    <div class="lg:h-auto sm:h-32 lg:w-1/2 md:w-full">
                        <img class="object-cover w-full h-full dark:mix-blend-overlay" id="thumbnail"
                             src="{{ asset('images/default-loading-image.png') }}"
                             alt="img"/>
                    </div>
                    @csrf
                    <div class="flex items-center justify-center p-6 md:w-full lg:w-2/3">
                        <div class="w-full">
                            <x-form.input name="title"/>
                            <x-form.input name="slug"/>
                            <div class="mb-6">
                                <x-form.label name="category"/>
                                <select
                                    class="transition-colors duration-300 border border-gray-300 rounded p-2 w-full bg-gray-200 focus:bg-white focus:ring-2 focus:ring-blue-500 outline-none shadow-inner focus:shadow-none dark:selection:bg-primary dark:text-white dark:bg-[#496793b4] dark:border-[#5b81b9] dark:focus:ring-primary dark:focus:border-primary dark:focus:bg-[#203759]"
                                    id="category_id"
                                    name="category_id"
                                >
                                    @foreach($categories as $category)
                                        <option value="{{ $category->id }}"
                                            {!! $category->id == old('category_id') ? 'selected':'' !!}
                                        >{{ $category->name }}</option>
                                    @endforeach
                                </select>
                            </div>
                            <x-form.input name="thumbnail" type="file" inputs="files"
                                          class="cursor-pointer file:cursor-pointer file:bg-transparent file:border-none dark:file:text-white"/>
                        </div>
                    </div>
                    <div class="flex items-center justify-center md:w-full p-6 lg:w-2/3">
                        <div class="w-full">
                            <div class="mb-6">
                                <x-form.label name="excerpt"/>
                                <x-form.textarea name="excerpt"/>
                                <x-form.error name="excerpt"/>
                            </div>
                            <div class="mb-6">
                                <x-form.label name="body"/>
                                <x-form.textarea name="body"/>
                                <x-form.error name="body"/>
                            </div>
                            <div class="mb-7">
                                <x-form.button class="w-full">Publish</x-form.button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </x-setting>
    <x-script/>
</x-layout>
