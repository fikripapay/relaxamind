function calculateScore() {
  let totalScore = 0;
  const form = document.getElementById("stressForm");
  const questions = [
    "q1",
    "q2",
    "q3",
    "q4",
    "q5",
    "q6",
    "q7",
    "q8",
    "q9",
    "q10",
  ];

  // Validasi semua pertanyaan telah dijawab
  for (let question of questions) {
    const selectedOption = form.querySelector(
      `input[name="${question}"]:checked`
    );
    if (!selectedOption) {
      alert(`Harap jawab semua pertanyaan!`);
      return null; // Hentikan jika ada yang belum diisi
    }
    totalScore += parseInt(selectedOption.value);
  }

  return totalScore; // Kembalikan total skor jika semua terisi
}

function showLoading() {
  const score = calculateScore(); // Hitung skor atau validasi input

  // Jika score null (validasi gagal), hentikan eksekusi
  if (score === null) {
    return;
  }

  // Tampilkan animasi loading
  document.getElementById("loading").classList.remove("d-none");

  // Simulasi loading, lalu tampilkan hasil setelah 2 detik
  setTimeout(() => {
    document.getElementById("loading").classList.add("d-none");

    const resultDiv = document.getElementById("result");
    const alertBox = resultDiv.querySelector(".alert");

    let stressLevel = "";
    let alertClass = "";
    let penanganan = "";

    if (score <= 13) {
      stressLevel = "Rendah";
      alertClass = "alert-success"; // Tingkat stres rendah
      penanganan =
        'Rekomendasi Penanganan <a href="terapi-relaksasi-nafas-dalam.html">Terapi Relaksasi Nafas Dalam</a> dan <a href="terapi-mindfulness.html">Terapi Mindfulness</a>.';
    } else if (score <= 26) {
      stressLevel = "Sedang";
      alertClass = "alert-warning"; // Tingkat stres sedang
      penanganan =
        'Rekomendasi Penanganan <a href="terapi-butterfly-hug.html">Terapi Butterfly Hug</a> dan <a href="terapi-musik.html">Terapi Musik</a>.';
    } else {
      stressLevel = "Tinggi";
      alertClass = "alert-danger"; // Tingkat stres tinggi
      penanganan = "Rekomendasi Penganan Melakukan Farmakoterapi.";
    }

    // Ubah isi dan kelas alert sesuai dengan tingkat stres
    alertBox.className = `alert ${alertClass}`;
    document.getElementById("score").textContent = score;
    document.getElementById("stress-level").textContent = stressLevel;
    document.getElementById("penanganan").innerHTML = penanganan;

    // Tampilkan hasil
    resultDiv.classList.remove("d-none");

    // Reset form setelah submit
    document.getElementById("stressForm").reset();
  }, 2000); // Waktu tunggu 2 detik
}
