<?php
// Mulai sesi untuk mengecek status login
session_start();
?>

<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>RelaxaMind</title>
    <link rel="icon" href="assets/img/logo/logo.png" />

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
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">

    <!-- Style AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/style/app.css" />
  </head>

  <body>
    <?php include 'includes/navbar.php'; ?>
  
    <!-- Start Edukasi Section -->
    <section
      id="edukasi"
      class="edukasi py-5"
      style="min-height: calc(100vh - 156px)"
    >
      <div class="container">
        <h2
          class="judul text-center"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          EDUKASI
        </h2>
        <div
          class="row mt-4 gap-3 justify-content-center"
          data-aos="fade-up"
          data-aos-duration="1000"
          data-aos-easing="ease-in-sine"
          data-aos-delay="500"
        >
          <div
            class="col-md-5 col-lg-3"
            data-aos="fade-up"
            data-aos-duration="1000"
          >
            <div class="card">
              <img src="assets/img/edukasi/stress.webp" class="card-img-top" alt="..." />
              <div class="card-body">
                <h5 class="card-title fs-6 fw-bold">
                  Apa itu Pengertian Stress?
                </h5>
                <a
                  href="apa-itu-pengertian-stress.php"
                  class="btn btn-primary mt-2"
                  >Lihat Detail</a
                >
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Edukasi Section -->

    <?php include 'includes/footer.php'; ?>
