<?php
session_start();

if ($_SESSION['level'] == "") {
  header("location:index.php?pesan=belummasuk");
}

?>
<?php
if ($_SESSION['level'] == "admin") {
  ?>





    <body>

      <div id="app">
        <div class="main-wrapper">
          <div class="navbar-bg"></div>
          <nav class="navbar navbar-expand-lg main-navbar">
            <form class="form-inline mr-auto">
              <ul class="navbar-nav mr-3">
                <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a></li>
              </ul>
            </form>
            <ul class="navbar-nav navbar-right">
              <li class="dropdown"><a href="#" data-toggle="dropdown"
                  class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                  <img alt="image" src="assets/img/user3.png" class="rounded-circle mr-1">
                  Halo <b>
                    <?php echo $_SESSION['username']; ?>
                  </b> Anda adalah <b>
                    <?php echo $_SESSION['level']; ?>
                  </b></a>
                <div class="dropdown-menu dropdown-menu-right">
                  <div class="dropdown-divider"></div>
                  <a href="logout.php" class="dropdown-item has-icon text-danger">
                    <i class="fas fa-sign-out-alt"></i> Logout
                  </a>
                </div>
              </li>
            </ul>
          </nav>
          <div class="main-sidebar">
            <aside id="sidebar-wrapper">
              <div class="sidebar-brand">

                <img src="assets/img/myspp-logo.png" width="30" class="shadow-light rounded-circle">
                <a class="text">MySPP</a>
              </div>
              <div class="sidebar-brand sidebar-brand-sm">
                <img src="assets/img/myspp-logo.png" width="30" class="shadow-light rounded-circle">
              </div>
              <ul class="sidebar-menu">
                <li>
                  <a href="dashboard.php" class="nav-link"><i class="	fas fa-chart-bar"></i><span>DASHBOARD</span></a>
                </li>
                <li><a class="nav-link" href="petugas.php"><i class="fas fa-users-cog"></i> <span>PETUGAS</span></a></li>
                <li><a class="nav-link" href="siswa.php"><i class="	fas fa-user-friends"></i> <span>SISWA</span></a></li>
                <li><a class="nav-link" href="spp.php"><i class="fas fa-database"></i> <span>DATA SPP</span></a></li>
                <li><a class="nav-link" href="kelas.php"><i class="fas fa-database"></i> <span>DATA KELAS</span></a></li>
                <li><a class="nav-link" href="transaksi.php"><i class="fas fa-money-check-alt"></i>
                    <span>TRANSAKSI</span></a></li>
                <li><a class="nav-link" href="laporan.php"><i class="far fa-calendar-alt"></i> <span>LAPORAN</span></a>
                </li>
            </aside>

          </div>

          <?php
} else if ($_SESSION['level'] == "petugas") {

  ?>

            <div id="app">
              <div class="main-wrapper">

                <div class="navbar-bg"></div>
                <nav class="navbar navbar-expand-lg main-navbar">
                  <form class="form-inline mr-auto">
                    <ul class="navbar-nav mr-3">
                      <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                      </li>
                    </ul>
                  </form>
                  <ul class="navbar-nav navbar-right">
                    <li class="dropdown"><a href="#" data-toggle="dropdown"
                        class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                        <img alt="image" src="assets/img/user3.png" class="rounded-circle mr-1">
                        Halo <b>
                        <?php echo $_SESSION['username']; ?>
                        </b> Anda adalah <b>
                        <?php echo $_SESSION['level']; ?>
                        </b></a>
                      <div class="dropdown-menu dropdown-menu-right">
                        <div class="dropdown-divider"></div>
                        <a href="logout.php" class="dropdown-item has-icon text-danger">
                          <i class="fas fa-sign-out-alt"></i> Logout
                        </a>

                      </div>

                    </li>

                  </ul>

                </nav>
                <div class="main-sidebar">
                  <aside id="sidebar-wrapper">
                    <div class="sidebar-brand">
                      <img src="assets/img/myspp-logo.png" width="30" class="shadow-light rounded-circle">
                      <a>MySPP</a>
                    </div>
                    <div class="sidebar-brand sidebar-brand-sm">
                      <img src="assets/img/myspp-logo.png" width="30" class="shadow-light rounded-circle">
                    </div>
                    <ul class="sidebar-menu">
                      <ul class="sidebar-menu">
                        <li>
                          <a href="dashboard.php" class="nav-link"><i
                              class="fas fa-chart-bar"></i><span>DASHBOARD</span></a>
                        </li>
                        <li><a class="nav-link" href="transaksi.php"><i class="fas fa-money-check-alt"></i>
                            <span>TRANSAKSI</span></a></li>
                        <li><a class="nav-link" href="laporan.php"><i class="far fa-calendar-alt"></i>
                            <span>LAPORAN</span></a></li>
                  </aside>

                </div>


              <?php
} else if ($_SESSION['level'] == "siswa") {
  ?>

                  <div id="app">
                    <div class="main-wrapper">
                      <div class="navbar-bg"></div>
                      <nav class="navbar navbar-expand-lg main-navbar">
                        <form class="form-inline mr-auto">
                          <ul class="navbar-nav mr-3">
                            <li><a href="#" data-toggle="sidebar" class="nav-link nav-link-lg"><i class="fas fa-bars"></i></a>
                            </li>
                          </ul>
                        </form>
                        <ul class="navbar-nav navbar-right">
                          <li class="dropdown"><a href="#" data-toggle="dropdown"
                              class="nav-link dropdown-toggle nav-link-lg nav-link-user">
                              <img alt="image" src="assets/img/user3.png" class="rounded-circle mr-1">
                              Halo <b>
                            <?php echo $_SESSION['username']; ?>
                              </b> Anda adalah <b>
                            <?php echo $_SESSION['level']; ?>
                              </b></a>
                            <div class="dropdown-menu dropdown-menu-right">
                              <div class="dropdown-divider"></div>
                              <a href="logout.php" class="dropdown-item has-icon text-danger">
                                <i class="fas fa-sign-out-alt"></i> Logout
                              </a>
                            </div>
                          </li>
                        </ul>
                      </nav>
                      <div class="main-sidebar">
                        <aside id="sidebar-wrapper">
                          <div class="sidebar-brand">
                            <img src="assets/img/myspp-logo.png" width="30" class="shadow-light rounded-circle">
                            <a>MySPP</a>
                          </div>
                          <div class="sidebar-brand sidebar-brand-sm">
                            <img src="assets/img/myspp-logo.png" width="30" class="shadow-light rounded-circle">
                          </div>
                          <ul class="sidebar-menu">
                            <ul class="sidebar-menu">
                              <li class="menu-header"></li>
                              <li><a class="nav-link" href="history.php"><i class="fas fa-file-invoice-dollar"></i>
                                  <span>HISTORY PEMBAYARAN</span></a></li>

                        </aside>

                      </div>

                    </div>

        </body>

        <script>

          var cursor = document.querySelector(".cursor");
          var cursor2 = document.querySelector(".cursor2");
          document.addEventListener("mousemove", function (e) {
            cursor.style.cssText = cursor2.style.cssText = "left: " + e.clientX + "px; top: " + e.clientY + "px;";
          });

        </script>
    <?php
} else {
  header("location:index.php?pesan=gagal");
}
