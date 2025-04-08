<?= $this->include('layout/header') ?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Hero with Carousel</title>
  <script src="https://cdn.tailwindcss.com"></script>
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
</head>


<body class="font-['Rubik'] scroll-smooth bg-gray-100">
  <section class="relative w-full h-screen bg-cover bg-center bg-no-repeat" style="background-image: url('/images/bg.jpg');">
    <div class="absolute inset-0 bg-black/50"></div>

    <div class="relative z-10 flex flex-col lg:flex-row items-center justify-center h-full px-8 gap-12 lg:gap-28">
    <!-- Carousel -->
      <div class="w-[700px] h-[550px] rounded-2xl overflow-hidden shadow-lg" x-data="carousel()" x-init="init()">
        <div class="relative w-full h-full">
          <template x-for="(image, index) in images" :key="index">
            <img
              :src="image"
              x-show="current === index"
              class="absolute top-0 left-0 w-full h-full object-contain transition-opacity duration-500"
              x-transition:enter="ease-out duration-300"
              x-transition:enter-start="opacity-0"
              x-transition:enter-end="opacity-100"
              x-transition:leave="ease-in duration-300"
              x-transition:leave-start="opacity-100"
              x-transition:leave-end="opacity-0"
            >
          </template>

          <button @click="prev" class="absolute top-1/2 left-4 transform -translate-y-1/2 bg-black/30 text-white px-3 py-2 rounded hover:bg-black/60">❮</button>
          <button @click="next" class="absolute top-1/2 right-4 transform -translate-y-1/2 bg-black/30 text-white px-3 py-2 rounded hover:bg-black/60">❯</button>
        </div>
      </div>

      <!-- Hero Content -->
      <div class="text-white max-w-lg text-center">
        <h1 class="text-4xl font-semibold leading-tight">
          <span class="bg-gradient-to-r from-green-400 to-emerald-600 text-transparent bg-clip-text font-bold">IT SOLUTIONS</span> FOR<br>
          <span class="bg-gradient-to-r from-green-400 to-emerald-600 text-transparent bg-clip-text font-bold">GROWING</span> BUSINESS
        </h1>
        <a href="#" class="mt-6 inline-block px-6 py-3 rounded-lg font-semibold text-white border-2 border-[#1B8D70] shadow-[0_0_10px_#1B8D70] hover:shadow-[0_0_20px_#1B8D70] transition-all duration-300">
  LEARN MORE
</a>

      </div>
    </div>
  </section>


  <script>
  function carousel() {
    return {
      current: 0,
      images: [
        '/images/bg2.png',
        '/images/bg3.jpg',
        '/images/bg4.jpg'
      ],
      interval: null,

      next() {
        this.current = (this.current + 1) % this.images.length;
      },
      prev() {
        this.current = (this.current - 1 + this.images.length) % this.images.length;
      },

      init() {
        this.startAutoSlide();
      },

      startAutoSlide() {
        this.interval = setInterval(() => {
          this.next();
        }, 5000); // Change every 5 seconds
      },

      stopAutoSlide() {
        clearInterval(this.interval);
      }
    }
  }
</script>



<!-- About Us Section -->
<section id="about" class="bg-[#084F3F] py-20">
  <!-- Decorative Divider with Diamonds -->
  <div class="flex justify-center items-center gap-8 px-8 md:px-20 py-6">
    
    <!-- Left Line with Diamond -->
    <div class="flex items-center w-[40%]">
      <div class="w-2.5 h-2.5 rotate-45 mr-2 bg-white"></div>
      <div class="h-0.5 flex-1 bg-white"></div>
    </div>

    <!-- Right Line with Diamond -->
    <div class="flex items-center w-[40%] justify-end">
      <div class="h-0.5 flex-1 bg-white"></div>
      <div class="w-2.5 h-2.5 rotate-45 ml-2 bg-white"></div>
    </div>
    
  </div>
</section>




  <!-- About Us Section -->
  <div class="relative w-full h-[670px] overflow-hidden">
    <!-- Background Image -->
    <img src="/images/bg5.jpg" alt="Team" class="w-full h-full object-cover">

    <!-- Right-aligned Text Overlay with Gradient -->
    <div class="absolute inset-0 bg-gradient-to-l from-[#9BBFB5] via-[#9BBFB5]/70 to-transparent flex items-center justify-end px-24">
      <div class="max-w-md text-right mr-0">
        <h2 class="text-3xl font-bold text-[#1a6a56] mb-4">ABOUT US</h2>
        <p class="text-gray-800 leading-relaxed text-xl md:text-2xl">
          Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. 
          Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. 
          Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.
        </p>
      </div>
    </div>
  </div>
</section>

