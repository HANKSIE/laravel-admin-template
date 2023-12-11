<div 
    style="
        height: calc(100vh - {{ config('adminpanel.header.height') }});
        overflow-y: scroll;
    "
>
    {{ $slot }}
</div>