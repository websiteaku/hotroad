<?php
include("config/db.php"); // koneksi ke database
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>HOTROD Coffee</title>

  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,300;0,400;0,700;1,700&display=swap"
    rel="stylesheet">

  <script src="https://unpkg.com/feather-icons"></script>
  <link rel="stylesheet" href="style.css" />
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar">
    <div class="navbar-left">
      <img src="background/logo.jpg" class="logo-img" alt="Logo HOTROD Coffee">
      <a href="#" class="brand-name">
        <div class="brand-container">
          <div class="brand-top">The</div>
          <div class="brand-middle">HOTROD</div>
          <div class="brand-bottom">Coffee X Roastery</div>
        </div>
      </a>
    </div>
    <div class="navbar-nav">
      <a href="#home">Beranda</a>
      <a href="#about">Tentang Kami</a>
      <a href="#menu">Menu</a>
      <a href="#hubungi">Hubungi Kami</a>
      <a href="#contact">Saran</a>
    </div>
    <div class="navbar-extra">
      <a id="hamburger-menu"><i data-feather="menu"></i></a>
    </div>
  </nav>

  <!-- Hero Section -->
  <section class="hero" id="home">
    <main class="content">
      <h1 class="typing-text">Selamat Datang di<br><span class="coklat">The</span> <span class="pekat">HOTROD</span> Coffee X Roastery </h1>
      <p class="typing-p">rasakan sensasi kopi sangrai lokal terbaik!</p>
    </main>
  </section>

  <!-- Tentang Kami -->


  <!-- Menu Section (Menampilkan dari Database) -->
  <section id="menu" class="menu">
    <h2>Menu Kopi Kami</h2>
    <div class="menu-list">
      <?php
      $query = mysqli_query($conn, "SELECT * FROM menu");
      while ($row = mysqli_fetch_assoc($query)) {
        echo "
    <div class='menu-item'>
      <img src='img/{$row['gambar']}' width='150'><br>
      <h3>{$row['nama']}</h3>
      <p>{$row['deskripsi']}</p> <br>
      <h4><strong>Rp " . number_format($row['harga'], 2, ',', '.') . "</strong></h4>
    </div>
  ";
      }
      ?>

    </div>
  </section>



  <!-- Hubungi Kami -->
  <section id="hubungi" class="hubungi">
    <div class="hubungi-container">
      <h2>Hubungi kami</h2>
      <div class="sosmed">
        <a href="https://www.instagram.com/hotrod.coffeexroastery/"><ion-icon name="logo-instagram"></ion-icon> |hotrod.coffeexroastery</a> <br>
        <a href="https://www.tiktok.com/@hotrodcoffeexroastery?lang=id-ID/"><ion-icon name="logo-tiktok"></ion-icon> |hotrodcoffeexroastery</a> <br>
        <a href="https://maps.app.goo.gl/9kqqpcdqD7UG3tmn6"><ion-icon name="location-sharp"></ion-icon>|Eromoko Wetan,Eromoko,Kec.Eromoko,Kabupaten Wonogiri,Jawa Tengah</a> <br>
      </div>
    </div>
  </section>

  <!-- Saran -->
  <section id="contact" class="contact">
    <div class="contact-container">
      <h2>Saran Kami</h2>
      <p>Silakan hubungi kami untuk pemesanan atau pertanyaan lebih lanjut.</p>
      <form action="" method="POST" class="contact-form">
        <input type="text" name="nama" placeholder="Nama Anda" required>
        <input type="email" name="email" placeholder="Email Anda" required>
        <textarea name="pesan" rows="5" placeholder="Tulis pesan Anda..." required></textarea>
        <button type="submit">Kirim Pesan</button>
      </form>
    </div>
  </section>



  <footer style="text-align: center; padding: 20px; background-color: #faf7f2; color:black;">
    <p>&copy; 2025 The Hotrod Coffee x Roastery</p>
  </footer>



</body>
<!-- JS & Feather Icons -->
<script>
  feather.replace();
</script>
<script src="script.js"></script>
<script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
<script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>

</html>