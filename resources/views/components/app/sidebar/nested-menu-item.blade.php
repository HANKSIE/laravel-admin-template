@props(['item' => null])
@isset($item['submenu'])
    <div class="accordion accordion-flush" id="{{ $menuWrapperId = uniqueHtmlTagId() }}">
        <div class="accordion-item">
            <div class="accordion-header">
                <x-app.sidebar.menu-item :item="$item" class="py-0 ps-0 accordion-button x-accordion-button" data-bs-toggle="collapse" data-bs-target="#{{ $menuId = uniqueHtmlTagId() }}"/>
            </div>
            <div id="{{ $menuId }}" class="accordion-collapse collapse show" data-bs-parent="#{{ $menuWrapperId }}">
                <div class="p-0 accordion-body">
                    @foreach($item['submenu'] as $subItem)
                        <x-app.sidebar.nested-menu-item :item="$subItem"/>
                    @endforeach
                </div>
            </div>
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