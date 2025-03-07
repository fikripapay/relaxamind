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

    <!-- Start Hero Section -->
    <section
      id="hero"
      data-aos="zoom-in"
      data-aos-once="true"
      data-aos-duration="1000"
    >
      <div class="container text-center">
        <h1>RELAXAMIND</h1>
        <p>
          Relaxamind adalah aplikasi berbasis website untuk menurunkan tingkat
          stres dengan berbagai terapi yang dikembangkan oleh Vita Oktafiana dan
          Zalfa Salma Oktabila, bekerja sama dengan mahasiswa IT di bawah
          bimbingan Ibu Ns. Tita Hardianti, S. Kep., M. Kep. dan Ibu Gita
          Ayuningtyas, SKG., MH. Kes.
        </p>
        <a
          class="btn btn-primary hu__hu__"
          href="pengukuran-tingkat-stress.php"
          role="button"
          >Mulai Tes Sekarang</a
        >
      </div>
    </section>
    <!-- End Hero Section -->

    <!-- Start Tips Section -->
    <section id="tips" class="tips mt-5">
      <div class="container text-center">
        <h2 class="judul" data-aos="fade-up" data-aos-duration="1000">
          1 HARI 1 TIPS
        </h2>
        <div id="carouselExampleFade" class="carousel slide carousel-fade">
          <div class="carousel-inner">
            <div class="carousel-item active">
              <div
                class="card text-center w-50 m-auto card-custom"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <div class="card-header">Tips Relaksasi</div>
                <div class="card-body">
                  <h5 class="card-title">Meditasi 5 Menit</h5>
                  <p class="card-text">
                    Ambil 5 menit dari harimu untuk duduk diam dan fokus pada
                    pernapasan. Ini membantu menenangkan pikiran dan tubuh.
                  </p>
                  <img
                    src="assets/img/tips/1.webp"
                    width="200"
                    class="img-fluid rounded"
                    alt="..."
                  />
                </div>
                <div class="card-footer text-body-secondary">Hari Ini</div>
              </div>
            </div>
            <div class="carousel-item">
              <div
                class="card text-center w-50 m-auto card-custom"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <div class="card-header">Mindfulness</div>
                <div class="card-body">
                  <h5 class="card-title">Berjalan Sejenak</h5>
                  <p class="card-text">
                    Jalan kaki singkat di luar rumah bisa menyegarkan pikiran
                    dan membantu meredakan ketegangan otot.
                  </p>
                  <img
                    src="assets/img/tips/2.webp"
                    width="200"
                    class="img-fluid rounded"
                    alt="..."
                  />
                </div>
                <div class="card-footer text-body-secondary">Kemarin</div>
              </div>
            </div>
            <div class="carousel-item">
              <div
                class="card text-center w-50 m-auto card-custom"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <div class="card-header">Tips Relaksasi</div>
                <div class="card-body">
                  <h5 class="card-title">Peregangan Ringan 5 Menit</h5>
                  <p class="card-text">
                    Luangkan waktu untuk melakukan peregangan tubuh ringan. Ini
                    membantu melepaskan ketegangan otot dan meningkatkan
                    sirkulasi darah, memberikan efek relaksasi.
                  </p>
                  <img
                    src="assets/img/tips/3.webp"
                    width="200"
                    class="img-fluid rounded"
                    alt="..."
                  />
                </div>
                <div class="card-footer text-body-secondary">2 Hari Lalu</div>
              </div>
            </div>
            <div class="carousel-item">
              <div
                class="card text-center w-50 m-auto card-custom"
                data-aos="fade-up"
                data-aos-duration="1000"
              >
                <div class="card-header">Tips Pernafasan</div>
                <div class="card-body">
                  <h5 class="card-title">Teknik Pernafasan Dalam</h5>
                  <p class="card-text">
                    Cobalah teknik pernafasan dalam selama 3-5 menit. Tarik
                    nafas dalam-dalam melalui hidung, tahan sejenak, lalu
                    hembuskan perlahan. Ini efektif untuk menenangkan sistem
                    saraf.
                  </p>
                  <img
                    src="assets/img/tips/4.webp"
                    width="200"
                    class="img-fluid rounded"
                    alt="..."
                  />
                </div>
                <div class="card-footer text-body-secondary">3 Hari Lalu</div>
              </div>
            </div>
          </div>
          <button
            class="carousel-control-prev"
            type="button"
            data-bs-target="#carouselExampleFade"
            data-bs-slide="prev"
          >
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
          </button>
          <button
            class="carousel-control-next"
            type="button"
            data-bs-target="#carouselExampleFade"
            data-bs-slide="next"
          >
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
          </button>
        </div>
      </div>
    </section>
    <!-- End Tips Section -->

    <!-- Start Question Section -->
    <section class="question mt-5">
      <div class="container">
        <h2 class="judul text-center">PERTANYAAN YANG SERING DIAJUKAN</h2>
        <div class="accordion accordion-flush mt-4" id="accordionFlushExample">
          <div class="accordion-item">
            <h2 class="fs-5" style="color: #005f73">Pertanyaan Umum</h2>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseOne"
                aria-expanded="false"
                aria-controls="flush-collapseOne"
              >
                Apa itu RelaxaMind?
              </button>
            </h2>
            <div
              id="flush-collapseOne"
              class="accordion-collapse collapse text-justify"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                RelaxaMind adalah platform online yang dirancang untuk membantu
                Anda mengelola stres dan menjaga kesehatan mental melalui
                berbagai tes, tips, dan program manajemen stres. Dengan
                menggunakan RelaxaMind, Anda dapat dengan mudah mengukur tingkat
                stres Anda, mendapatkan rekomendasi yang dipersonalisasi, dan
                belajar teknik relaksasi untuk meningkatkan kesejahteraan
                emosional Anda. Platform ini juga menawarkan sumber daya
                bermanfaat untuk menjaga keseimbangan hidup di tengah rutinitas
                yang padat.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseTwo"
                aria-expanded="false"
                aria-controls="flush-collapseTwo"
              >
                Apakah tes ini akurat?
              </button>
            </h2>
            <div
              id="flush-collapseTwo"
              class="accordion-collapse collapse text-justify"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Tes ini menggunakan algoritma yang dirancang oleh para ahli di
                bidang kesehatan mental untuk memberikan gambaran umum tentang
                tingkat stres Anda. Meskipun tes ini dapat memberikan indikasi,
                hasil akhirnya sebaiknya digunakan sebagai panduan dan bukan
                sebagai diagnosis medis.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFour"
                aria-expanded="false"
                aria-controls="flush-collapseFour"
              >
                Apakah hasil tes ini bersifat rahasia?
              </button>
            </h2>
            <div
              id="flush-collapseFour"
              class="accordion-collapse collapse text-justify"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Ya, hasil tes Anda sepenuhnya bersifat pribadi dan rahasia. Kami
                tidak akan membagikan informasi Anda kepada pihak ketiga tanpa
                izin Anda.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFive"
                aria-expanded="false"
                aria-controls="flush-collapseFive"
              >
                Apakah saya bisa mengikuti tes ini lebih dari sekali?
              </button>
            </h2>
            <div
              id="flush-collapseFive"
              class="accordion-collapse collapse text-justify"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Ya, Anda dapat mengikuti tes ini kapan saja sesuai kebutuhan
                Anda. Kami bahkan merekomendasikan untuk mengikuti tes secara
                berkala untuk memantau tingkat stres Anda.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseSix"
                aria-expanded="false"
                aria-controls="flush-collapseSix"
              >
                Bagaimana cara tes ini menghitung tingkat stres saya?
              </button>
            </h2>
            <div
              id="flush-collapseSix"
              class="accordion-collapse collapse text-justify"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Tes ini menggunakan serangkaian pertanyaan yang dianalisis
                dengan metode tertentu untuk mengukur faktor-faktor stres dalam
                kehidupan Anda. Jawaban Anda diproses melalui algoritma yang
                menghasilkan skor stres.
              </div>
            </div>
          </div>
          <div class="accordion-item mt-4">
            <h2 class="fs-5" style="color: #005f73">
              Tentang Kesehatan Mental
            </h2>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseThirteen"
                aria-expanded="false"
                aria-controls="flush-collapseThirteen"
              >
                Apa saja gejala stres yang perlu saya waspadai?
              </button>
            </h2>
            <div
              id="flush-collapseThirteen"
              class="accordion-collapse collapse text-justify"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Gejala stres bisa berbeda-beda pada setiap orang, namun beberapa
                gejala umum termasuk kelelahan, sulit tidur, kecemasan, gangguan
                konsentrasi, dan mudah marah.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFourteen"
                aria-expanded="false"
                aria-controls="flush-collapseFourteen"
              >
                Bagaimana cara mengurangi stres?
              </button>
            </h2>
            <div
              id="flush-collapseFourteen"
              class="accordion-collapse collapse text-justify"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Mengurangi stres bisa dilakukan melalui berbagai cara seperti
                berolahraga, meditasi, menjaga pola makan sehat, tidur yang
                cukup, atau berkonsultasi dengan profesional kesehatan mental.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseFifteen"
                aria-expanded="false"
                aria-controls="flush-collapseFifteen"
              >
                Kapan saya harus mencari bantuan profesional untuk masalah
                stres?
              </button>
            </h2>
            <div
              id="flush-collapseFifteen"
              class="accordion-collapse collapse text-justify"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Jika Anda merasa stres sudah mempengaruhi kehidupan sehari-hari
                Anda secara signifikan atau jika Anda mengalami gejala fisik
                atau emosional yang tidak terkendali, disarankan untuk segera
                mencari bantuan dari profesional kesehatan mental.
              </div>
            </div>
          </div>
          <div class="accordion-item">
            <h2 class="accordion-header">
              <button
                class="accordion-button collapsed"
                type="button"
                data-bs-toggle="collapse"
                data-bs-target="#flush-collapseSixteen"
                aria-expanded="false"
                aria-controls="flush-collapseSixteen"
              >
                Apakah stres dapat menyebabkan penyakit fisik?
              </button>
            </h2>
            <div
              id="flush-collapseSixteen"
              class="accordion-collapse collapse text-justify"
              data-bs-parent="#accordionFlushExample"
            >
              <div class="accordion-body">
                Ya, stres yang berkepanjangan dapat berdampak buruk pada
                kesehatan fisik, seperti meningkatkan risiko penyakit jantung,
                tekanan darah tinggi, gangguan tidur, dan masalah pencernaan.
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- End Question Section -->

    <!-- Start Q&A Section -->
    <section class="qa mt-5">
      <div class="container text-center">
        <h2 class="judul">FORUM DISKUSI DAN TANYA JAWAB</h2>
        <div id="disqus_thread" class="my-5"></div>
        <script>
          var disqus_config = function () {
            this.page.url = "https://fikripapay.github.io/relaxamind/";
            this.page.identifier = "https://fikripapay.github.io/relaxamind/";
          };
          (function () {
            // DON'T EDIT BELOW THIS LINE
            var d = document,
              s = d.createElement("script");
            s.src = "https://relaxamind.disqus.com/embed.js";
            s.setAttribute("data-timestamp", +new Date());
            (d.head || d.body).appendChild(s);
          })();
        </script>
        <noscript
          >Please enable JavaScript to view the
          <a href="https://disqus.com/?ref_noscript"
            >comments powered by Disqus.</a
          ></noscript
        >
      </div>
    </section>
    <!-- End Q&A Section -->

    <!-- Start Footer -->
    <footer class="footer text-center">
      <p class="text-white">
        Copyright &copy; 2025 RelaxaMind. All Rights Reserved.
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
  </body>
</html>
