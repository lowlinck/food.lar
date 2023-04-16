// Модуль работы с меню (бургер) =======================================================================================================================================================================================================================
const html = document.documentElement
const body = document.body
const firstScreen = document.querySelector('[data-observ]')
const burgerButton = document.querySelector('.icon-menu')
const menu = document.querySelector('.menu')
const menuList = document.querySelector('.menu__list')

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
  export {
    menuInit,
    menuOpen,
    menuClose,
  }
