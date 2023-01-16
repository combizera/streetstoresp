/*==================== CHANGE BACKGROUND HEADER ====================*/
function scrollHeader() {
  const nav = document.getElementById('header');
  // When the scroll is greater than 200 viewport height, add the scroll-header class to the header tag
  if (this.scrollY >= 50) nav.classList.add('active-header');
  else nav.classList.remove('active-header');
}
window.addEventListener('scroll', scrollHeader);

/*==================== HEADER MOBILE ====================*/

function btnHamburguer() {
  const btnMobile = document.getElementById('btn-mobile');

  function toggleMenu(event) {
    if (event.type === 'touchstart') event.preventDefault();
    const nav = document.querySelector('.header-nav');
    nav.classList.toggle('active');
    const active = nav.classList.contains('active');
    event.currentTarget.setAttribute('aria-expanded', active);

    if (active) {
      event.currentTarget.setAttribute('aria-label', 'Fechar Menu');
    } else {
      event.currentTarget.setAttribute('aria-label', 'Abrir Menu');
    }
  }

  btnMobile.addEventListener('click', toggleMenu);
  btnMobile.addEventListener('touchstart', toggleMenu);

  const links = document.querySelectorAll('#menu a');

  links.forEach(function (link) {
    link.addEventListener('click', toggleMenu);
  })
}

btnHamburguer();

new Swiper('.galeria', {
  direction: 'horizontal',
  grabCursor: true,
  slidesPerView: 1.1,
  spaceBetween: 8,
  breakpoints: {
    640: {
      slidesPerView: 3.1,
      spaceBetween: 8
    },
    920: {
      slidesPerView: 3.5,
      spaceBetween: 10
    },
  },
});
