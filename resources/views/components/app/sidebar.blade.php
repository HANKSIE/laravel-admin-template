<div>
    <div
        class="bg-primary d-flex justify-content-center align-items-center"
        style="height: {{ config('adminpanel.header.height') }}"
    >
        <div class="h3">LOGO</div>
    </div>
    <div
        style="
            height: calc(100vh - {{ config('adminpanel.header.height') }});
            overflow-y:scroll;
        "
    >
        @foreach(config('adminpanel.menu') as $item)
            <x-app.sidebar.nested-menu-item :item="$item" />
        @endforeach
    </div>
</div>