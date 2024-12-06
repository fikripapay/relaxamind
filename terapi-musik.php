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

    <!-- Style AOS -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet" />

    <!-- My CSS -->
    <link rel="stylesheet" href="assets/style/app.css" />

    <style>
      div > p {
        text-align: justify;
      }
    </style>
  </head>

  <body>
    <?php include 'includes/navbar.php'; ?>

    <!-- Start Terapi Mindfulness Section -->
    <section id="tess" class="my-5">
      <div class="container">
        <h1
          class="judul text-center"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          TERAPI MUSIK
        </h1>
        <div class="row mt-5">
          <div
            class="col-lg-7 mx-auto"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <img
              src="assets/img/terapi-musik/1.png"
              alt="Panduan Terapi Musik"
              class="img-fluid shadow rounded"
            />
          </div>
          <div
            class="col-lg-7 mx-auto mt-4"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <img
              src="assets/img/terapi-musik/2.jpeg"
              alt="Panduan Terapi Musik"
              class="img-fluid shadow rounded"
            />
          </div>
        </div>
        <div class="list-group mt-5 col-lg-4 mx-auto">
          <div class="list-group-item">
            <p>Für Elise - Classical Piano</p>
            <div class="d-flex align-items-center justify-content-lg-between">
              <div class="me-3">
                <div
                  class="rounded-circle overflow-hidden"
                  style="width: 50px; height: 50px"
                >
                  <img
                    src="assets/img/logo/musik.webp"
                    alt="logo"
                    class="w-100 h-100"
                  />
                </div>
              </div>
              <audio controls class="ms-3">
                <source src="assets/musik/1.mp3" type="audio/mp3" />
              </audio>
            </div>
          </div>
          <div class="list-group-item">
            <p>Mozart - Sonata No. 13</p>
            <div class="d-flex align-items-center justify-content-lg-between">
              <div class="me-3">
                <div
                  class="rounded-circle overflow-hidden"
                  style="width: 50px; height: 50px"
                >
                  <img
                    src="assets/img/logo/musik.webp"
                    alt="logo"
                    class="w-100 h-100"
                  />
                </div>
              </div>
              <audio controls class="ms-3">
                <source src="assets/musik/3.mp3" type="audio/mp3" />
              </audio>
            </div>
          </div>
          <div class="list-group-item">
            <p>Mozart - Piano Sonata In B-flat Major, III</p>
            <div class="d-flex align-items-center justify-content-lg-between">
              <div class="me-3">
                <div
                  class="rounded-circle overflow-hidden"
                  style="width: 50px; height: 50px"
                >
                  <img
                    src="assets/img/logo/musik.webp"
                    alt="logo"
                    class="w-100 h-100"
                  />
                </div>
              </div>
              <audio controls class="ms-3">
                <source src="assets/musik/4.mp3" type="audio/mp3" />
              </audio>
            </div>
          </div>
          <div class="list-group-item">
            <p>Passacaglia - Classical Piano Music</p>
            <div class="d-flex align-items-center justify-content-lg-between">
              <div class="me-3">
                <div
                  class="rounded-circle overflow-hidden"
                  style="width: 50px; height: 50px"
                >
                  <img
                    src="assets/img/logo/musik.webp"
                    alt="logo"
                    class="w-100 h-100"
                  />
                </div>
              </div>
              <audio controls class="ms-3">
                <source src="assets/musik/5.mp3" type="audio/mp3" />
              </audio>
            </div>
          </div>
          <div class="list-group-item">
            <p>Instrumen Gending Jawa</p>
            <div class="d-flex align-items-center justify-content-lg-between">
              <div class="me-3">
                <div
                  class="rounded-circle overflow-hidden"
                  style="width: 50px; height: 50px"
                >
                  <img
                    src="assets/img/logo/musik.webp"
                    alt="logo"
                    class="w-100 h-100"
                  />
                </div>
              </div>
              <audio controls class="ms-3">
                <source src="assets/musik/7.mp3" type="audio/mp3" />
              </audio>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Terapi Mindfulness Section -->

    <?php include 'includes/footer.php'; ?>
