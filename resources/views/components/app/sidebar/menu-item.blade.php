@props(['item' => $item])
<a
    {{
        $attributes->class([
            'text-decoration-none',
        ])
    }}
    href="#"
>
    <div
        class="gap-2 d-flex align-items-center"
        style="padding: 1rem 1.25rem"
    >   
        <div class="d-flex align-items-center" style="width: 24px">
            @isset($item['icon'])
                <span class="material-symbols-outlined">
                    {{ $item['icon'] }}
                </span>
            @endisset
        </div>
        <span
            style="white-space:nowrap"
        >
            {{ $item['text'] }}
        </span>
    </div>
</a>