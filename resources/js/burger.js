// Модуль работы с меню (бургер) =======================================================================================================================================================================================================================
const menuInit = () => {
    if (burgerButton) {
      document.addEventListener('click', ({ target }) => {
        if (target.closest('.icon-menu')) {
          html.classList.toggle('menu-open');
          menuList.classList.toggle('active');
         
          toggleBodyLock(html.classList.contains('menu-open'))
        }
      })
    }
  }
  const menuOpen = () => {
    toggleBodyLock(true)
    html.classList.add('menu-open')
  }
  const menuClose = () => {
    toggleBodyLock(false)
    html.classList.remove('menu-open')
  }