<nav class="nav">
  <div class="link_left">
    <nav class="header__menu menu">
      <ul class="menu__list">
        <li class="menu__item"><a href="#" class="menu__link">Home</a></li>
        <li class="menu__item"><a href="#" class="menu__link">Blog</a></li>
        <li class="menu__item1"><a href="#" class="menu__link">For Restraunts</a></li>
      </ul>
      @include('include.header.iconMenu')


    </nav>
    <div class="menus "><a class="" href="#">Menu</a></div>


    <div class="link_restrance ">
      <a class="" href="#">For restaraunts</a>
    </div>
  </div>


  <div class=" block_icon "><img class=" link_icon " src="{{asset('images/icon/Frame.png')}}"  alt=""></div>


  <div class="link_right">
    <div class="link__login "><a class="" href="#">Login</a></div>

    <div class="link__singup  "><a class="" href="#">Sign up</a></div>

    <div class="link__search   "   ><button data-type="popup-1"  class="" href="#"><img src="{{asset('images/icon/search-ico.png')}}" 
          alt=""></button></div>
  </div>

  <div class="popup _overlay-bg" data-popup="popup-1">
    <div class="popup__content">
      <h2 class="popup__title">Всплывающее окно</h2>
      <p class="popup__text">Содержимое всплывающего окна</p>
      <button class="button-close">Закрыть окно</button>
    </div>
</nav>