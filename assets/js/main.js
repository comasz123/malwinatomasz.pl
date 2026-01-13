/**
 * Custom main.js – cleaned for malwinatomasz.pl
 * Based on BootstrapMade template, unused code removed
 */

(function () {
  "use strict";

  /* --------------------------------------------------
   * Header scrolled state
   * -------------------------------------------------- */
  const header = document.querySelector('#header');
  const body = document.body;

  function toggleScrolled() {
    if (!header || !header.classList.contains('fixed-top')) return;
    body.classList.toggle('scrolled', window.scrollY > 100);
  }

  window.addEventListener('scroll', toggleScrolled);
  window.addEventListener('load', toggleScrolled);

  /* --------------------------------------------------
   * Mobile navigation toggle
   * -------------------------------------------------- */
  const mobileNavToggleBtn = document.querySelector('.mobile-nav-toggle');

  function toggleMobileNav() {
    body.classList.toggle('mobile-nav-active');
    mobileNavToggleBtn.classList.toggle('bi-list');
    mobileNavToggleBtn.classList.toggle('bi-x');
  }

  if (mobileNavToggleBtn) {
    mobileNavToggleBtn.addEventListener('click', toggleMobileNav);
  }

  /* Close mobile nav on link click */
  document.querySelectorAll('#navmenu a').forEach(link => {
    link.addEventListener('click', () => {
      if (body.classList.contains('mobile-nav-active')) {
        toggleMobileNav();
      }
    });
  });

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
      window.scrollTo({ top: 0, behavior: 'smooth' });
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
