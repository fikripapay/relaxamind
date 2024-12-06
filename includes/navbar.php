<!-- Start Navbar -->
<nav
      class="navbar navbar-dark navbar-expand-lg sticky-top border-bottom"
      style="background-color: #005f73"
    >
      <div class="container">
        <a
          class="navbar-brand d-flex align-items-center"
          href="index.php"
          data-aos="fade-down"
          data-aos-once="true"
          data-aos-duration="1000"
        >
          <img
            src="assets/img/logo/logo.png"
            alt="RelaxaMind"
            height="65"
            class="d-inline-block align-text-center me-2"
          />
          <div class="brand-title text-white">
            <span>RelaxaMind</span>
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
            <a class="nav-link active" href="index.php">Beranda</a>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-white"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Program
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a
                    class="dropdown-item my-dropdown"
                    style="color: #005f73"
                    href="edukasi.php"
                    >Edukasi</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item my-dropdown"
                    style="color: #005f73"
                    href="pengukuran-tingkat-stress.php"
                    >Pengukuran Tingkat Stress</a
                  >
                </li>
              </ul>
            </li>
            <li class="nav-item dropdown">
              <a
                class="nav-link dropdown-toggle text-white"
                href="#"
                role="button"
                data-bs-toggle="dropdown"
                aria-expanded="false"
              >
                Alat Mengatasi
              </a>
              <ul class="dropdown-menu">
                <li>
                  <a
                    class="dropdown-item my-dropdown"
                    style="color: #005f73"
                    href="terapi-relaksasi-nafas-dalam.php"
                    >Terapi Relaksasi Nafas Dalam</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item my-dropdown"
                    style="color: #005f73"
                    href="terapi-mindfulness.php"
                    >Terapi Mindfulness</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item my-dropdown"
                    style="color: #005f73"
                    href="terapi-butterfly-hug.php"
                    >Terapi Butterfly Hug</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item my-dropdown"
                    style="color: #005f73"
                    href="terapi-imajinasi-terbimbing.php"
                    >Terapi Imajinasi Terbimbing</a
                  >
                </li>
                <li>
                  <a
                    class="dropdown-item my-dropdown"
                    style="color: #005f73"
                    href="terapi-musik.php"
                    >Terapi Musik
                  </a>
                </li>
              </ul>
            </li>
            <a
              class="nav-link text-white"
              href="https://api.whatsapp.com/send/?phone=62895336408686&text=Hai%21+Saya+ingin+memulai+sesi+konseling+untuk+membahas+masalah+yang+sedang+saya+hadapi.+Apakah+tersedia+waktu+untuk+saya%3F&type=phone_number&app_absent=0"
              target="_blank"
              >Konseling</a
            >
            <?php if (isset($_SESSION['username'])): ?>
              <li class="nav-item dropdown">
                <a
                  class="nav-link dropdown-toggle text-white"
                  href="#"
                  role="button"
                  data-bs-toggle="dropdown"
                  aria-expanded="false"
                >
                <?php echo $_SESSION['nama']; ?>
                </a>
                <ul class="dropdown-menu">
                  <li>
                    <a
                      class="dropdown-item my-dropdown"
                      style="color: #005f73"
                      href="terapi-relaksasi-nafas-dalam.php"
                      >Riwayat Tes</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item my-dropdown"
                      style="color: #005f73"
                      href="terapi-mindfulness.php"
                      >Pengaturan Akun</a
                    >
                  </li>
                  <li>
                    <a
                      class="dropdown-item my-dropdown text-danger"
                      href="keluar.php"
                      >Keluar</a
                    >
                  </li>
                </ul>
              </li>
            <?php else: ?>
              <a
                href="masuk.php"
                class="btn ms-lg-2 mt-2 mt-lg-0 text-white"
                style="background-color: #1877f2"
                >Masuk</a>
              <a
                href="daftar.php"
                class="btn ms-lg-2 mt-2 mt-lg-0 text-white"
                style="background-color: #39a922"
                >Daftar</a>
            <?php endif; ?>
          </div>
        </div>
      </div>
    </nav>
    <!-- End Navbar -->