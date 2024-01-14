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
</head>
<body class="" style="font-family: 'Open Sans'">

<div class="grid md:grid-cols-4"> <!-- content wrapper -->
    <div class="md:col-span-1 md:flex md:justify-end">
        <nav class="text-right">
            <div class="flex justify-between items-center">
                <h1 class="font-bold uppercase p-4 border-b border-gray-100">
                    <a href="/" class="hover:text-gray-700">Food Ninja</a>
                </h1>
                <div class="px-4 cursor-pointer md:hidden" id="menu-btn">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
                    </svg>
                </div>
            </div>
            <ul class="text-sm mt-4 font-semibold hidden md:block" id="menu">
                <li class="py-1">
                    <a href="#" class="px-4 flex justify-end gap-x-2 border-r-4 border-primary">
                        <span>Home</span>
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 12l8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" />
                        </svg>
                    </a>
                </li>
                <li class="py-1">
                    <a href="#" class="px-4 flex justify-end gap-x-2  border-r-4 border-white">
                        <span>About</span>
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M9.879 7.519c1.171-1.025 3.071-1.025 4.242 0 1.172 1.025 1.172 2.687 0 3.712-.203.179-.43.326-.67.442-.745.361-1.45.999-1.45 1.827v.75M21 12a9 9 0 11-18 0 9 9 0 0118 0zm-9 5.25h.008v.008H12v-.008z" />
                        </svg>
                    </a>
                </li>
                <li class="py-1">
                    <a href="#" class="px-4 flex justify-end gap-x-2  border-r-4 border-white">
                        <span>Contact</span>
                        <svg class="w-5" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M2.25 6.75c0 8.284 6.716 15 15 15h2.25a2.25 2.25 0 002.25-2.25v-1.372c0-.516-.351-.966-.852-1.091l-4.423-1.106c-.44-.11-.902.055-1.173.417l-.97 1.293c-.282.376-.769.542-1.21.38a12.035 12.035 0 01-7.143-7.143c-.162-.441.004-.928.38-1.21l1.293-.97c.363-.271.527-.734.417-1.173L6.963 3.102a1.125 1.125 0 00-1.091-.852H4.5A2.25 2.25 0 002.25 4.5v2.25z" />
                        </svg>
                    </a>
                </li>
            </ul>
        </nav>
    </div> <!-- end nav -->
    <main class="px-16 py-6 bg-gray-100 md:col-span-3">
        <div class="flex justify-center md:justify-end gap-x-2">
            <a href="#" class="btn text-primary md:border-2 border-primary hover:bg-primary hover:text-white transition ease-in">Log in</a>
            <a href="#" class="btn text-primary md:border-2 border-primary hover:bg-primary hover:text-white transition ease-in">Sign up</a>
        </div>

        <header>
            <h2 class="text-gray-700 py-3 text-6xl font-semibold ">Recipes</h2>
            <h3 class="text-2xl font-semibold">For Ninjas</h3>
        </header>

        <div>
            <h4 class="font-bold mt-12 pb-2 border-b border-gray-200">Latest Recipes</h4>

            <div class="mt-8 grid lg:grid-cols-3 gap-10">
                <!-- cards go here! -->
                <div class="card hover:shadow-lg">
                    <img src="images/pizza.jpg" alt="pizza" class="w-full h-32 sm:h-48 object-cover">
                    <div class="m-4">
                        <span class="font-bold">Pizza</span>
                        <span class="block text-sm text-gray-500">Recipe by something</span>
                    </div>
                    <div class="badge">
                        <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>40 min</span>
                    </div>
                </div>
                <div class="card hover:shadow-lg">
                    <img src="images/burger.jpg" alt="burger" class="w-full h-32 sm:h-48 object-cover">
                    <div class="m-4">
                        <span class="font-bold">Burger</span>
                        <span class="block text-sm text-gray-500">Recipe by something</span>
                    </div>
                    <div class="badge">
                        <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>32 min</span>
                    </div>
                </div>
                <div class="card hover:shadow-lg">
                    <img src="images/beefburger.jpg" alt="beefburger" class="w-full h-32 sm:h-48 object-cover">
                    <div class="m-4">
                        <span class="font-bold">Beef Burger</span>
                        <span class="block text-sm text-gray-500">Recipe by something</span>
                    </div>
                    <div class="badge">
                        <svg class="w-5 inline-block" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 6v6h4.5m4.5 0a9 9 0 11-18 0 9 9 0 0118 0z" />
                        </svg>
                        <span>25 min</span>
                    </div>
                </div>
            </div>

            <h4 class="font-bold mt-12 pb-2 border-b border-gray-200">Most Popular</h4>
            <div class="mt-8">
                <!-- cards go here -->
            </div>
            <div class="flex justify-center">
                <div class="btn bg-secondary-100 hover:shadow-inner hover:scale-125 hover:bg-opacity-50 transition ease-out duration-300">Load More</div>
            </div>
        </div>
    </main>
</div>

<svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
    <path stroke-linecap="round" d="M16.5 12a4.5 4.5 0 11-9 0 4.5 4.5 0 019 0zm0 0c0 1.657 1.007 3 2.25 3S21 13.657 21 12a9 9 0 10-2.636 6.364M16.5 12V8.25" />
</svg>

<script>
    const menuBtn = document.querySelector("#menu-btn");
    const menu = document.querySelector("#menu");

    menuBtn.addEventListener('click', () => {
        if (menu.classList.contains('hidden'))
            menu.classList.remove('hidden');
        else
            menu.classList.add('hidden');
    })
</script>


</body>
</html>
