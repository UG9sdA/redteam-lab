<?php include 'header.php'; ?>

<main>
  <section class="about">
    <h2>About Us</h2>
    <p>We are a team of passionate developers and cybersecurity experts focused on building secure, reliable, and engaging web experiences.</p>
  </section>

  <section class="carousel-section">
    <h3>Meet Our Founders</h3>
    <!-- Swiper -->
    <div class="swiper-container">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="images/founder1.jpg" alt="Founder 1" width="300" height="300">
          <h4>Jane Doe</h4>
          <p>Security Engineer</p>
        </div>
        <div class="swiper-slide">
          <img src="images/founder2.jpg" alt="Founder 2" width="300" height="300">
          <h4>John Smith</h4>
          <p>Lead Developer</p>
        </div>
        <div class="swiper-slide">
          <img src="images/founder3.jpg" alt="Founder 3" width="300" height="300">
          <h4>Lisa Ray</h4>
          <p>Product Manager</p>
        </div>
      </div>
      <!-- Add Pagination -->
      <div class="swiper-pagination"></div>
      <!-- Add Arrows -->
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
  </section>
</main>

<?php include 'footer.php'; ?>

<!-- Swiper.js and styles -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />
<script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>
<script>
  const swiper = new Swiper('.swiper-container', {
    loop: true,
    pagination: {
      el: '.swiper-pagination',
    },
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });
</script>
