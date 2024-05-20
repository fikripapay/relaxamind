<!DOCTYPE html>
<html lang="id">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profile - SMK TONJONG</title>
  <link rel="icon" href="assets/img/icon/icon.png" />

  <!-- Fonts -->
  <link rel="preconnect" href="https://fonts.googleapis.com" />
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap" rel="stylesheet" />

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

  <!-- Style AOS -->
  <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

  <!-- Font Awesome -->
  <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" />

  <!-- My CSS -->
  <link rel="stylesheet" href="assets/style/app.css" />
  <style>
    .sejarah,
    .visi p {
      text-align: justify;
    }

    .misi p {
      text-align: start;
    }
  </style>
</head>

<body>
  <!-- Start Navbar -->
  <nav class="navbar navbar-dark navbar-expand-lg sticky-top border-bottom" style="background-color: #071952;">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.php" data-aos="fade-down" data-aos-once="true"
                data-aos-duration="1000">
                <img src="assets/img/icon/logo.png" alt="logo smk tonjong" height="65"
                    class="d-inline-block align-text-center me-2" />
                <div class="brand-title text-white">
                    <span>YAYASAN DHARMA BHAKTI<br />
                        SMK TONJONG</span>
                </div>
            </a>
            <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false"
                aria-label="Toggle navigation" data-aos="fade-right" data-aos-once="true" data-aos-duration="1000">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-end" id="navbarNavAltMarkup" data-aos="fade-right"
                data-aos-once="true" data-aos-duration="1000">
                <div class="navbar-nav">
                    <a class="nav-link active" href="index.php">Home</a>
                    <li class="nav-item dropdown">
                        <a
                            class="nav-link dropdown-toggle text-white"
                            href="#"
                            role="button"
                            data-bs-toggle="dropdown"
                            aria-expanded="false"
                        >
                            Profile
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                            <a class="dropdown-item my-dropdown" style="color: #071952;" href="profile.php"
                                >Profile</a
                            >
                            </li>
                            <li>
                            <a class="dropdown-item my-dropdown" style="color: #071952;" href="dkv.php"
                                >Desain Komunikasi Visual</a
                            >
                            </li>
                            <li>
                            <a class="dropdown-item my-dropdown" style="color: #071952;" href="mplb.php"
                                >Manajemen Perkantoran dan Layanan Bisnis</a
                            >
                            </li>
                            <a class="dropdown-item my-dropdown" style="color: #071952;" href="pengajarstaff.php"
                                >Pengajar & Staff</a
                            >
                            </li>
                        </ul>
                    </li>
                    <a class="nav-link text-white" href="galeri.php">Galeri</a>
                    <a class="nav-link text-white" href="berita.php">Berita</a>
                    <a class="nav-link text-white" href="#kontak">Kontak</a>
                    <a class="nav-link ms-lg-3 mt-3 mt-lg-0 text-center rounded text-white" href="ppdb.php" style="background-color: #28a745";>Info PPDB</a>
                    <!-- <a class="nav-link ms-lg-3 mt-3 mt-lg-0 text-center rounded text-white" href="admin/" style="background-color: #00a0e3;">Login</a> -->
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

  <!-- Start Main Section -->
  <main>
    <!-- Bagian Sambutan Kepala Sekolah -->
    <?php
    include "koneksi.php";
    $sqlsambutan = "SELECT * FROM tbl_sambutan";
    // Eksekusi query
    $resultsambutan = $conn->query($sqlsambutan);
    // Loop melalui hasil query dan tampilkan dalam tabel
    if ($resultsambutan->num_rows > 0) {
        while ($rowsambutan = $resultsambutan->fetch_assoc()) {
    ?>
        <section class="sambutan mt-5">
            <div class="container text-center">
                <h2 class="judul" data-aos="fade-up" data-aos-duration="1000" data-aos-once="true">
                    SAMBUTAN KEPALA SEKOLAH
                </h2>
                <div class="row mt-4">
                    <div class="col-md-4 col-lg-3 text-center" data-aos="fade-up" data-aos-duration="1000"
                        data-aos-easing="ease-in-sine" data-aos-once="true">
                        <img src="assets/img/sambutan/<?php echo $rowsambutan["nama_kepsek"]; ?>.png" alt="gambar kepsek" />
                        <h3 class="mt-3"><?php echo $rowsambutan["nama_kepsek"]; ?></h3>
                    </div>
                    <div class="col" data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine"
                        data-aos-once="true">
                        <p><?php echo $rowsambutan["sambutan"]; ?></p>
                    </div>
                </div>
            </div>
        </section>
    <?php
        }
    }
    ?>

    <!-- Bagian Sejarah -->
    <div class="sejarah mt-5">
        <div class="container text-center">
            <h2 class="judul" data-aos="fade-up" data-aos-duration="1000">SEJARAH</h2>
            <div class="row justify-content-center mt-3">
                <div class="sejarah col-11 col-md-8 col-lg-6 border-2 border-start border-info" data-aos="fade-up" data-aos-duration="1000">
                    <p>SMK Tonjong didirikan oleh Yayasan Dharma Bhakti dengan tujuan untuk berkontribusi dalam meningkatkan kualitas sumber daya manusia di Indonesia.</p>
                    <p>Dalam upaya mencapai misi ini, Yayasan Dharma Bhakti Tonjong menjalin kerjasama dengan Pemerintah Daerah Kabupaten Bogor dan berbagai perusahaan swasta di Bogor. Kolaborasi ini bertujuan untuk mempersiapkan siswa/siswi agar siap untuk dunia kerja maupun berwirausaha.</p>
                </div>
            </div>
        </div>
    </div>
    <!-- Bagian Visi & Misi -->
    <div class="visimisi mt-5">
        <div class="container text-center">
            <h2 class="judul" data-aos="fade-up" data-aos-duration="1000">VISI & MISI</h2>
            <div class="row justify-content-center gap-3 mt-3">
                <div class="visi col-11 col-md-8 col-lg-6 border-2 border-start border-info" data-aos="fade-up" data-aos-duration="1000">
                    <h3>Visi</h3>
                    <p>Sekolah sebagai wawasan yang menjadi sumber arahan bagi sekolah harus memiliki pandangan jauh ke depan. Gambaran masa depan sekolah harus tercermin pada visi sekolah. Dengan menganalisis segala kekuatan dan kelemahan dan memperhatikan berbagai aspek dan tuntutan, visi SMKS Tonjong ditetapkan sebagai berikut:</p>
                    <p><q>Disiplin, Terampil, Mandiri, dan Tanggung Jawab Berdasarkan Iman dan Taqwa</q>.</p>
                </div>
                <div class="misi col-11 col-md-8 col-lg-6 border-2 border-start border-info" data-aos="fade-up" data-aos-duration="1000">
                    <h3>Misi</h3>
                    <p>• Kreatif</p>
                    <p>• Kompetitif</p>
                    <p>• Siap Kerja</p>
                </div>
            </div>
        </div>
    </div>
  </main>
  <!-- End Main Section -->

  <!-- Start Kontak Section -->
  <section id="kontak" class="kontak mt-5">
        <div class="container">
            <div class="row py-5 justify-content-sm-between">
                <div class="col-md-2">
                    <h3>Ikuti Kami</h3>
                    <div class="followme">
                        <a href="https://www.instagram.com/smktonjong/" target="_blank"><i
                                class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://www.youtube.com/@smkstonjong6210" target="_blank"><i class="fa-brands fa-square-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-3">
                    <h3>Hubungi Kami</h3>
                    <div class="detail">
                        <i class="fa-solid fa-phone"></i>
                        <span>(0251) 8583881</span>
                    </div>
                    <div class="detail mt-3">
                        <a href="https://wa.me/6285772226602" target="_blank">
                            <i class="fa-brands fa-whatsapp"></i>
                            +62 857-7222-6602
                        </a>
                    </div>
                    <div class="detail mt-3">
                        <a href="mailto:smktonjong@gmail.com" target="_blank">
                            <i class="fa-regular fa-envelope"></i>
                            smktonjong@gmail.com</a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Lokasi</h3>
                    <div class="lokasi">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7928.424564449169!2d106.75924559127593!3d-6.494785423989194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c2f654a8a85b%3A0x51cf6d4a78fe70fc!2sYayasan%20Dharma%20Bakti%20SMK%20TONJONG!5e0!3m2!1sid!2sid!4v1712673758098!5m2!1sid!2sid"
                            allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- End Kontak Section -->

  <!-- Start Footer -->
  <footer class="footer text-center">
    <p class="text-white">Copyright &copy; 2024 SMK Tonjong. All Rights Reserved.</p>
  </footer>
  <!-- End Footer -->

  <!-- Bootstrap Script -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
  </script>

  <!-- Script AOS -->
  <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

  <script>
    AOS.init();
  </script>
</body>

</html>