<!-- app/Views/layout/header.php -->
<!DOCTYPE html>
<html lang="en" x-data="{ open: false }">
<head>
  <meta charset="UTF-8">
  <title>Valenin</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</head>
<body class="font-['Rubik'] scroll-smooth">


<?php $current = service('uri')->getSegment(1); ?>

<nav class="bg-gradient-to-r from-[#06392e] to-[#157e63] text-white px-6 py-4 flex items-center justify-between fixed top-0 left-0 right-0 z-50 shadow-md">



  <!-- Logo -->
  <div class="flex items-center space-x-3">
    <a href="/">
      <img src="<?= base_url('/images/logo.png') ?>" alt="Valenin Logo" class="h-8 w-auto">
    </a>
  </div>

  <!-- Hamburger for mobile -->
  <div class="lg:hidden cursor-pointer text-3xl" @click="open = !open">
    &#9776;
  </div>

  <!-- Navigation Links -->
  <ul :class="open ? 'block' : 'hidden'" class="lg:flex space-y-3 lg:space-y-0 lg:space-x-8 mt-4 lg:mt-0 lg:items-center text-[20px] font-medium" id="navLinks">

  <li>
  <a href="/" id="home-link" class="pb-1 <?= $current === '' ? 'border-b-2 border-white font-semibold' : 'hover:border-b-2 hover:border-white' ?>">HOME</a>

  </li>
  <li>
  <a href="#about" id="about-link" class="hover:border-b-2 hover:border-white pb-1">ABOUT</a>

</li>



  <li>
    <a href="/career" class="<?= $current === 'career' ? 'border-b-2 border-white pb-1 font-semibold' : 'hover:border-b-2 hover:border-white pb-1' ?>">CAREER</a>
  </li>
  <li>
    <a href="/services" class="<?= $current === 'services' ? 'border-b-2 border-white pb-1 font-semibold' : 'hover:border-b-2 hover:border-white pb-1' ?>">SERVICES</a>
  </li>
  <li>
    <a href="/contact" class="<?= $current === 'contact' ? 'border-b-2 border-white pb-1 font-semibold' : 'hover:border-b-2 hover:border-white pb-1' ?>">CONTACT</a>
  </li>
  <li>
    <a href="/login" class="font-normal <?= $current === 'login' ? 'border-b-2 border-white pb-1' : 'hover:border-b-2 hover:border-white pb-1' ?>">LOGIN</a> /
    <a href="/signup" class="font-normal <?= $current === 'signup' ? 'border-b-2 border-white pb-1' : 'hover:border-b-2 hover:border-white pb-1' ?>">SIGNUP</a>
  </li>
</ul>

</nav>

</body>
</html>
