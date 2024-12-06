<?php
// Mulai sesi untuk mengecek status login
session_start();

// Cek apakah pengguna belum login dengan memeriksa session username
if (!isset($_SESSION['username'])) {
  // Jika belum login, tampilkan alert dan redirect ke halaman index.php
  echo "<script>alert('Untuk memulai tes, Anda harus masuk terlebih dahulu.'); window.location.href = 'masuk.php';</script>";
  exit();
}
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

    <!-- Start Tess Section -->
    <section id="tess" class="my-5">
      <div class="container">
        <h1
          class="judul text-center"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          PENGUKURAN TINGKAT STRESS
        </h1>
        <form
          id="stressForm"
          class="row col-md-6 m-auto mt-4"
          data-aos="fade-up"
          data-aos-duration="1000"
        >
          <div class="q1 border rounded py-3">
            <p>
              1. Selama 1 bulan terakhir, seberapa sering anda marah/kesal
              karena sesuatu yang tidak terduga?
            </p>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q1"
                id="q1a1"
                value="0"
              />
              <label class="form-check-label" for="q1a1"> Tidak Pernah </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q1"
                id="q1a2"
                value="1"
              />
              <label class="form-check-label" for="q1a2">
                Hampir Tidak Pernah (1-2 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q1"
                id="q1a3"
                value="2"
              />
              <label class="form-check-label" for="q1a3">
                Kadang-kadang (3-4 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q1"
                id="q1a4"
                value="3"
              />
              <label class="form-check-label" for="q1a4">
                Cukup Sering (5-6 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q1"
                id="q1a5"
                value="4"
              />
              <label class="form-check-label" for="q1a5">
                Sangat Sering (lebih dari 6 kali)
              </label>
            </div>
          </div>
          <div class="q2 border rounded py-3 mt-2">
            <p>
              2. Selama 1 bulan terakhir, seberapa sering anda merasa tidak
              mampu mengontrol hal-hal yang penting dalam kehidupan anda?
            </p>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q2"
                id="q2a1"
                value="0"
              />
              <label class="form-check-label" for="q2a1"> Tidak Pernah </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q2"
                id="q2a2"
                value="1"
              />
              <label class="form-check-label" for="q2a2">
                Hampir Tidak Pernah (1-2 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q2"
                id="q2a3"
                value="2"
              />
              <label class="form-check-label" for="q2a3">
                Kadang-kadang (3-4 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q2"
                id="q2a4"
                value="3"
              />
              <label class="form-check-label" for="q2a4">
                Cukup Sering (5-6 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q2"
                id="q2a5"
                value="4"
              />
              <label class="form-check-label" for="q2a5">
                Sangat Sering (lebih dari 6 kali)
              </label>
            </div>
          </div>
          <div class="q3 border rounded py-3 mt-2">
            <p>
              3. Selama 1 bulan terakhir, seberapa sering anda merasa gelisah
              dan tertekan?
            </p>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q3"
                id="q3a1"
                value="0"
              />
              <label class="form-check-label" for="q3a1"> Tidak Pernah </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q3"
                id="q3a2"
                value="1"
              />
              <label class="form-check-label" for="q3a2">
                Hampir Tidak Pernah (1-2 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q3"
                id="q3a3"
                value="2"
              />
              <label class="form-check-label" for="q3a3">
                Kadang-kadang (3-4 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q3"
                id="q3a4"
                value="3"
              />
              <label class="form-check-label" for="q3a4">
                Cukup Sering (5-6 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q3"
                id="q3a5"
                value="4"
              />
              <label class="form-check-label" for="q3a5">
                Sangat Sering (lebih dari 6 kali)
              </label>
            </div>
          </div>
          <div class="q4 border rounded py-3 mt-2">
            <p>
              4. Selama 1 bulan terakhir, seberapa sering anda merasa yakin
              terhadap kemampuan diri untuk mengatasi masalah pribadi?
            </p>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q4"
                id="q4a1"
                value="0"
              />
              <label class="form-check-label" for="q4a1"> Tidak Pernah </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q4"
                id="q4a2"
                value="1"
              />
              <label class="form-check-label" for="q4a2">
                Hampir Tidak Pernah (1-2 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q4"
                id="q4a3"
                value="2"
              />
              <label class="form-check-label" for="q4a3">
                Kadang-kadang (3-4 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q4"
                id="q4a4"
                value="3"
              />
              <label class="form-check-label" for="q4a4">
                Cukup Sering (5-6 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q4"
                id="q4a5"
                value="4"
              />
              <label class="form-check-label" for="q4a5">
                Sangat Sering (lebih dari 6 kali)
              </label>
            </div>
          </div>
          <div class="q5 border rounded py-3 mt-2">
            <p>
              5. Selama 1 bulan terakhir, seberapa sering anda merasa segala
              sesuatu yang terjadi sesuai dengan harapan anda?
            </p>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q5"
                id="q5a1"
                value="0"
              />
              <label class="form-check-label" for="q5a1"> Tidak Pernah </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q5"
                id="q5a2"
                value="1"
              />
              <label class="form-check-label" for="q5a2">
                Hampir Tidak Pernah (1-2 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q5"
                id="q5a3"
                value="2"
              />
              <label class="form-check-label" for="q5a3">
                Kadang-kadang (3-4 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q5"
                id="q5a4"
                value="3"
              />
              <label class="form-check-label" for="q5a4">
                Cukup Sering (5-6 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q5"
                id="q5a5"
                value="4"
              />
              <label class="form-check-label" for="q5a5">
                Sangat Sering (lebih dari 6 kali)
              </label>
            </div>
          </div>
          <div class="q6 border rounded py-3 mt-2">
            <p>
              6. Selama 1 bulan terakhir, seberapa sering anda merasa tidak
              mampu menyelesaikan hal-hal yang harus dikerjakan?
            </p>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q6"
                id="q6a1"
                value="0"
              />
              <label class="form-check-label" for="q6a1"> Tidak Pernah </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q6"
                id="q6a2"
                value="1"
              />
              <label class="form-check-label" for="q6a2">
                Hampir Tidak Pernah (1-2 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q6"
                id="q6a3"
                value="2"
              />
              <label class="form-check-label" for="q6a3">
                Kadang-kadang (3-4 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q6"
                id="q6a4"
                value="3"
              />
              <label class="form-check-label" for="q6a4">
                Cukup Sering (5-6 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q6"
                id="q6a5"
                value="4"
              />
              <label class="form-check-label" for="q6a5">
                Sangat Sering (lebih dari 6 kali)
              </label>
            </div>
          </div>
          <div class="q7 border rounded py-3 mt-2">
            <p>
              7. selama 1 bulan terakhir , seberapa sering anda mampu mengontrol
              rasa mudah tersinggung dalam kehidupan anda?
            </p>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q7"
                id="q7a1"
                value="0"
              />
              <label class="form-check-label" for="q7a1"> Tidak Pernah </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q7"
                id="q7a2"
                value="1"
              />
              <label class="form-check-label" for="q7a2">
                Hampir Tidak Pernah (1-2 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q7"
                id="q7a3"
                value="2"
              />
              <label class="form-check-label" for="q7a3">
                Kadang-kadang (3-4 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q7"
                id="q7a4"
                value="3"
              />
              <label class="form-check-label" for="q7a4">
                Cukup Sering (5-6 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q7"
                id="q7a5"
                value="4"
              />
              <label class="form-check-label" for="q7a5">
                Sangat Sering (lebih dari 6 kali)
              </label>
            </div>
          </div>
          <div class="q8 border rounded py-3 mt-2">
            <p>
              8. Selama 1 bulan terakhir, seberapa sering anda merasa lebih
              mampu mengatasi masalah jika dibandingkan dengan orang lain?
            </p>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q8"
                id="q8a1"
                value="0"
              />
              <label class="form-check-label" for="q8a1"> Tidak Pernah </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q8"
                id="q8a2"
                value="1"
              />
              <label class="form-check-label" for="q8a2">
                Hampir Tidak Pernah (1-2 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q8"
                id="q8a3"
                value="2"
              />
              <label class="form-check-label" for="q8a3">
                Kadang-kadang (3-4 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q8"
                id="q8a4"
                value="3"
              />
              <label class="form-check-label" for="q8a4">
                Cukup Sering (5-6 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q8"
                id="q8a5"
                value="4"
              />
              <label class="form-check-label" for="q8a5">
                Sangat Sering (lebih dari 6 kali)
              </label>
            </div>
          </div>
          <div class="q9 border rounded py-3 mt-2">
            <p>
              9. Selama 1 bulan terakhir, seberapa sering anda marah karena
              adanya masalah yang tidak dapat anda kendalikan?
            </p>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q9"
                id="q9a1"
                value="0"
              />
              <label class="form-check-label" for="q9a1"> Tidak Pernah </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q9"
                id="q9a2"
                value="1"
              />
              <label class="form-check-label" for="q9a2">
                Hampir Tidak Pernah (1-2 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q9"
                id="q9a3"
                value="2"
              />
              <label class="form-check-label" for="q9a3">
                Kadang-kadang (3-4 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q9"
                id="q9a4"
                value="3"
              />
              <label class="form-check-label" for="q9a4">
                Cukup Sering (5-6 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q9"
                id="q9a5"
                value="4"
              />
              <label class="form-check-label" for="q9a5">
                Sangat Sering (lebih dari 6 kali)
              </label>
            </div>
          </div>
          <div class="q10 border rounded py-3 mt-2">
            <p>
              10. Selama 1 bulan terakhir, seberapa sering anda merasa kesulitan
              yang menumpuk sehingga anda tidak mampu untuk mengatasinya?
            </p>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q10"
                id="q10a1"
                value="0"
              />
              <label class="form-check-label" for="q10a1"> Tidak Pernah </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q10"
                id="q10a2"
                value="1"
              />
              <label class="form-check-label" for="q10a2">
                Hampir Tidak Pernah (1-2 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q10"
                id="q10a3"
                value="2"
              />
              <label class="form-check-label" for="q10a3">
                Kadang-kadang (3-4 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q10"
                id="q10a4"
                value="3"
              />
              <label class="form-check-label" for="q10a4">
                Cukup Sering (5-6 kali)
              </label>
            </div>
            <div class="form-check">
              <input
                class="form-check-input"
                type="radio"
                name="q10"
                id="q10a5"
                value="4"
              />
              <label class="form-check-label" for="q10a5">
                Sangat Sering (lebih dari 6 kali)
              </label>
            </div>
          </div>
          <button
            type="button"
            class="btn btn-primary d-inline mt-3 col-3 col-md-2"
            onclick="showLoading()"
          >
            Submit
          </button>
        </form>

        <!-- Loading Animasi -->
        <div id="loading" class="mt-4 d-none text-center">
          <div class="spinner-border spinner-border-sm" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
          <div class="spinner-grow spinner-grow-sm" role="status">
            <span class="visually-hidden">Loading...</span>
          </div>
        </div>

        <!-- Output Hasil -->
        <div id="result" class="mt-4 d-none col-md-6 mx-auto">
          <div class="alert" role="alert">
            <h4 class="alert-heading" id="result-title">Hasil Tes</h4>
            <p id="result-text">
              Skor total Anda adalah <strong id="score">0</strong>. Tingkat
              stres Anda: <strong id="stress-level">Rendah</strong>.
            </p>
            <hr />
            <p>
              Jaga kesehatan mental Anda, dan tetaplah tenang dalam menghadapi
              situasi.
            </p>
            <p class="mb-0" id="penanganan"></p>
            <p></p>
          </div>
        </div>
      </div>
    </section>
    <!-- End Tess Section -->

    <?php include 'includes/footer.php'; ?>
