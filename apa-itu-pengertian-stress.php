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
      .thumbnail img {
        width: 50%;
      }

      @media (max-width: 768px) {
        .thumbnail img {
          width: 100%;
        }
      }

      div > p,
      li {
        text-align: justify;
      }
    </style>
  </head>

  <body>
    <?php include 'includes/navbar.php'; ?>

    <!-- Start Main -->
    <main>
      <div
        class="container py-5 text-center"
        data-aos="fade-up"
        data-aos-duration="1000"
      >
        <h1>Apa itu Pengertian Stress?</h1>
        <div class="thumbnail">
          <img src="assets/img/edukasi/stress.webp" alt="Picture" class="img-fluid rounded" />
        </div>
        <div class="content text-start mt-4">
          <p>
            Stress merupakan keadaan yang disebabkan dengan adanya sebuah
            tuntutan  internal maupun eksternal ( stimulus ) yang mengancam,
            mengganggu, atau melebihi kemampuan individu akan bereaksi baik
            biologis, psikologis atau sitem individu dalam menanganinya (
            Hariyanto et.al 2014 ).
          </p>
          <p>Penyebab Stress pada Remaja:</p>
          <ul>
            <li>Masalah pelajaran sekolah.</li>
            <li>Masalah teman dekat / pacar.</li>
            <li>Masalah hubungan dengan orangtua.</li>
          </ul>
          <p>Tips mengatasi Stress pada Remaja:</p>
          <ul>
            <li>Berbicara dengan orang yang kita percaya.</li>
            <li>Meminta bantuan agar tidak menghadapi sesuatu sendirian.</li>
            <li>
              Relaksasi nafas dalam, tindakan ini dapat menurunkan tingkat
              stress seseorang.
            </li>
          </ul>
          <p>Penatalaksanaan:</p>
          <ul>
            <li>Terapi musik.</li>
            <li>Terapi butterfly hug.</li>
            <li>Terapi mindfullnes.</li>
            <li>Terapi relaksasi nafas dalam.</li>
          </ul>
        </div>
        <div class="row mt-5 justify-content-between">
          <div
            class="col-lg-7 mx-auto"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <img
              src="assets/img/apa-itu-pengertian-stress/1.PNG"
              alt="Gambar 1"
              class="img-fluid shadow rounded"
            />
          </div>
          <div
            class="col-lg-7 mt-4 mx-auto"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <img
              src="assets/img/apa-itu-pengertian-stress/2.PNG"
              alt="Gambar 2"
              class="img-fluid shadow rounded"
            />
          </div>
          <div
            class="col-lg-7 mt-4 mx-auto"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <img
              src="assets/img/apa-itu-pengertian-stress/3.PNG"
              alt="Gambar 3"
              class="img-fluid shadow rounded"
            />
          </div>
          <div
            class="col-lg-7 mt-4 mx-auto"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <img
              src="assets/img/apa-itu-pengertian-stress/4.PNG"
              alt="Gambar 4"
              class="img-fluid shadow rounded"
            />
          </div>
          <div
            class="col-lg-7 mt-4 mx-auto"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <img
              src="assets/img/apa-itu-pengertian-stress/5.PNG"
              alt="Gambar 5"
              class="img-fluid shadow rounded"
            />
          </div>
          <div
            class="col-lg-7 mt-4 mx-auto"
            data-aos="fade-up"
            data-aos-duration="1000"
            data-aos-easing="ease-in-sine"
            data-aos-delay="500"
          >
            <img
              src="assets/img/apa-itu-pengertian-stress/6.PNG"
              alt="Gambar 6"
              class="img-fluid shadow rounded"
            />
          </div>
        </div>
      </div>
    </main>
    <!-- End Main -->

    <?php include 'includes/footer.php'; ?>

