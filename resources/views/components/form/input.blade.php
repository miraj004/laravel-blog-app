@props(['name'])
<div class="mb-6">
 <x-form.label name="{{ $name }}"/>
  <input {{ $attributes(['class'=>"transition-colors duration-300 border border-gray-300 rounded p-2 w-full bg-gray-200 focus:bg-white focus:ring-2 focus:ring-blue-500 outline-none shadow-inner focus:shadow-none dark:selection:bg-primary  dark:text-white dark:bg-[#496793b4] dark:border-[#5b81b9] dark:focus:ring-primary dark:focus:border-primary dark:focus:bg-[#203759]",
                           'value' => old($name), 'type' => "text"]) }}
           id="{{ $name }}" name="{{ $name }}">
 <x-form.error name="{{ $name }}"/>
</div>
