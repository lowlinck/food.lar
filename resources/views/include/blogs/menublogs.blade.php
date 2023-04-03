<div class="menu">
    <ul class="undermenu">
        @foreach ($undermenus as $menu)
        <li><a class="small__border" href="{{$menu->link}}">{{$menu->name}}</a></li>
        @endforeach
        
    </ul>
</div>