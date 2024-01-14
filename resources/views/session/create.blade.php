<x-layout>
    <section class="px-6 py-8">
        <main class="max-w-md text-sm mx-auto px-10 border bg-gray-50 rounded-xl shadow-inner dark:bg-[#203759] dark:border-[#223f69]">
            <h1 class="text-center text-xl font-bold my-10">Login</h1>
            <form action="/login" method="POST">
                @csrf
                <x-form.input name="email" type="email"/>
                <x-form.input name="password" type="password"/>
                <div class="mt-10 mb-12">
                    <x-form.button class="w-full">Login</x-form.button>
                </div>
            </form>
        </main>
    </section>
</x-layout>
