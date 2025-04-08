<?= $this->include('layout/header') ?>


<section class="hero">
  <div class="hero-container">
    <!-- Carousel Section -->
    <div class="carousel">
      <div class="carousel-images">
        <img src="/images/bg2.png" class="active" alt="Slide 1">
        <img src="/images/bg3.jpg" alt="Slide 2">
        <img src="/images/bg4.jpg" alt="Slide 3">
      </div>
      <button class="carousel-btn prev">&#10094;</button>
      <button class="carousel-btn next">&#10095;</button>
    </div>

    <!-- Hero Content -->
    <div class="hero-content">
      <h1>
        <span class="highlight">IT SOLUTIONS</span> FOR<br>
        <span class="highlight">GROWING</span> BUSINESS
      </h1>
      <a href="#" class="hero-button">LEARN MORE</a>
    </div>
  </div>
</section>
<script>
  const images = document.querySelectorAll('.carousel-images img');
  const prev = document.querySelector('.carousel-btn.prev');
  const next = document.querySelector('.carousel-btn.next');
  let currentIndex = 0;

  function showImage(index) {
    images.forEach((img, i) => {
      img.classList.remove('active');
      if (i === index) img.classList.add('active');
    });
  }

  prev.addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + images.length) % images.length;
    showImage(currentIndex);
  });

  next.addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
  });

  // Optional auto-play
  setInterval(() => {
    currentIndex = (currentIndex + 1) % images.length;
    showImage(currentIndex);
  }, 5000);
</script>



