import "bootstrap";
import ScrollReveal from 'scrollreveal';

document.addEventListener('DOMContentLoaded', function() {
  
  /* Scroll Reveal */
  const sr = ScrollReveal({
    duration: 1000,
    origin: 'top',
    distance: '50px',
    easing: 'ease-in-out',
    reset: false
  });

  sr.reveal('.scroll-reveal');
  sr.reveal('.scroll-reveal-bottom', { origin: 'bottom', distance: '100px' });
  sr.reveal('.scroll-reveal-left', { origin: 'left' });
  sr.reveal('.scroll-reveal-left-step-1', { origin: 'left', distance: '100px' });
  sr.reveal('.scroll-reveal-left-step-2', { origin: 'left', distance: '150px' });
  sr.reveal('.scroll-reveal-right', { origin: 'right' });
  sr.reveal('.scroll-reveal-top', { origin: 'top' });

  /* Navbar Scroll */
  const navbar = document.querySelector('.navbar');
  const footer = document.getElementById("footer");
  const scrollToTop = document.getElementById("scroll-to-top");

  function handleScroll() {
    if (navbar) {
      if (window.scrollY > 50) {
        navbar.classList.add('navbar-scrolled');
      } else {
        navbar.classList.remove('navbar-scrolled');
      }
    }
  
    if (footer && scrollToTop) {
      const footerPosition = footer.getBoundingClientRect();
      const windowHeight = window.innerHeight;
  
      if (footerPosition.top < windowHeight) {
        scrollToTop.classList.remove("d-none");
      } else {
        scrollToTop.classList.add("d-none");
      }
    }
  }

  handleScroll(); // Initial check
  window.addEventListener('scroll', handleScroll);
  /* Navbar Scroll - End */
});

document.addEventListener("DOMContentLoaded", function () {
  const header = document.querySelector("header.navbar");
  const logo = header.querySelector("img.img-fluid");
  const originalSrc = logo.getAttribute("src");
  const scrolledSrc = logo.dataset.scrolledimage;

  window.addEventListener("scroll", function () {
    if (window.scrollY > 20) {
      if (!header.classList.contains("navbar-scrolled")) {
        header.classList.add("navbar-scrolled");
        logo.setAttribute("src", scrolledSrc);
      }
    } else {
      if (header.classList.contains("navbar-scrolled")) {
        header.classList.remove("navbar-scrolled");
        logo.setAttribute("src", originalSrc);
      }
    }
  });
});
