<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta
      name="description"
      content="Dengan penuh rasa syukur dan puji kepada Allah SWT, kami dengan bangga mempersembahkan laman resmi SMK Tonjong. Laman ini dibangun dengan tujuan menjadi jembatan informasi bagi para siswa, guru, dan masyarakat yang membutuhkan informasi terkait dengan kegiatan dan berita terbaru dari SMK Tonjong."
    />
    <meta
      name="keywords"
      content="smk tonjong, yayasan dharma bhakti, smk bogor, smk tonjong bogor, smk tonjong bojong gede"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SMK TONJONG</title>
    <link rel="icon" href="assets/img/icon/icon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
      rel="stylesheet"
    />

    <!-- Bootstrap CSS -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH"
      crossorigin="anonymous"
    />

    <!-- Style AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="assets/fontawesome/css/all.min.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/style/app.css" />
  </head>
  <body>
    <!-- Preloader -->

    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top bg-navbar border-bottom">
      <div class="container">
        <a
          class="navbar-brand d-flex align-items-center"
          href="index.html"
          data-aos="fade-down"
          data-aos-once="true"
          data-aos-duration="1000"
        >
          <img
            src="assets/img/icon/navbar.png"
            alt="logo smk tonjong"
            height="65"
            class="d-inline-block align-text-center me-2"
          />
          <div class="brand-title">
            <span
              >YAYASAN DHARMA BHAKTI<br />
              SMK TONJONG</span
            >
          </div>
        </a>
        <button
          class="navbar-toggler border-0"
          type="button"
          data-bs-toggle="collapse"
          data-bs-target="#navbarNavAltMarkup"
          aria-controls="navbarNavAltMarkup"
          aria-expanded="false"
          aria-label="Toggle navigation"
          data-aos="fade-right"
          data-aos-once="true"
          data-aos-duration="1000"
        >
          <span class="navbar-toggler-icon"></span>
        </button>
        <div
          class="collapse navbar-collapse justify-content-end"
          id="navbarNavAltMarkup"
          data-aos="fade-right"
          data-aos-once="true"
          data-aos-duration="1000"
        >
          <div class="navbar-nav">
            <a class="nav-link active" href="index.html">Home</a>
            <a class="nav-link" href="pages/profile.html">Profile</a>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Galeri
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a class="dropdown-item" href="pages/galeri/foto.html"
                    >Foto</a
                  >
                </li>
                <li>
                  <a class="dropdown-item" href="pages/galeri/foto.html"
                    >Video</a
                  >
                </li>
              </ul>
            </li>
            <a class="nav-link" href="#berita">Berita</a>
            <a class="nav-link" href="#kontak">Kontak</a>
            <a
              class="nav-link ms-lg-3 mt-3 mt-lg-0 text-center rounded login"
              href="admin/"
              >Login</a
            >
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Hero Section -->
    <section
      id="hero"
      class="hero"
      data-aos="zoom-in"
      data-aos-once="true"
      data-aos-duration="1000"
    >
      <div
        id="carouselExampleDark"
        class="carousel carousel-dark slide"
        data-bs-ride="carousel"
      >
        <div class="carousel-indicators">
          <?php
            include "koneksi.php";

            $query_cek = "SELECT COUNT(*) AS jumlah FROM tbl_banner";
            $result_cek = mysqli_query($conn, $query_cek);
            $row_cek = mysqli_fetch_assoc($result_cek);
            $jumlah_banner = $row_cek['jumlah'];
        
            // Jika jumlah banner dengan nama yang sama lebih dari 0, berikan pesan kesalahan
            if ($jumlah_banner > 0) {
     
              for ($i = 0; $i < $jumlah_banner; $i++) {
                  $slide_number = $i + 1;
                  $aria_label = "Slide " . $slide_number;
                  $class_active = ($i == 0) ? "active" : "";
          ?>
                  <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $i; ?>" class="<?php echo $class_active; ?>" aria-current="<?php echo $class_active; ?>" aria-label="<?php echo $aria_label; ?>"></button>
          <?php
              }
            }
          ?>
        </div>
            

        <div class="carousel-inner">
        
          <?php
            $sql = "SELECT * FROM tbl_banner";
            // Eksekusi query
            $result = $conn->query($sql);
            // Loop melalui hasil query dan tampilkan dalam tabel
            if ($result->num_rows > 0) {
              while ($row = $result->fetch_assoc()) {    
          ?>
                <div class="carousel-item active">
                  <img
                    src="assets/img/hero/<?php echo $row['nama'] ?>.png"
                    class="d-block w-100"
                    alt="Banner"
                  />
                </div>
          <?php
              }
            }
          ?>
        </div>
      </div>
    </section>
    <!-- End Hero Section -->

    <?php
          $sqlsambutan = "SELECT * FROM tbl_sambutan";
          // Eksekusi query
          $resultsambutan = $conn->query($sqlsambutan);
          // Loop melalui hasil query dan tampilkan dalam tabel
          if ($resultsambutan->num_rows > 0) {
            while ($rowsambutan = $resultsambutan->fetch_assoc()) {  
              
           
    ?>

    <!-- Start About Section -->
    <section class="sambutan mt-5">
      <div class="container text-center">
        <h2
          class="judul"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-once="true"
        >
          SAMBUTAN KEPALA SEKOLAH
        </h2>
        <div class="row mt-4">
          <div
            class="col-md-4 col-lg-3 text-center"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-once="true"
          >
            <img src="assets/img/<?php echo $rowsambutan["nama_kepsek"] ?>.png" alt="gambar kepsek" />
            <h3 class="mt-3"><?php echo $rowsambutan["nama_kepsek"] ?></h3>
          </div>
          <div
            class="col"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-once="true"
          >
            <p><?php echo $rowsambutan["sambutan"] ?></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End About Section -->
    <?php
            }
          }
    ?>



    <!-- Start Jurusan Section -->
    <section id="jurusan" class="jurusan mt-5 py-5">
      <div class="container text-center">
        <h2 class="judul" data-aos="fade-up" data-aos-duration="1000">
          JURUSAN
        </h2>
        <div class="row justify-content-center gap-3 mt-4">
          <div
            class="col-11 col-md-4 rounded mm"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <img
              src="assets/img/jurusan/mm.png"
              alt="multimedia"
              class="img-fluid"
            />
            <h3>Desan Komunikasi Visual</h3>
            <p>
              Jurusan ini memberikan pendidikan dan pelatihan kepada siswa
              mengenai konsep dan teknik desain grafis yang meliputi tipografi,
              ilustrasi, fotografi, animasi, dan berbagai aspek lainnya.
            </p>
          </div>
          <div
            class="col-11 col-md-4 rounded mp"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <img
              src="assets/img/jurusan/mp.png"
              alt="manajemen perkantoran"
              class="img-fluid"
            />
            <h3>Manajemen Perkantoran dan Layanan Bisnis</h3>
            <p>
              Di jurusan ini, peserta didik akan berfokus pada bidang
              administrasi, teknologi informasi perkantoran, kearsipan,
              pengetikan naskah, penanganan telepon, kas kecil, data entry, dan
              berbagai kompetensi lainnya terkait administrasi perkantoran.
            </p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Jurusan Section -->

    <!-- Start Ekskul Section -->
    <section class="ekskul mt-5">
      <div class="container text-center">
        <h2 class="judul" data-aos="fade-up" data-aos-duration="1000">
          EKSTRA KURIKULER
        </h2>
        <div class="row justify-content-center gap-4 mt-4">
          <div
            class="col-7 col-md-4 col-lg-3 d-flex justify-content-md-center align-items-center p-3 futsal"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <i class="fa-regular fa-futbol me-4"></i>
            <span>Futsal</span>
          </div>
          <div
            class="col-7 col-md-4 col-lg-3 d-flex justify-content-md-center align-items-center p-3 marawis"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <i class="fa-solid fa-drum me-4"></i>
            <span>Marawis</span>
          </div>
          <div
            class="col-7 col-md-4 col-lg-3 d-flex justify-content-md-center align-items-center p-3 paskib"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <i class="fa-solid fa-flag me-4"></i>
            <span>Paskibra</span>
          </div>
        </div>
      </div>
    </section>
    <!-- End Ekskul Section -->

    <!-- Start Berita Section -->
    <section id="berita" class="berita mt-5 py-5">
      <div class="container">
        <h2
          class="judul text-center"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          BERITA
        </h2>
        <div class="row mt-4 gap-3 justify-content-center">
          <div
            class="col-md-5 col-lg-3"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="card">
              <img
                src="assets/img/berita/berita1.jpeg"
                class="card-img-top"
                alt="Gambar"
              />
              <div class="card-body">
                <h5 class="card-title fs-6">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Blanditiis, eum?
                </h5>
                <p class="card-text">11 April 2024</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div
            class="col-md-5 col-lg-3"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="card">
              <img
                src="assets/img/berita/berita1.jpeg"
                class="card-img-top"
                alt="Gambar"
              />
              <div class="card-body">
                <h5 class="card-title fs-6">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Blanditiis, eum?
                </h5>
                <p class="card-text">11 April 2024</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div
            class="col-md-5 col-lg-3"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="card">
              <img
                src="assets/img/berita/berita1.jpeg"
                class="card-img-top"
                alt="Gambar"
              />
              <div class="card-body">
                <h5 class="card-title fs-6">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Blanditiis, eum?
                </h5>
                <p class="card-text">11 April 2024</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <div
            class="col-md-5 col-lg-3"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="card">
              <img
                src="assets/img/berita/berita1.jpeg"
                class="card-img-top"
                alt="Gambar"
              />
              <div class="card-body">
                <h5 class="card-title fs-6">
                  Lorem ipsum, dolor sit amet consectetur adipisicing elit.
                  Blanditiis, eum?
                </h5>
                <p class="card-text">11 April 2024</p>
                <a href="#" class="btn btn-primary">Selengkapnya</a>
              </div>
            </div>
          </div>
          <a
            class="text-center"
            href="pages/berita.html"
            data-aos="fade-up"
            data-aos-duration="1000"
            >Lihat Berita Lainya</a
          >
        </div>
      </div>
    </section>
    <!-- End Berita Section -->

    <!-- Start Kontak Section -->
    <section id="kontak" class="kontak">
      <div class="container">
        <div class="row py-5 justify-content-sm-between">
          <div class="col-md-2">
            <h3>Ikuti Kami</h3>
            <div class="followme">
              <a href="https://instagram.com/" target="_blank"
                ><i class="fa-brands fa-square-instagram"></i
              ></a>
              <a href="https://tiktok.com/" target="_blank"
                ><i class="fa-brands fa-tiktok"></i
              ></a>
              <a href="https://youtube.com/" target="_blank"
                ><i class="fa-brands fa-square-youtube"></i
              ></a>
            </div>
          </div>
          <div class="col-md-3">
            <h3>Hubungi Kami</h3>
            <div class="detail">
              <i class="fa-solid fa-phone"></i>
              <span>-</span>
            </div>
            <div class="detail mt-3">
              <a href="https://wa.me/6289660800425" target="_blank">
                <i class="fa-brands fa-whatsapp"></i>
                +62
              </a>
            </div>
            <div class="detail mt-3">
              <a href="mailto:" target="_blank">
                <i class="fa-regular fa-envelope"></i>
                -</a
              >
            </div>
          </div>
          <div class="col-md-4">
            <h3>Lokasi</h3>
            <div class="lokasi">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7928.424564449169!2d106.75924559127593!3d-6.494785423989194!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69c2f654a8a85b%3A0x51cf6d4a78fe70fc!2sYayasan%20Dharma%20Bakti%20SMK%20TONJONG!5e0!3m2!1sid!2sid!4v1712673758098!5m2!1sid!2sid"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Kontak Section -->

    <!-- Start Footer -->
    <footer class="footer text-center">
      <p class="text-white">
        Copyright &copy; 2024 SMK Tonjong. All Rights Reserved.
      </p>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap Script -->
    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
      crossorigin="anonymous"
    ></script>

    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
      AOS.init();
    </script>

    <!-- My Script -->
    <script src="assets/script/app.js"></script>
  </body>
</html>
