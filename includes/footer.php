<footer>
  <div class="container footer-inner">
    <div class="left">
      <p>&copy; <?= date('Y') ?> Bintang Terang Makmur. All Rights Reserved.</p>
    </div>
    <div class="right">
      <p>Ikuti kami:
        <a href="#" aria-label="Facebook" title="Facebook"><i class="fab fa-facebook-f"></i></a>
        <a href="https://www.instagram.com/bintangterangmakmur/" aria-label="Instagram" title="Instagram"><i class="fab fa-instagram"></i></a>
        <a href="https://wa.me/628118060777" aria-label="WhatsApp" title="WhatsApp"><i class="fab fa-whatsapp"></i></a>
      </p>
    </div>
  </div>
</footer>

<!-- Font Awesome CDN -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />

<!-- JS Libraries -->
<script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<!-- Main JS (cache-bust) -->
<script src="assets/js/main.js?v=<?= time(); ?>"></script>

<script>
  if (typeof AOS !== 'undefined') {
    AOS.init({ duration: 800, once: true });
  }

  if (typeof Swiper !== 'undefined') {
    var swiper = new Swiper('.swiper', {
      loop: true,
      autoplay: { delay: 3000 },
      pagination: { el: '.swiper-pagination', clickable: true }
    });
  }
</script>
