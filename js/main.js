// Mobile menu toggle
const headerTrigger = document.querySelector('.header__menu-trigger');
const header = document.querySelector('.header');

if (headerTrigger) {
  headerTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    document.body.classList.toggle('has-open-nav');
  });
}