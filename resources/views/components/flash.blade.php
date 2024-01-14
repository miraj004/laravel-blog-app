@if(session()->has('success'))
    <div class="bg-primary-100 text-sm text-white font-semibold px-4 py-2 fixed bottom-2 right-2 rounded-xl shadow-md
     dark:bg-gradient-to-r dark:from-blue-500 dark:to-green-500 dark:text-white"
         x-transition:enter="transition ease-out duration-200"
         x-transition:enter-start="transform opacity-0 scale-95"
         x-transition:enter-end="transform opacity-100 scale-100"
         x-transition:leave="transition ease-in duration-75"
         x-transition:leave-start="transform opacity-100 scale-100"
         x-transition:leave-end="transform opacity-0 scale-95"
         x-data="{show:true}"
         x-show="show"
         x-init="setTimeout(()=>show = false, 3000)"
    >
        <p class="text-center">
            {{ session()->get('success') }}
        </p>
    </div>
@endif
