// main.js - handles menu toggle, smooth scroll, counters, darkmode

document.addEventListener('DOMContentLoaded', function() {

  // Hamburger menu toggle
  var menuToggle = document.getElementById('menu-toggle');
  var navMenu = document.getElementById('nav-menu');
  if (menuToggle && navMenu) {
    menuToggle.addEventListener('click', function() {
      navMenu.classList.toggle('active');
    });
  }

  // Smooth scroll for internal anchors
  document.querySelectorAll('a[href^="#"]').forEach(function(anchor) {
    anchor.addEventListener('click', function(e) {
      e.preventDefault();
      var target = document.querySelector(this.getAttribute('href'));
      if (target) {
        target.scrollIntoView({ behavior: 'smooth' });
      }
    });
  });

  // Animated counters (only run when visible)
  var counters = document.querySelectorAll('.counter');
  if (counters.length) {
    var runCounters = function() {
      counters.forEach(function(counter) {
        var target = +counter.getAttribute('data-target');
        var current = +counter.innerText || 0;
        var step = Math.ceil(target / 200);

        var update = function() {
          current += step;
          counter.innerText = current > target ? target : current;
          if (current < target) {
            setTimeout(update, 20);
          }
        };
        if (counter.getAttribute('data-run') !== 'true') {
          update();
          counter.setAttribute('data-run', 'true');
        }
      });
    };

    // observe visibility
    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          runCounters();
        }
      });
    }, { threshold: 0.5 });

    counters.forEach(function(c) { observer.observe(c); });
  }

  // Dark mode toggle + logo change
  var darkToggle = document.getElementById('darkModeToggle');
  var logo = document.getElementById('logo'); // Pastikan logo punya id="logo"

  if (darkToggle) {
    // load saved theme
    if (localStorage.getItem('theme') === 'dark') {
      document.body.classList.add('dark');
      if (logo) logo.src = 'assets/img/ACP-dark.png';
      darkToggle.textContent = '🌞';
    } else {
      if (logo) logo.src = 'assets/img/ACP-default.png';
      darkToggle.textContent = '🌙';
    }

    darkToggle.addEventListener('click', function() {
      document.body.classList.toggle('dark');

      if (document.body.classList.contains('dark')) {
        localStorage.setItem('theme', 'dark');
        if (logo) logo.src = 'assets/img/ACP-dark.png';
        darkToggle.textContent = '🌞';
      } else {
        localStorage.removeItem('theme');
        if (logo) logo.src = 'assets/img/ACP-default.png';
        darkToggle.textContent = '🌙';
      }
    });
  }

});

const sponsorSwiper = new Swiper('.sponsor-swiper', {
  slidesPerView: 'auto',
  spaceBetween: 30,
  loop: true,
  speed: 3000,        // kecepatan scroll, semakin kecil makin cepat
  autoplay: {
    delay: 0,         // tanpa delay supaya terus berjalan
    disableOnInteraction: false,
  },
  freeMode: true,     // supaya slider bebas berjalan tanpa berhenti
  freeModeMomentum: false,
  allowTouchMove: false,  // nonaktifkan swipe manual
});
