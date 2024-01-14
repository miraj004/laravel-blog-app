<!doctype html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <script src="{{ asset('cdn.min.js') }}"></script>
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
</head>
<body class="dark:bg-[#1d2e4a] dark:text-gray-200" style="font-family: 'Open Sans'">
<section class="px-6 py-8">
    <nav class="md:flex md:justify-between md:items-center">
        <div>
            <a href="/">
                <img width="80" height="80" src="{{ asset('images/pngs/Color logo - no background(2).png') }}" alt="Laracasts Logo" width="165" height="16">
            </a>
        </div>
        <div class="mt-8 md:mt-0 flex md:flex-row flex-row-reverse items-center justify-between">
            {{--
                    @if (auth()->check()) =>  if is auth
                    @if (!auth()->check()) => if is not auth
                    @unless (auth()->check()) => if is not auth
                    @guest => if is guest
                    @auth => if is auth
            --}}
            @auth
                <x-dropdown class="cursor-pointer" :img="true">
                    <x-slot name="trigger">
                        <div class="flex items-center justify-end w-full">
                            <div class="w-9 h-9 rounded-full overflow-hidden mr-2">
                                <x-auth-profile class="w-full h-full object-cover" :src="auth()->user()?->profile"/>
                            </div>
                            {{ auth()->user()->name }}
                        </div>
                    </x-slot>
                    @admin {{-- @admin [custom blade directive using Blade class]  -or-  @can('admin') -or- @if(auth()->user()->can('admin')  --}}
                    <x-dropdown-item href="/admin/posts/create">New Post</x-dropdown-item>
                    <x-dropdown-item href="/admin/posts">All Posts</x-dropdown-item>
                    @endadmin
                    <x-dropdown-item @click="document.getElementById('logout-form').submit()">Logout</x-dropdown-item>
                </x-dropdown>
                <form id="logout-form" action="/logout" method="post" class="hidden">
                    @csrf
                </form>
            @else
                <div class="space-x-3">
                    <a href="/register"
                       class="text-xs font-bold uppercase dark:text-white dark:hover:underline">Register</a>
                    <a href="/login" class="text-xs font-bold uppercase dark:text-white dark:hover:underline">Login</a>
                </div>
            @endauth
            <a href="#main-footer"
               class="ml-3 rounded-full text-xs font-semibold bg-blue-500 text-white uppercase py-2 px-4
               transition duration-200
               dark:bg-transparent dark:border dark:border-gray-200
               dark:hover:bg-[#15c7b3] dark:hover:text-gray-900 dark:hover:border-[#15c7b3]
               ">
                Subscribe for Updates
            </a>

        </div>
    </nav>
    {{ $slot }}
    <footer id="main-footer"
            class="bg-gray-100 border border-black border-opacity-5 rounded-xl text-center py-16 px-10 mt-16 dark:bg-gradient-to-b dark:from-[#203759] dark:to-[#27497a] dark:border-[#223f69]">
        <img src="{{ asset('images/pngs/White logo - no background(2).png') }}" alt="" class="mx-auto" style="width: 145px;">
        <h5 class="text-3xl">Stay in touch with the latest posts</h5>
        <p class="text-sm mt-3">Promise to keep the inbox clean. No bugs.</p>
        <div class="mt-10">
            <div class="relative inline-block mx-auto lg:bg-gray-200 rounded-full lg:dark:bg-[#35527f]">
                <form method="POST" action="#" class="lg:flex text-sm">
                    <div class="lg:py-3 lg:px-5 flex items-center">
                        <label for="email" class="hidden lg:inline-block">
                            <img src="{{ asset('images/mailbox-icon.svg') }}" alt="mailbox letter">
                        </label>
                        <input id="email" type="text" placeholder="Your email address"
                               class="lg:bg-transparent py-2 lg:py-0 pl-4 focus-within:outline-none dark:bg-[#35527f]
                               dark:selection:bg-sky-600">
                    </div>
                    <button type="submit"
                            class="transition-colors duration-300 bg-blue-500 hover:bg-blue-600 dark:bg-primary-100 dark:hover:bg-primary-200 mt-4 lg:mt-0 lg:ml-3 rounded-full text-xs font-semibold text-white uppercase py-3 px-8"
                    >
                        Subscribe
                    </button>
                </form>
            </div>
        </div>
    </footer>
</section>
<x-flash/>
</body>
</html>
