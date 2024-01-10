<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MySPP</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="shortcut icon" href="assets/img/myspp-logo.png">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link
    href="https://fonts.googleapis.com/css2?family=Open+Sans:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Poppins:ital,wght@0,300;0,400;0,500;0,600;0,700;1,300;1,400;1,500;1,600;1,700&family=Source+Sans+Pro:ital,wght@0,300;0,400;0,600;0,700;1,300;1,400;1,600;1,700&display=swap"
    rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/css/variables-blue.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
  
  <style>
    body {
      --sb-track-color: #ffffff;
      --sb-thumb-color: #3279fc;
      --sb-size: 13px;

      scrollbar-color: var(--sb-thumb-color) var(--sb-track-color);
    }

    body::-webkit-scrollbar {
      width: var(--sb-size)
    }

    body::-webkit-scrollbar-track {
      background: var(--sb-track-color);
      border-radius: 50px;
    }

    body::-webkit-scrollbar-thumb {
      background: var(--sb-thumb-color);
      border-radius: 50px;

    }



    .header {
      background-color: #fff;
      color: #333;
    }

    body.dark-mode {
      background-color: #333;
      color: #fff;
    }

    body.dark-mode .header {
      background-color: #222;
      color: #fff;
    }

    body.dark-mode .btn-getstarted {
      background-color: #222;
      color: #007bff;
    }

    .dark-mode #service-item-1 h4,
    .dark-mode #service-item-1 p,
    .dark-mode #service-item-2 h4,
    .dark-mode #service-item-2 p,
    .dark-mode #service-item-3 h4,
    .dark-mode #service-item-3 p {
      color: #ffffff;

    }

    .dark-mode .your-element {
      color: white;
    }

    .switch {
      position: relative;
      display: inline-block;
      width: 60px;
      height: 34px;
    }

    .switch input {
      opacity: 0;
      width: 0;
      height: 0;
    }

    .slider {
      position: absolute;
      cursor: pointer;
      top: 0;
      left: 0;
      right: 0;
      bottom: 0;
      background-color: #ccc;
      -webkit-transition: 0.4s;
      transition: 0.4s;
      border-radius: 34px;
    }

    .slider:before {
      position: absolute;
      content: '';
      height: 26px;
      width: 26px;
      left: 4px;
      bottom: 4px;
      background-color: white;
      -webkit-transition: 0.4s;
      transition: 0.4s;
      border-radius: 50%;
    }

    input:checked+.slider {
      background-color: #2196F3;
    }

    input:checked+.slider:before {
      -webkit-transform: translateX(26px);
      -ms-transform: translateX(26px);
      transform: translateX(26px);
    }
  </style>
</head>

<body class="dark-mode">

  <header id="header" class="header fixed-top" data-scrollto-offset="0">
    <div class="container-fluid d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center scrollto me-auto me-lg-0">
        <h1>MySPP<span>.</span></h1>
      </a>
      <nav id="navbar" class="navbar">
        <ul>

          <li><a class="nav-link scrollto" href="index.html#home">Home</a></li>
          <li><a class="nav-link scrollto" href="index.html#clients">Clients</a></li>
          <li><a class="nav-link scrollto" href="index.html#about">About</a></li>
          <li><a class="nav-link scrollto" href="bot.php">Bantuan</a></li>
        </ul>

        <i class="bi bi-list mobile-nav-toggle d-none"></i>
        <div class="dark-mode-toggle">
          <label class="switch">
            <input type="checkbox" id="dark-mode-toggle-checkbox">
            <span class="slider round"></span>
          </label>
          <span id="dark-mode-label">
            <span id="mode-icon">
              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                class="bi bi-brightness-high" viewBox="0 0 16 16">
                <path
                  d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z" />
              </svg>
            </span>
          </span>
        </div>
      </nav>
      <a class="btn-getstarted scrollto" href="login.php">Login</a>
    </div>
  </header>
  <div id="home">
    <section id="hero-animated" class="hero-animated d-flex align-items-center">
      <div class="container d-flex flex-column justify-content-center align-items-center text-center position-relative"
        data-aos="zoom-out">
        <img src="assets/img/hero-carousel/card1.svg" class="img-fluid animated">
        <h2>Welcome to <span>MySPP</span></h2>
        <p>Create Easy Payment School With Midtrans Gateaway</p>
        <div class="d-flex">
          <a href="login.php" class="btn-get-started scrollto">Get Started</a>
          <!-- <a href="" class="glightbox btn-watch-video d-flex align-items-center"><i class="bi bi-play-circle"></i><span>Register</span></a> -->
        </div>
      </div>
    </section>
  </div>

  <main id="main">
    <section id="featured-services" class="featured-services">
      <div class="container">

        <div class="row gy-4 d-flex justify-content-center">
          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out">
            <div class="service-item position-relative" id="service-item-1">
              <div class="icon"><i class="bi bi-cash-coin"></i></div>
              <h4><a href="" class="stretched-link">Pembayaran SPP</a></h4>
              <p>Memungkinkan pengguna untuk melakukan pembayaran SPP Secara Otomatis dan Mudah </p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="200">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-people"></i></div>
              <h4><a href="" class="stretched-link">Pengolahan Data Siswa</a></h4>
              <p>Memiliki fitur untuk mengelola data siswa, termasuk informasi pribadi, kelas, dan catatan pembayaran
                SPP</p>
            </div>
          </div>

          <div class="col-xl-3 col-md-6 d-flex" data-aos="zoom-out" data-aos-delay="400">
            <div class="service-item position-relative">
              <div class="icon"><i class="bi bi-calendar4-week icon"></i></div>
              <h4><a href="" class="stretched-link">Laporan Keuangan</a></h4>
              <p>Aplikasi dapat menghasilkan laporan keuangan yang dapat digunakan oleh pihak sekolah atau lembaga
                pendidikan untuk mengelola dan melacak dana SPP</p>
            </div>
          </div>
        </div>
      </div>
      </div>
    </section>

    <section id="clients" class="clients">
      <div class="section-header">
        <h2>Clients</h2>
      </div>
      <div class="container" data-aos="zoom-out">

        <div class="clients-slider swiper">
          <div class="swiper-wrapper align-items-center">
            <div class="swiper-slide"><img src="assets/img/clients/hangtuah.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/polije.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/jti.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/hangtuah.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/polije.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/jti.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/hangtuah.png" class="img-fluid" alt=""></div>
            <div class="swiper-slide"><img src="assets/img/clients/polije.png" class="img-fluid" alt=""></div>
          </div>
        </div>

      </div>
    </section>
    <section id="about" class="about">
      <div class="container" data-aos="fade-up">
        <div class="section-header">
          <h2>About</h2>
          <p>Aplikasi sederhana berbasis web yang dirancang untuk memudahkan proses pembayaran SPP oleh siswa atau orang
            tua/wali siswa kepada sekolah atau lembaga pendidikan..</p>
        </div>
      </div>
    </section>

    <footer id="footer" class="footer">
      <div class="footer-legal text-center">
        <div
          class="container d-flex flex-column flex-lg-row justify-content-center justify-content-lg-between align-items-center">
          <div class="d-flex flex-column align-items-center align-items-lg-start">
            <div class="copyright">
              &copy; Copyright <strong><span>MySPP</span></strong>. All Rights Reserved
            </div>

          </div>

          <div class="social-links order-first order-lg-last mb-3 mb-lg-0">
            <a href="https://www.linkedin.com/company/myspp" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div>
        </div>
      </div>
    </footer>
    <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i
        class="bi bi-arrow-up-short"></i></a>
    <div id="preloader"></div>

    <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="assets/vendor/aos/aos.js"></script>
    <script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="assets/vendor/php-email-form/validate.js"></script>
    <script src="assets/js/main.js"></script>

