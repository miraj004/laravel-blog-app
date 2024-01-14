<x-layout>
    <section class="px-6 py-8">
        <main
            class="max-w-md text-sm mx-auto px-10 border bg-gray-50 rounded-xl shadow-inner dark:bg-[#203759] dark:border-[#223f69]">
            <form action="/register" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="flex-shrink-0 flex items-center justify-center mb-4 mt-6">
                    <input type="file"
                           id="profile" name="profile" inputs="files"
                           class="w-24 h-24 [clip-path:circle()] bg-no-repeat bg-cover bg-center text-transparent file:bg-transparent file:text-transparent file:border-none file:text-white file:w-full file:h-full file:[clip-path:circle()] file:cursor-pointer
                           dark:mix-blend-overlay
                           "
                    >
                </div>
                <x-form.input name="name"/>
                <x-form.input name="username"/>
                <x-form.input name="email"/>
                <x-form.input name="password" type="password"/>
                <div class="mt-10 mb-12">
                    <x-form.button class="w-full">Register</x-form.button>
                </div>
            </form>
            {{-- ********************************************************** --}}
            {{--            @if($errors->any())--}}
            {{--                <div>--}}
            {{--                    <ul>--}}
            {{--                        @foreach($errors->all() as $error)--}}
            {{--                            <li>{{ $error }}</li>--}}
            {{--                        @endforeach--}}
            {{--                    </ul>--}}
            {{--                </div>--}}
            {{--            @endif--}}
            {{-- ********************************************************** --}}
        </main>
    </section>
    <x-script/>
</x-layout>