<script>
  document.addEventListener("DOMContentLoaded", () => {
    // Smooth scroll fallback
    document.querySelectorAll('a[href^="#"]').forEach(anchor => {
      anchor.addEventListener('click', function (e) {
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
          e.preventDefault();
          target.scrollIntoView({ behavior: 'smooth' });
        }
      });
    });

    const aboutSection = document.querySelector("#about");
    const aboutLink = document.querySelector("#about-link");
    const homeLink = document.querySelector("#home-link");

    const observer = new IntersectionObserver((entries) => {
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          // ABOUT is visible — highlight ABOUT, remove HOME underline
          aboutLink.classList.add("border-b-2", "border-white", "pb-1", "font-semibold");
          homeLink.classList.remove("border-b-2", "border-white", "font-semibold");
        } else {
          // ABOUT is not visible — revert back to HOME underline
          aboutLink.classList.remove("border-b-2", "border-white", "pb-1", "font-semibold");
          homeLink.classList.add("border-b-2", "border-white", "font-semibold");
        }
      });
    }, {
      threshold: 0.5
    });

    if (aboutSection) observer.observe(aboutSection);
  });
</script>








<!-- vision section -->

<section class="bg-gradient-to-b from-[#084F3F] via-[#0e6b55] to-[#169477] py-20">
  <!-- Your content here -->
</section>

  <!-- Diamond with horizontal lines -->


    <!-- Vision Section -->
    <div class="relative w-full h-[670px] overflow-hidden">
      <!-- Background Image (on the right) -->
      <img src="/images/hp4.png" alt="Vision" class="w-full h-full object-cover">

      <!-- Left-aligned Text Overlay with Gradient -->
      <div class="absolute inset-0 bg-gradient-to-r from-[#9BBFB5] via-[#9BBFB5]/70 to-transparent flex items-center justify-start px-24">
      <div class="max-w-md text-left ml-0">
          <h2 class="text-3xl font-bold text-[#1a6a56] mb-4">VISION</h2>
          <p class="text-gray-800 leading-relaxed text-xl md:text-2xl">
          Our vision is to be the leading provider of innovative IT solutions, recognized for our commitment to excellence and our ability to transform businesses through technology. We aspire to create a world where businesses of all sizes can seamlessly integrate advanced IT infrastructure, unlocking their full potential and achieving unparalleled success. By continuously advancing our expertise and staying at the forefront of technological advancements, we aim to set the standard for quality and reliability in the IT services industry.
          </p>
        </div>
      </div>
    </div>

  
</section>




<!-- mission section -->

<section class="bg-gradient-to-t from-[#084F3F] via-[#0e6b55] to-[#169477] py-20">
  <!-- Mission Section -->
  <div class="relative w-full h-[670px] overflow-hidden">
    <!-- Background Image (on the left) -->
    <img src="/images/hp5.png" alt="Mission" class="w-full h-full object-cover">

    <!-- Right-aligned Text Overlay with Gradient -->
    <div class="absolute inset-0 bg-gradient-to-l from-[#9BBFB5] via-[#9BBFB5]/70 to-transparent flex items-center justify-end px-24">
      <div class="max-w-md text-right mr-0">
        <h2 class="text-3xl font-bold text-[#1a6a56] mb-4">MISSION</h2>
        <p class="text-gray-800 leading-relaxed text-xl md:text-2xl">
        Our mission is to empower businesses through innovative and reliable IT solutions.
We are committed to providing exceptional service and support, tailored to the unique needs of each client.
As our goal is to enhance operational efficiency, foster growth, and drive success by leveraging the latest technologies and best practices in the industry. We strive to build long-lasting partnerships with our clients, helping them navigate the complexities of the digital landscape with confidence and ease.
        </p>
      </div>
    </div>
  </div>
</section><br><br><br>


<section class="relative bg-[#f3f4f6] py-20 px-6 overflow-hidden">
  <!-- Background Shapes -->
  <div class="absolute inset-0 z-0">
    <!-- Layer 1 -->
    <div class="absolute left-0 top-0 w-[60%] h-full bg-[#9BBFB5] opacity-60 clip-diagonal-1"></div>
    <!-- Layer 2 -->
    <div class="absolute left-0 top-0 w-[50%] h-full bg-[#9BBFB5] opacity-40 clip-diagonal-2"></div>
    <!-- Layer 3 -->
    <div class="absolute left-0 top-0 w-[40%] h-full bg-[#9BBFB5] opacity-25 clip-diagonal-3"></div>

    <!-- VALENIN Text -->
    <div class="absolute top-10 left-6 z-0">
      <h1 class="text-6xl md:text-8xl font-extrabold italic bg-gradient-to-r from-white/70 to-[#f3f4f6] bg-clip-text text-transparent opacity-30 tracking-widest select-none">
        VALENIN
      </h1>
    </div>
  </div>

  <!-- Text Content -->
  <div class="relative z-10 flex justify-end">
  <p class="text-xl md:text-2xl text-[#084F3F] leading-relaxed font-medium max-w-4xl text-right mr-0 md:mr-20">
  We operate based on the team's specialization, expertise, and knowledge, <br class="hidden md:block">
  tailored to meet the specific requirements of each project within the company.
