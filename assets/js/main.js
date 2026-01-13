/**
 * main.js – cleaned & SSI-safe
 * malwinatomasz.pl
 */

(function () {
  "use strict";

  const body = document.body;

  /* --------------------------------------------------
   * Header scrolled state
   * -------------------------------------------------- */
  const header = document.querySelector('#header');

  function toggleScrolled() {
    if (!header) return;
    body.classList.toggle('scrolled', window.scrollY > 100);
  }

  window.addEventListener('load', toggleScrolled);
  window.addEventListener('scroll', toggleScrolled);

  /* --------------------------------------------------
   * Mobile navigation toggle
   * -------------------------------------------------- */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function toggleMobileNav() {
    if (!mobileNavToggleBtn) return;
    body.classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }

  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', toggleMobileNav);
  }

  /* Close mobile nav on menu click */
  const navLinks = document.querySelectorAll('#navmenu a');
  if (navLinks.length && mobileNavToggleBtn) {
    navLinks.forEach(link => {
      link.addEventListener('click', () => {
        if (body.classList.contains('mobile-nav-active')) {
          toggleMobileNav();
        }
      });
    });
  }

  /* --------------------------------------------------
   * Preloader
   * -------------------------------------------------- */
  const preloader = document.querySelector('#preloader');
  if (preloader) {
    window.addEventListener('load', () => {
      preloader.remove();
    });
  }

  /* --------------------------------------------------
   * Scroll to top button
   * -------------------------------------------------- */
  const scrollTopBtn = document.querySelector('.scroll-top');

  function toggleScrollTop() {
    if (!scrollTopBtn) return;
    scrollTopBtn.classList.toggle('active', window.scrollY > 100);
  }

  if (scrollTopBtn) {
    scrollTopBtn.addEventListener('click', e => {
      e.preventDefault();
      window.scrollTo({
        top: 0,
        behavior: 'smooth'
      });
    });
  }

  window.addEventListener('load', toggleScrollTop);
  window.addEventListener('scroll', toggleScrollTop);

  /* --------------------------------------------------
   * AOS (Animate On Scroll)
   * -------------------------------------------------- */
  window.addEventListener('load', () => {
    if (window.AOS) {
      AOS.init({
        duration: 600,
        easing: 'ease-in-out',
        once: true,
        mirror: false
      });
    }
  });

  /* --------------------------------------------------
   * GLightbox
   * -------------------------------------------------- */
  if (window.GLightbox) {
    GLightbox({
      selector: '.glightbox'
    });
  }

})();
