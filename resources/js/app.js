require('./bootstrap');

// calculate the height of the fixed nav and create a css height variable to offset the scroll button target so it's not covered by the fixed nav
const navigationHeight = document.querySelector('.primary-navigation').offsetHeight;
document.documentElement.style.setProperty('--scroll-padding', navigationHeight - 1 + "px");