import "bootstrap";
import ScrollReveal from 'scrollreveal';

ScrollReveal().reveal('.scroll-reveal', {
  duration: 1000,
  origin: 'top',
  distance: '50px',
  easing: 'ease-in-out'
});

ScrollReveal().reveal('.scroll-reveal-bottom', {
  duration: 1000,
  origin: 'bottom',
  distance: '100px',
  easing: 'ease-in-out'
});

ScrollReveal().reveal('.scroll-reveal-left', {
  duration: 1000,
  origin: 'left',
  distance: '50px',
  easing: 'ease-in-out'
});

ScrollReveal().reveal('.scroll-reveal-left-step-1', {
  duration: 1000,
  origin: 'left',
  distance: '100px',
  easing: 'ease-in-out'
});

ScrollReveal().reveal('.scroll-reveal-left-step-2', {
  duration: 1000,
  origin: 'left',
  distance: '150px',
  easing: 'ease-in-out'
});

ScrollReveal().reveal('.scroll-reveal-right', {
  duration: 1000,
  origin: 'right',
  distance: '50px',
  easing: 'ease-in-out'
});

ScrollReveal().reveal('.scroll-reveal-top', {
  duration: 1000,
  origin: 'top',
  distance: '50px',
  easing: 'ease-in-out'
});

/* Navbar Scroll */
const navbar = document.querySelector('.navbar');

function handleScroll() {
  const footer = document.getElementById("footer");
  const scrollToTop = document.getElementById("scroll-to-top");

  if (window.scrollY > 50) {
    navbar.classList.add('navbar-scrolled');
  } else {
    navbar.classList.remove('navbar-scrolled');
  }

  const footerPosition = footer.getBoundingClientRect();
  const windowHeight = window.innerHeight;

  if (footerPosition.top < windowHeight) {
    scrollToTop.classList.remove("d-none");
  } else {
    scrollToTop.classList.add("d-none");
  }
}

document.addEventListener('DOMContentLoaded', handleScroll);
window.addEventListener('scroll', handleScroll);
/* Navbar Scroll - End */