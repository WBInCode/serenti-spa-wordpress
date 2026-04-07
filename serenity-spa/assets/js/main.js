(function() {
  'use strict';

  /* ---- Sticky Nav: auto-hide on scroll down, show on scroll up ---- */
  var nav = document.getElementById('nav');
  var lastScroll = 0;
  var scrollThreshold = 80;

  window.addEventListener('scroll', function() {
    var currentScroll = window.pageYOffset;
    if (currentScroll > scrollThreshold) {
      nav.classList.add('is-scrolled');
    } else {
      nav.classList.remove('is-scrolled');
    }
    if (currentScroll > lastScroll && currentScroll > 300) {
      nav.classList.add('is-hidden');
    } else {
      nav.classList.remove('is-hidden');
    }
    lastScroll = currentScroll;
  }, { passive: true });

  /* ---- Mobile hamburger ---- */
  var hamburger = document.getElementById('hamburger');
  var navLinks = document.getElementById('navLinks');
  if (hamburger) {
    hamburger.addEventListener('click', function() {
      navLinks.classList.toggle('is-open');
    });
  }

  /* ---- Intersection Observer fallback for older browsers ---- */
  if (!CSS.supports('animation-timeline', 'view()')) {
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.style.opacity = '1';
          entry.target.style.transform = 'none';
          entry.target.style.filter = 'none';
          entry.target.style.clipPath = 'inset(0)';
          entry.target.style.transition = 'all 0.7s cubic-bezier(0.25, 0.46, 0.45, 0.94)';
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });

    document.querySelectorAll(
      '.wow-blur-reveal, .wow-wipe-left, .wow-wipe-bottom, .wow-scale-center, .wow-slide-right, .wow-slide-left, .wow-skew-up, .wow-flip-in'
    ).forEach(function(el) {
      el.style.opacity = '0';
      observer.observe(el);
    });
  }

  /* ---- Counter animation ---- */
  var counters = document.querySelectorAll('[data-count]');
  if (counters.length) {
    var counterObserver = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          var el = entry.target;
          var target = parseInt(el.getAttribute('data-count'), 10);
          var current = 0;
          var duration = 2000;
          var step = target / (duration / 16);
          var text = el.textContent;
          var suffix = text.replace(/[\d\s]/g, '');

          function tick() {
            current += step;
            if (current >= target) {
              el.textContent = target.toLocaleString('pl-PL') + suffix;
            } else {
              el.textContent = Math.floor(current).toLocaleString('pl-PL') + suffix;
              requestAnimationFrame(tick);
            }
          }
          requestAnimationFrame(tick);
          counterObserver.unobserve(el);
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(function(c) { counterObserver.observe(c); });
  }

  /* ---- Form basic inline validation ---- */
  var form = document.getElementById('contactForm');
  var formPage = document.getElementById('contactFormPage');

  function handleFormSubmit(f, redirectUrl) {
    f.addEventListener('submit', function(e) {
      e.preventDefault();
      var valid = true;
      f.querySelectorAll('[required]').forEach(function(input) {
        if (!input.value.trim()) {
          input.style.borderColor = '#e85d5d';
          valid = false;
        } else {
          input.style.borderColor = '';
        }
      });
      if (valid) {
        if (redirectUrl) {
          window.location.href = redirectUrl;
        } else {
          var btn = f.querySelector('button[type="submit"]');
          btn.innerHTML = '✓ Wysłano! Oddzwonimy wkrótce';
          btn.style.background = 'rgba(143, 170, 132, 0.3)';
          btn.style.borderColor = 'var(--accent-sage)';
          btn.disabled = true;
        }
      }
    });
  }

  if (form) handleFormSubmit(form, null);
  if (formPage) handleFormSubmit(formPage, '/podziekowanie/');

})();
