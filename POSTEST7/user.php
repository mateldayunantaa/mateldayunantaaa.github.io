<?php
date_default_timezone_set('Asia/Makassar');
require 'restricted_page.php';
require 'access_page_user.php';
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Fashion Bag Shop</title>

    <!-- fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;300;400;700&display=swap"
      rel="stylesheet"
    />

    <!-- feather icons -->
    <script src="https://unpkg.com/feather-icons"></script>

    <!-- style -->
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="signup-style.css" />
  </head>
  <body>
    <!-- Navbar start -->
    <nav class="navbar">
      <a href="#" class="navbar-logo">FASHION<span>BAG</span>SHOP</a>

      <div class="navbar-nav">
        <a href="#home">Home</a><a href="#about">About Me</a>
        <a href="produk_user.php" onclick="alert('akses produk')">Produk</a>
      </div>

      <div class="navbar-extra">
        <a href="profiluser.php" id="user"><i data-feather="user"></i></a>
        <button id="dark-mode-button"><i data-feather="sun"></i></button>
        <a href="logout.php" id="logout"><i data-feather="log-out" style="margin-right: -30px;"></i></a>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- hero section start -->
    <section class="hero" id="home">
      <div class="content" style="z-index: 999;">
        <div class="date-time">
        <p id="date-time"><?php echo date("l, j F Y H:i:sa "); ?></p>
        </div>
        <h1 class="hero-text">
          Show Off Your Style With Our Trendy <span>BAGS</span>
        </h1>
        <p>Express yourself with unique bag styles.</p>
        <a href="produk_user.php" class="cta">BUY NOW</a>
      </div>
    </section>

    <!-- hero section end -->

    <!-- About section start -->
    <section id="about" class="about">
      <h2><span>About</span> Me</h2>
      <div class="row">
        <div class="about-img">
          <img src="aboutme..webp" alt="About Me" />
        </div>
        <div class="content">
          <div class="info">
            <h3>Nama : Matelda Yunanta Ambon</h3>
            <p>NIM : 2209106000</p>
            <p>Kelas : Informatika B 2022</p>
            <p>Instagram: @mateldayunanta_</p>
            <p>Email : mateldayunantaambon@gmail.com</p>
          </div>
        </div>
      </div>
    </section>
    <!-- About section end -->

    <!-- feather icons -->
    <script>
      feather.replace();
    </script>
    <script src="script.js"></script>

    <footer>
    <p>Copyright © <?php echo date("Y"); ?> Matelda Yunanta Ambon | All right reserved</p>    
    </footer>
  </body>
</html>
