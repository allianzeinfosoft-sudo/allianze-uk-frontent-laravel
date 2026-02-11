<li class="{{ !empty($item['children']) ? 'menu-item-has-children' : '' }}">
    
    <a href="{{ url($item['url']) ?? '#' }}">
        {{ $item['title'] ?? '' }}
    </a>

    @if(!empty($item['children']))
        <ul class="sub-menu">
            @foreach($item['children'] as $child)
                @include('components.mobile-menu-item', ['item' => $child])
            @endforeach
        </ul>
    @endif

</li>