</body>
<script>
  const darkModeToggle = document.getElementById('dark-mode-toggle-checkbox');
  const darkModeLabel = document.getElementById('dark-mode-label');
  const modeIcon = document.getElementById('mode-icon');
  function enableDarkMode() {
    document.body.classList.add('dark-mode');
    modeIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-moon" viewBox="0 0 16 16">
      <path d="M6 .278a.768.768 0 0 1 .08.858 7.208 7.208 0 0 0-.878 3.46c0 4.021 3.278 7.277 7.318 7.277.527 0 1.04-.055 1.533-.16a.787.787 0 0 1 .81.316.733.733 0 0 1-.031.893A8.349 8.349 0 0 1 8.344 16C3.734 16 0 12.286 0 7.71 0 4.266 2.114 1.312 5.124.06A.752.752 0 0 1 6 .278zM4.858 1.311A7.269 7.269 0 0 0 1.025 7.71c0 4.02 3.279 7.276 7.319 7.276a7.316 7.316 0 0 0 5.205-2.162c-.337.042-.68.063-1.029.063-4.61 0-8.343-3.714-8.343-8.29 0-1.167.242-2.278.681-3.286z"/>
    </svg>`;
    localStorage.setItem('dark-mode', 'enabled');
  }
  function disableDarkMode() {
    document.body.classList.remove('dark-mode');
    modeIcon.innerHTML = `<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-brightness-high" viewBox="0 0 16 16">
      <path d="M8 11a3 3 0 1 1 0-6 3 3 0 0 1 0 6zm0 1a4 4 0 1 0 0-8 4 4 0 0 0 0 8zM8 0a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 0zm0 13a.5.5 0 0 1 .5.5v2a.5.5 0 0 1-1 0v-2A.5.5 0 0 1 8 13zm8-5a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2a.5.5 0 0 1 .5.5zM3 8a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1 0-1h2A.5.5 0 0 1 3 8zm10.657-5.657a.5.5 0 0 1 0 .707l-1.414 1.415a.5.5 0 1 1-.707-.708l1.414-1.414a.5.5 0 0 1 .707 0zm-9.193 9.193a.5.5 0 0 1 0 .707L3.05 13.657a.5.5 0 0 1-.707-.707l1.414-1.414a.5.5 0 0 1 .707 0zm9.193 2.121a.5.5 0 0 1-.707 0l-1.414-1.414a.5.5 0 0 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .707zM4.464 4.465a.5.5 0 0 1-.707 0L2.343 3.05a.5.5 0 1 1 .707-.707l1.414 1.414a.5.5 0 0 1 0 .708z"/>
    </svg>`;
    localStorage.setItem('dark-mode', 'disabled');
  }
  const prefersDarkMode = window.matchMedia('(prefers-color-scheme: dark)').matches;
  const storedMode = localStorage.getItem('dark-mode');

  if (storedMode === 'enabled' || (prefersDarkMode && storedMode !== 'disabled')) {
    enableDarkMode();
    darkModeToggle.checked = true;
  } else {
    disableDarkMode();
  }
  darkModeToggle.addEventListener('change', () => {
    if (darkModeToggle.checked) {
      enableDarkMode();
    } else {
      disableDarkMode();
    }
  });
</script>

<script>
  var cursor = document.querySelector(".cursor");
  var cursor2 = document.querySelector(".cursor2");
  document.addEventListener("mousemove", function (e) {
    cursor.style.cssText = cursor2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;";
  });

</script>

</html>