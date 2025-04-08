<!-- app/Views/layout/header.php -->
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Valenin</title>
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="<?= base_url('assets/css/home.css') ?>">
  <link rel="stylesheet" href="<?= base_url('assets/css/navbar.css') ?>">
</head>
<body>

  <nav class="navbar">
    <div class="logo">
      <a href="/">
        <img src="<?= base_url('/images/logo.png') ?>" alt="Valenin Logo">
      </a>
    </div>

    <div class="hamburger" onclick="toggleMenu()">
      &#9776;
    </div>

    <ul class="nav-right" id="navLinks">
      <li><a href="/" class="active">HOME</a></li>
      <li><a href="/about">ABOUT</a></li>
      <li><a href="/career">CAREER</a></li>
      <li><a href="/services">SERVICES</a></li>
      <li><a href="/contact">CONTACT</a></li>
      <li><a href="/login" style="font-weight: normal;">LOGIN</a> / <a href="/signup" style="font-weight: normal;">SIGNUP</a></li>
    </ul>
  </nav>

  <script>
    function toggleMenu() {
      const nav = document.getElementById('navLinks');
      nav.classList.toggle('show');
    }
  </script>
</body>
</html>
