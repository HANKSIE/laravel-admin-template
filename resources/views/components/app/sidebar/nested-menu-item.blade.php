@props(['item' => null])
@isset($item['submenu'])
    <div x-data="{ expanded: @js($item['is_active'] ?? false) }">
        <div x-on:click="expanded = ! expanded">
            <x-app.sidebar.menu-item :item="$item" class="py-0 ps-0" />
        </div>   
        <div x-show="expanded" x-collapse>
            @foreach($item['submenu'] as $subItem)
                <x-app.sidebar.nested-menu-item :item="$subItem"/>
            @endforeach
        </div>
    </div>
@else
    <x-app.sidebar.menu-item :item="$item" />
@endisset
@pushOnce('css')
<style>
    .x-accordion-button:not(.collapsed) {
        box-shadow: none;
    }
</style>
@endPushOnce