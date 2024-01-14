@props(['src' => null])
<img {{  $attributes(["class"=>"rounded-xl w-full" . ($src ? '':' dark:mix-blend-overlay')]) }}
     src="{{ asset('storage/' . ($src ?? 'thumbnails/default/default-loading-image.png')) }}"
     id="thumbnail"
    alt="post"
>
