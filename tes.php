<!-- Start Hero Section -->
<section id="hero" class="hero" data-aos="zoom-in" data-aos-once="true" data-aos-duration="1000">
        <div id="carouselExampleDark" class="carousel carousel-dark slide" data-bs-ride="carousel">
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
                <button type="button" data-bs-target="#carouselExampleDark" data-bs-slide-to="<?php echo $i; ?>"
                    class="<?php echo $class_active; ?>" aria-current="<?php echo $class_active; ?>"
                    aria-label="<?php echo $aria_label; ?>"></button>
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
                    <img src="assets/img/hero/<?php echo $row['nama'] ?>.png" class="d-block w-100" alt="Banner" />
                </div>
                <?php
          }
        }
        ?>
            </div>
        </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Intro Video -->
    <section id="introsekolah" class="mt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-12 col-lg-10">
                    <video class="w-100 rounded" controls data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="500">
                        <source src="assets/video/intro.mp4" type="video/mp4">
                    </video>
                </div>
            </div>
        </div>
    </section>
    <!-- End Intro Video -->

    <!-- Start Jurusan Section -->
    <section id="jurusan" class="jurusan mt-5 py-5">
        <div class="container text-center">
            <h2 class="judul" data-aos="fade-up" data-aos-duration="1000">
                JURUSAN
            </h2>
            <div class="row justify-content-center gap-3 mt-4">
                <div class="col-11 col-md-5 rounded py-2 mm" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="ease-in-sine" data-aos-delay="500">
                    <img src="assets/img/logo/dkv.png" width="150" alt="Logo DKV" class="img-fluid" />
                    <h3 class="mt-1">Desain Komunikasi Visual</h3>
                </div>
                <div class="col-11 col-md-5 rounded py-2 mp" data-aos="fade-up" data-aos-duration="1000"
                    data-aos-easing="ease-in-sine" data-aos-delay="500">
                    <img src="assets/img/logo/mplb.png" width="150" alt="Logo MPLB" class="img-fluid" />
                    <h3 class="mt-1">Manajemen Perkantoran dan Layanan Bisnis</h3>
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
                <div class="col-8 col-md-4 col-lg-3 d-flex justify-content-md-center align-items-center p-3 futsal"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="500">
                    <i class="fa-regular fa-futbol me-4"></i>
                    <span>Futsal</span>
                </div>
                <div class="col-8 col-md-4 col-lg-3 d-flex justify-content-md-center align-items-center p-3 marawis"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="500">
                    <i class="fa-solid fa-drum me-4"></i>
                    <span>Hadroh</span>
                </div>
                <div class="col-8 col-md-4 col-lg-3 d-flex justify-content-md-center align-items-center p-3 paskib"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="500">
                    <i class="fa-solid fa-person-military-pointing me-4"></i>
                    <span>Paskibra</span>
                </div>
                <div class="col-8 col-md-4 col-lg-3 d-flex justify-content-md-center align-items-center p-3 tari"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="500">
                    <i class="fa-solid fa-people-group me-4"></i>
                    <span>Tari</span>
                </div>
                <div class="col-8 col-md-4 col-lg-3 d-flex justify-content-md-center align-items-center p-3 silat"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="500">
                    <i class="fa-solid fa-people-robbery me-4"></i>
                    <span>Pencak Silat</span>
                </div>
                <div class="col-8 col-md-4 col-lg-3 d-flex justify-content-md-center align-items-center p-3 itclub"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="500">
                    <i class="fa-solid fa-computer me-4"></i>
                    <span>IT Club</span>
                </div>
                <div class="col-8 col-md-4 col-lg-3 d-flex justify-content-md-center align-items-center p-3 esport"
                    data-aos="fade-up" data-aos-duration="1000" data-aos-easing="ease-in-sine" data-aos-delay="500">
                    <i class="fa-solid fa-gamepad me-4"></i>
                    <span>E-Sport</span>
                </div>
            </div>
        </div>
    </section>
    <!-- End Ekskul Section -->

    <!-- Start Berita Section -->
    <section id="berita" class="berita mt-5 py-5">
        <div class="container">
            <h2 class="judul text-center" data-aos="fade-up" data-aos-duration="1000">
                BERITA
            </h2>
            <div class="row mt-4 gap-3 justify-content-center">

                <!-- BERITA -->

                <?php
        $sql = "SELECT * FROM tb_berita ORDER BY id DESC LIMIT 6";
        // Eksekusi query
        $result = $conn->query($sql);
        // Loop melalui hasil query dan tampilkan dalam tabel
        if ($result->num_rows > 0) {
          while ($row = $result->fetch_assoc()) {
        ?>
                <div class="col-md-5 col-lg-3" data-aos="fade-up" data-aos-duration="1000">
                    <div class="card">
                        <img src="assets/img/berita/<?php echo $row['id'] ?>.png" class="card-img-top" alt="<?php echo $row['judul'] ?>" height="150"/>
                        <div class="card-body">
                            <h5 class="card-title fs-6">
                                <?php echo $row['judul'] ?>
                            </h5>
                            <p class="card-text"><?php echo $row['waktu'] ?></p>
                            <a href="detail-berita.php?detail=<?php echo $row['id'] ?>" class="btn btn-primary">Selengkapnya</a>
                        </div>
                    </div>
                </div>
                <?php
          }
        }
        ?>

                <a class="text-center" href="berita.php" data-aos="fade-up" data-aos-duration="1000">Lihat Berita
                    Lainya</a>
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
                        <a href="https://www.instagram.com/smktonjong/" target="_blank"><i
                                class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://www.youtube.com/@smkstonjong6210" target="_blank"><i class="fa-brands fa-square-youtube"></i></a>
                    </div>
                </div>
                <div class="col-md-4">
                    <h3>Hubungi Kami</h3>
                    <div class="detail">
                        <i class="fa-solid fa-phone"></i>
                        <span>(0251) 8583881</span>
                    </div>
                    <div class="detail mt-3">
                        <a href="https://wa.me/6285772226202" target="_blank">
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
                <div class="col-md-5">
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
        <p class="text-white">
            Copyright &copy; 2024 SMK Tonjong. All Rights Reserved.
        </p>
    </footer>
    <!-- End Footer -->