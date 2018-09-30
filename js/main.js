// Mobile menu toggle
const headerTrigger = document.querySelector('.header__menu-trigger');
const header = document.querySelector('.header');

if (headerTrigger) {
  headerTrigger.addEventListener('click', (e) => {
    e.preventDefault();
    document.body.classList.toggle('has-open-nav');
  });
}

// Homepage facts rollover script
const activeFactBlock = document.querySelector('.fact-block__fact.is-active-fact-block');
const factBlocks = document.querySelectorAll('.fact-block__fact');

if (factBlocks !== null) {
  [...factBlocks].forEach(factBlock => {
    factBlock.addEventListener('mouseover', () => {
      activeFactBlock.classList.remove('is-active-fact-block');  
    });
  });
}






