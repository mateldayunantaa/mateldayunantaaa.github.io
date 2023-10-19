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
        <a href="#produk" onclick="alert('belum bisa diakses')">Produk</a>
      </div>

      <div class="navbar-extra">
        <a href="login.php" id="user"><i data-feather="user"></i></a>
        <button id="dark-mode-button"><i data-feather="sun"></i></button>
      </div>
    </nav>
    <!-- Navbar end -->

    <!-- hero section start -->
    <section class="hero" id="home">
      <div class="content">
        <h1 class="hero-text">
          Show Off Your Style With Our Trendy <span>BAGS</span>
        </h1>
        <p>Express yourself with unique bag styles.</p>
        <a href="#" class="cta">BUY NOW</a>
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
            <p>NIM : 2209106087</p>
            <p>Kelas : Informatika B 2022</p>
            <p>Instagram: @mateldayunantaa_</p>
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
      <p>Copyright © 2023 Matelda Yunanta Ambon | All right reserved</p>
    </footer>
  </body>
</html>
