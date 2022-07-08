// calculate the height of the fixed nav and create a css height property to offset the scroll button target
const navigationHeight = document.querySelector('.primary-navigation').offsetHeight;
document.documentElement.style.setProperty('--scroll-padding', navigationHeight - 1 + "px");
