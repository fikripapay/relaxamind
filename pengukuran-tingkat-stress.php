<?php
// Mulai sesi untuk mengecek status login
session_start();
require_once 'admin/config/database.php';

// Cek apakah pengguna belum login dengan memeriksa session username
if (!isset($_SESSION['username'])) {
  echo "<script>alert('Untuk memulai tes, Anda harus masuk terlebih dahulu.'); window.location.href = 'masuk.php';</script>";
  exit();
}

// Ambil ID user dari session
$id_users = $_SESSION['id_users'];

// Memeriksa apakah form telah disubmit
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
  $total_score = 0;
  $questions = ['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10'];
  $all_answered = true; // Flag untuk mengecek apakah semua pertanyaan sudah dijawab

  // Loop untuk menghitung skor berdasarkan jawaban
  foreach ($questions as $question) {
    if (isset($_POST[$question])) {
      $total_score += intval($_POST[$question]);
    } else {
      // Jika ada pertanyaan yang tidak dijawab
      $all_answered = false;
    }
  }

  if (!$all_answered) {
    // Jika ada pertanyaan yang belum dijawab
    $error = "Harap jawab semua pertanyaan!";
  } else {
    // Menentukan tingkat stres berdasarkan skor
    $stress_level = '';
    if ($total_score <= 13) {
      $stress_level = "Ringan";
      $alert_class = 'success';
      $description = 'Rekomendasi Penanganan: <a href="terapi-relaksasi-nafas-dalam.html">Terapi Relaksasi Nafas Dalam</a> dan <a href="terapi-mindfulness.html">Terapi Mindfulness</a>.';
    } elseif ($total_score <= 26) {
      $stress_level = "Sedang";
      $alert_class = 'warning';
      $description = 'Rekomendasi Penanganan: <a href="terapi-butterfly-hug.html">Terapi Butterfly Hug</a> dan <a href="terapi-musik.html">Terapi Musik</a>.';
    } else {
      $stress_level = "Berat";
      $alert_class = 'danger';
      $description = 'Rekomendasi Penanganan: Disarankan melakukan farmakoterapi dengan konsultasi ke profesional kesehatan.';
    }

    // Jika tidak ada error, simpan hasilnya ke database
    if (!isset($error)) {
      $stmt = $conn->prepare("INSERT INTO stress_test_results (id_users, score, stress_level) VALUES (?, ?, ?)");
      $stmt->bind_param("iis", $id_users, $total_score, $stress_level);
      if ($stmt->execute()) {
        $result_message = "Data berhasil disimpan!";
      } else {
        $result_message = "Gagal menyimpan data!";
      }
      $stmt->close();
    }
  }
}

$conn->close();
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
          PENGUKURAN TINGKAT STRES
        </h1>
        <form
          id="stressForm"
          class="row col-md-6 m-auto mt-4"
          data-aos="fade-up"
          data-aos-duration="1000"
          method="POST"
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
            type="submit"
            class="btn btn-primary d-inline mt-3 col-3 col-md-2"
            onclick="showLoading(event)"
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
        <?php if (isset($result_message)) { ?>
          <div id="result" class="mt-4 col-md-6 mx-auto">
            <div class="alert alert-<?php echo $alert_class; ?>" role="alert">
              <h4 class="alert-heading">Hasil Tes</h4>
              <p>Nilai total Anda adalah <strong><?php echo $total_score ?></strong>. <br> Tingkat stres Anda: <strong><?php echo $stress_level ?></strong>.</p>
              <hr />
              <p><?php echo $description ?></p>
            </div>
          </div>
        <?php } elseif (isset($error)) { ?>
          <div id="error" class="mt-4 col-md-6 mx-auto">
            <div class="alert alert-danger" role="alert">
              <h4 class="alert-heading">Error!</h4>
              <p><?php echo $error; ?></p>
            </div>
          </div>
        <?php } ?>
      </div>
    </section>
    <!-- End Tess Section -->

    <footer class="footer text-center">
      <p class="text-white">
        Copyright &copy; 2024 RelaxaMind. All Rights Reserved.
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

    <script>
      // Fungsi untuk menampilkan animasi loading dan validasi sebelum submit
      function showLoading(event) {
        event.preventDefault(); // Mencegah form disubmit langsung

        // Validasi untuk memastikan semua pertanyaan terjawab
        const questions = ['q1', 'q2', 'q3', 'q4', 'q5', 'q6', 'q7', 'q8', 'q9', 'q10'];
        let allAnswered = true;

        // Memeriksa setiap pertanyaan apakah sudah dijawab
        questions.forEach(function(question) {
          if (!document.querySelector(`input[name="${question}"]:checked`)) {
            allAnswered = false;
          }
        });

        if (!allAnswered) {
          // Jika ada pertanyaan yang belum dijawab, tampilkan alert dan jangan lanjutkan ke proses submit
          alert("Harap jawab semua pertanyaan!");
          return; // Menghentikan pengiriman form
        }

        // Jika semua pertanyaan dijawab, tampilkan animasi loading
        const loadingDiv = document.getElementById("loading");
        const form = document.getElementById("stressForm");

        loadingDiv.classList.remove("d-none"); // Menampilkan animasi loading

        // Menunggu 2 detik sebelum submit form
        setTimeout(function() {
          form.submit(); // Mengirim form setelah animasi selesai
        }, 2000);
      }
    </script>

  </body>
</html>
