<li class="{{ $item['class'] ?? '' }}">
    <a href="{{ url($item['url']) }}">
        {{ $item['title'] }}
    </a>

    @if(!empty($item['children']))
        <ul class="sub-menu">
            @foreach($item['children'] as $child)
                @include('components.menu-item', ['item' => $child])
            @endforeach
        </ul>
    @endif
</li>