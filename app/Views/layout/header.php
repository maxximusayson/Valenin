<!-- app/Views/layout/header.php -->
<!DOCTYPE html>
<html lang="en" x-data="{ open: false }">
<head>
  <meta charset="UTF-8">
  <title><?= isset($title) ? $title : 'Valenin' ?></title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
  <script src="https://cdn.tailwindcss.com"></script>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@3.4.1/dist/tailwind.min.css" rel="stylesheet">
  <script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" type="image/png" href="<?= base_url('images/tab.png') ?>">
 

</head>
<body class="font-['Rubik'] scroll-smooth">


<html lang="en" class="scroll-smooth">

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
  <a href="<?= base_url('/#about') ?>" id="about-link" class="hover:border-b-2 hover:border-white pb-1">ABOUT</a>


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
 <!-- LOGIN Trigger -->
<a href="#" onclick="toggleLoginModal()" class="font-normal <?= $current === 'login' ? 'border-b-2 border-white pb-1' : 'hover:border-b-2 hover:border-white pb-1' ?>">LOGIN</a>

<!-- LOGIN Modal -->
<div id="loginModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-xl p-8 w-full max-w-md relative">
    <!-- Close Button -->
    <button onclick="toggleLoginModal()" class="absolute top-3 right-4 text-gray-400 hover:text-gray-700 text-2xl font-bold">&times;</button>
    
    <!-- Heading -->
    <h2 class="text-3xl font-bold text-center text-green-800 mb-6">LOGIN</h2>

    <!-- Form -->
    <form action="/login" method="post" class="space-y-4">
      <input type="text" name="username" placeholder="Username " class="w-full bg-green-200 text-gray-800 px-4 py-3 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 focus:ring-green-400">
      <input type="password" name="password" placeholder="Password " class="w-full bg-green-200 text-gray-800 px-4 py-3 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 focus:ring-green-400">
      
      <button type="submit" class="w-full bg-green-700 text-white py-3 rounded-lg font-semibold hover:bg-green-800">Login</button>
    </form>

    <!-- Sign Up Link -->
    <p class="text-center text-sm text-gray-700 mt-4">
      Don’t have an account? 
      <a href="#" onclick="event.preventDefault(); toggleLoginModal(); toggleSignupModal();" class="font-bold text-green-800 hover:underline">Sign Up</a>
    </p>

    <!-- Divider -->
    <div class="flex items-center my-6">
      <hr class="flex-grow border-t border-gray-300">
      <span class="mx-2 text-gray-500 text-sm">login with</span>
      <hr class="flex-grow border-t border-gray-300">
    </div>

    <!-- Google Button -->
    <button class="w-full border border-black rounded-lg py-2 text-center font-medium text-green-700 hover:bg-gray-100 flex items-center justify-center space-x-2">
      <!-- Google Icon -->
      <svg class="w-5 h-5" viewBox="0 0 533.5 544.3" xmlns="http://www.w3.org/2000/svg">
        <path d="M533.5 278.4c0-17.4-1.6-34.1-4.7-50.4H272v95.3h146.9c-6.4 34-25.4 62.9-54.2 82.2v68h87.7c51.4-47.3 81.1-117 81.1-195.1z" fill="#4285f4"/>
        <path d="M272 544.3c73.3 0 134.7-24.3 179.6-66.2l-87.7-68c-24.4 16.4-55.4 26-91.9 26-70.7 0-130.6-47.9-152-112.1H29.8v70.6c44.8 88.3 137.1 149.7 242.2 149.7z" fill="#34a853"/>
        <path d="M120 323.9c-10.5-31.4-10.5-65.4 0-96.8V156.5H29.8c-37.9 75.9-37.9 165.4 0 241.3l90.2-70.6z" fill="#fbbc04"/>
        <path d="M272 107.6c38.7-.6 75.9 13.5 104.5 39.3l78.2-78.2C405.8 24.5 341.3-.6 272 0 167.1 0 74.7 61.4 29.8 149.7l90.2 70.6c21.3-64.2 81.2-112.1 151.9-112.7z" fill="#ea4335"/>
      </svg>
      <span>Login with Google</span>
    </button>
  </div>
</div>

<!-- SIGNUP Trigger -->
 /
