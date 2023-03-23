<nav class="nav">
  <div class="link_left">
    <nav class="header__menu menu">
      <ul class="menu__list">
          @foreach($leftMenu as $item)         
        <li class="menu__item"><a href="{{$item->link}}" class="menu__link">{{$item->title}}</a></li>
        @endforeach       
      </ul>
      @include('include.header.iconMenu')
    </nav>
    <div class="menus "><a class="" href="#">Menu</a></div>
    <div class="link_restrance ">
      <a class="" href="#">For restaraunts</a>
    </div>
  </div>
  <div class=" block_icon "><img class=" link_icon " src="{{asset('images/icon/Frame.png')}}"  alt=""></div>
  <ul class="link_right">
    @foreach($rightMenu as $index => $item)
    @if ($index != 2)
    <li class="link__right"><a class="" href="{{$item->link}}">{{$item->title}}</a></li>
    @else    
    <li class="link__right" ><button data-type="popup-1"  class="" href="{{$item->link}}"><img src="{{asset($item->title)}}" alt=""></button></li>
    @endif    
    @endforeach  
  </ul>    
</nav>