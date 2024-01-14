@props(['src' => 'profiles/default/default-user.svg'])
<img
    {{ $attributes(['class'=>"[clip-path:circle()]"]) }}
     width="50" height="50"
    src="{{ asset('storage/' . $src)  }}"
    alt="User"
>