<a href="#" onclick="toggleSignupModal()" class="font-normal <?= $current === 'signup' ? 'border-b-2 border-white pb-1' : 'hover:border-b-2 hover:border-white pb-1' ?>">SIGNUP</a>

<!-- SIGNUP Modal -->
<div id="signupModal" class="fixed inset-0 bg-black bg-opacity-50 flex items-center justify-center z-50 hidden">
  <div class="bg-white rounded-xl p-8 w-full max-w-md relative">
    <!-- Close Button -->
    <button onclick="toggleSignupModal()" class="absolute top-3 right-4 text-gray-400 hover:text-gray-700 text-2xl font-bold">&times;</button>
    
    <!-- Heading -->
    <h2 class="text-3xl font-bold text-center text-green-800 mb-6">SIGN UP</h2>

    <!-- Form -->
    <form action="/signup" method="post" class="space-y-4">
      <input type="text" name="username" placeholder="Username " class="w-full bg-green-200 text-gray-800 px-4 py-3 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 focus:ring-green-400">
      <input type="email" name="email" placeholder="Email " class="w-full bg-green-200 text-gray-800 px-4 py-3 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 focus:ring-green-400">
      <input type="password" name="password" placeholder="Password :" class="w-full bg-green-200 text-gray-800 px-4 py-3 rounded-lg placeholder-gray-700 focus:outline-none focus:ring-2 focus:ring-green-400">

      <button type="submit" class="w-full bg-green-700 text-white py-3 rounded-lg font-semibold hover:bg-green-800">SIGNUP</button>
    </form>

    <!-- Log in Link -->
    <p class="text-center text-sm text-gray-700 mt-4">
      Already have an account?
      <a href="#" onclick="event.preventDefault(); toggleSignupModal(); toggleLoginModal();" class="font-bold text-green-800 hover:underline">Log in</a>
    </p>

    <!-- Divider -->
    <div class="flex items-center my-6">
      <hr class="flex-grow border-t border-gray-300">
      <span class="mx-2 text-gray-500 text-sm">or</span>
      <hr class="flex-grow border-t border-gray-300">
    </div>

    <!-- Google Button -->
    <button class="w-full border border-black rounded-lg py-2 text-center font-medium text-green-700 hover:bg-gray-100 flex items-center justify-center space-x-2">
      <!-- Google Icon -->
      <svg class="w-5 h-5" viewBox="0 0 533.5 544.3" xmlns="http://www.w3.org/2000/svg">
        <path d="M533.5 278.4c0-17.4-1.6-34.1-4.7-50.4H272v95.3h146.9c-6.4 34-25.4 62.9-54.2 82.2v68h87.7c51.4-47.3 81.1-117 81.1-195.1z" fill="#4285f4"/>
        <path d="M272 544.3c73.3 0 134.7-24.3 179.6-66.2l-87.7-68c-24.4 16.4-55.4 26-91.9 26-70.7 0-130.6-47.9-152-112.1H29.8v70.6c44.8 88.3 137.1 149.7 242.2 149.7z" fill="#34a853"/>
        <path d="M120 323.9c-10.5-31.4-10.5-65.4 0-96.8V156.5H29.8c-37.9 75.9-37.9 165.4 0 241.3l90.2-70.6z" fill="#fbbc04"/>
        <path d="M272 107.6c38.7-.6 75.9 13.5 104.5 39.3l78.2-78.2C405.8 24.5 341.3-.6 272 0 167.1 0 74.7 61.4 29.8 149.7l90.2 70.6c21.3-64.2 81.2-112.1 151.9-112.7z" fill="#ea4335"/>
      </svg>
      <span>Sign up with Google</span>
    </button>
  </div>
</div>

<!-- Toggle Scripts -->
<script>
  function toggleLoginModal() {
    const login = document.getElementById('loginModal');
    const signup = document.getElementById('signupModal');
    login.classList.toggle('hidden');
    if (!signup.classList.contains('hidden')) {
      signup.classList.add('hidden');
    }
  }

  function toggleSignupModal() {
    const signup = document.getElementById('signupModal');
    const login = document.getElementById('loginModal');
    signup.classList.toggle('hidden');
    if (!login.classList.contains('hidden')) {
      login.classList.add('hidden');
    }
  }
</script>


  </li>
</ul>

</nav>

</body>
</html>
