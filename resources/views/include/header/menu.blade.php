<nav class="nav">
  <div class="link_left">
    <nav class="header__menu menu">
      <ul class="menu__list">
        <li class="menu__item"><a href="{{$menu->leftMenu->link}}" class="menu__link">{{$menu->leftMenu->title}}</a></li>
        <li class="menu__item"><a href="#" class="menu__link">Blog</a></li>
        <li class="menu__item"><a href="#" class="menu__link">For Restraunts</a></li>
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
    <li class="link__right"><a class="" href="#">Login</a></li>
    <li class="link__right"><a class="" href="#">Sign up</a></li>
    <li class="link__right"   ><button data-type="popup-1"  class="" href="#"><img src="{{asset('images/icon/search-ico.png')}}" 
          alt=""></button></li>
  </ul>

  
    
</nav>