</p>

  </div>
</section>

<style>
  .clip-diagonal-1 {
    clip-path: polygon(0 0, 80% 0, 60% 100%, 0% 100%);
  }

  .clip-diagonal-2 {
    clip-path: polygon(0 0, 100% 0, 80% 100%, 0% 100%);
  }

  .clip-diagonal-3 {
    clip-path: polygon(0 0, 100% 0, 90% 100%, 0% 100%);
  }
</style>




<br><br><br>




<!-- Team section -->
<section class="bg-gradient-to-b from-[#9BBFB5] to-white py-16 px-4">
  <div class="max-w-6xl mx-auto text-center">
  <h2 class="text-3xl md:text-4xl font-bold mb-12 text-[#084F3F]">Meet Our Team</h2>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-8">

      <!-- Founder -->
      <div class="flex flex-col items-center">
        <img src="/images/Valenin/MaychellAlcorin.png" alt="Maychell Alcorin"
          class="w-48 h-48 object-cover rounded-full shadow-md border-4 border-white" />
        <h3 class="mt-4 font-semibold text-lg">Maychell Alcorin</h3>
        <p class="italic text-sm text-gray-600">Founder</p>
      </div>

      <!-- Member - Aina Mae Arroyo -->
      <div class="flex flex-col items-center mt-10">
        <img src="/images/Valenin/AinaMae.png" alt="Aina Mae Arroyo" class="w-48 h-48 object-cover rounded-full shadow-md">
        <h3 class="mt-4 font-semibold text-lg">Aina Mae Arroyo</h3>
        <p class="italic text-sm text-gray-600">QA & Frontline Support</p>
      </div>

      <!-- Member - Jenealle Mae Jimena -->
      <div class="flex flex-col items-center">
        <img src="/images/Valenin/JenealleMae.png" alt="Jenealle Mae"
          class="w-48 h-48 object-cover rounded-full shadow-md border-4 border-white" />
        <h3 class="mt-4 font-semibold text-lg">Jenealle Mae Jimena</h3>
        <p class="italic text-sm text-gray-600">Executive Assistant &<br>UI/UX Designer</p>
      </div>

      <!-- Member - Karlo Estano -->
      <div class="flex flex-col items-center">
        <img src="/images/Valenin/KarloEstano.png" alt="Karlo Estano"
          class="w-48 h-48 object-cover rounded-full shadow-md border-4 border-white" />
        <h3 class="mt-4 font-semibold text-lg">Karlo Estano</h3>
        <p class="italic text-sm text-gray-600">Web Developer</p>
      </div>

      <!-- Member - Mary Dorothy -->
      <div class="flex flex-col items-center mt-10">
        <img src="/images/Valenin/MaryDorothy.png" alt="Mary Dorothy" class="w-48 h-48 object-cover rounded-full shadow-md">
        <h3 class="mt-4 font-semibold text-lg">Mary Dorothy Joy Taala</h3>
        <p class="italic text-sm text-gray-600">DevOps</p>
      </div>

      <!-- Member - Paolo Vien -->
      <div class="flex flex-col items-center">
        <img src="/images/Valenin/Paolo.png" alt="Paolo Vien"
          class="w-48 h-48 object-cover rounded-full shadow-md border-4 border-white" />
        <h3 class="mt-4 font-semibold text-lg">Paolo Vien Kier Patton</h3>
        <p class="italic text-sm text-gray-600">Web Developer</p>
      </div>

      <!-- NEW Member 1 -->
      <div class="flex flex-col items-center">
        <img src="/images/Valenin/Vesanie.png" alt="Vesanie Marie Bernal"
          class="w-48 h-48 object-cover rounded-full shadow-md border-4 border-white" />
        <h3 class="mt-4 font-semibold text-lg">Vesanie Marie Bernal</h3>
        <p class="italic text-sm text-gray-600">Quality Assurance</p>
      </div>

      <!-- NEW Member 2 -->
      <div class="flex flex-col items-center mt-10">
        <img src="/images/Valenin/Jose.png" alt="Jose Phernando Lamud"
          class="w-48 h-48 object-cover rounded-full shadow-md">
        <h3 class="mt-4 font-semibold text-lg">Jose Phernando Lamud</h3>
        <p class="italic text-sm text-gray-600">System Support Analyst</p>
      </div>

      <!-- NEW Member 3 -->
      <div class="flex flex-col items-center">
        <img src="/images/Valenin/Jennifer.png" alt="Jennifer Sabado"
          class="w-48 h-48 object-cover rounded-full shadow-md border-4 border-white" />
        <h3 class="mt-4 font-semibold text-lg">Jennifer Sabado</h3>
        <p class="italic text-sm text-gray-600">Q&A Developer</p>
      </div>

    </div>
  </div>
</section>


<?= view('layout/footer') ?>


</body>
</html>

