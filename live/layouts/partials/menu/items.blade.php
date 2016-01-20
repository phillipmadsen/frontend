@foreach($items as $item)
    <li @if($item->hasChildren())class ="sub-menu "@endif>
        @if($item->link) <a @if($item->hasChildren()) class="sf-with-ul dropdown-toggle" data-toggle="dropdown" @endif href="{{ $item->url() }}">
            {!! $item->title !!}
            @if($item->hasChildren()) <b class="caret"></b> @endif
        </a>
        @else
            {{$item->title}}
        @endif
        @if($item->hasChildren())
            <ul class="sub-menu ">
                @foreach($item->children() as $child)
                    <li><a class="sf-with-ul" href="{{ $child->url() }}">{{ $child->title }}</a></li>
                @endforeach
            </ul>
        @endif
    </li>
    @if($item->divider)
        <li{{\HTML::attributes($item->divider)}}></li>
    @endif
@endforeach