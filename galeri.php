<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Galeri Foto - SMK TONJONG</title>
    <link rel="icon" href="assets/img/icon/icon.png" />

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com" />
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,500;0,600;0,700;1,400;1,500;1,600;1,700&display=swap"
        rel="stylesheet" />

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous" />

    <!-- Style AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- Font Awesome -->
    <link rel="stylesheet" href="fontawesome/css/all.min.css" />

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/style/app.css" />
    <style>
    main {
        background-color: #eff9ff;
    }
    </style>
</head>

<body>
    <!-- Preloader -->

    <!-- Start Navbar -->
    <nav class="navbar navbar-expand-lg sticky-top bg-navbar border-bottom">
        <div class="container">
            <a class="navbar-brand d-flex align-items-center" href="index.html" data-aos="fade-down"
                data-aos-once="true" data-aos-duration="1000">
                <img src="assets/img/icon/navbar.png" alt="logo smk tonjong" height="65"
                    class="d-inline-block align-text-center me-2" />
                <div class="brand-title">
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
                    <a class="nav-link active" href="index.html">Home</a>
                    <a class="nav-link" href="../profile.html">Profile</a>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown"
                            aria-expanded="false">
                            Galeri
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a class="dropdown-item" href="foto.html">Foto</a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="video.html">Video</a>
                            </li>
                        </ul>
                    </li>
                    <a class="nav-link" href="../berita.html">Berita</a>
                    <a class="nav-link" href="#kontak">Kontak</a>
                    <a class="nav-link ms-lg-3 mt-3 mt-lg-0 text-center rounded login" href="login.html">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <!-- End Navbar -->

    <!-- Start Main Section -->
    <main class="pt-1 pb-5">
        <div class="kegiatan">
            <div class="container mt-5 text-center">
                <h2 class="judul" data-aos="fade-up" data-aos-duration="1000">
                    GALERI KEGIATAN
                </h2>
                <div class="row row-cols-lg-6 row-cols-md-4 row-cols-2 row-gap-3 justify-content-center mt-4">
                    <div class="col" data-aos="fade-up" data-aos-duration="1000">
                        <a href="https://unsplash.it/1200/768.jpg?image=251" data-toggle="lightbox"
                            data-gallery="gallery" data-caption="Kegiatan 1"><img
                                src="https://unsplash.it/600.jpg?image=251" alt="Picture"
                                class="img-fluid rounded" /></a>
                        <span>Kegiatan 1</span>
                    </div>
                </div>
            </div>
        </div>
    </main>
    <!-- End Main Section -->

    <!-- Start Kontak Section -->
    <section id="kontak" class="kontak">
        <div class="container">
            <div class="row py-5 justify-content-sm-between">
                <div class="col-md-2">
                    <h3>Ikuti Kami</h3>
                    <div class="followme">
                        <a href="https://instagram.com/" target="_blank"><i
                                class="fa-brands fa-square-instagram"></i></a>
                        <a href="https://tiktok.com/" target="_blank"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="https://youtube.com/" target="_blank"><i class="fa-brands fa-square-youtube"></i></a>
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
                            -</a>
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
        <p class="text-white">
            Copyright &copy; 2024 SMK Tonjong. All Rights Reserved.
        </p>
    </footer>
    <!-- End Footer -->

    <!-- Bootstrap Script -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>

    <!-- Script AOS -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>

    <script>
    AOS.init();
    </script>

    <!-- Lightbox -->
    <script src="https://cdn.jsdelivr.net/npm/bs5-lightbox@1.8.3/dist/index.bundle.min.js"></script>
</body>

</html>