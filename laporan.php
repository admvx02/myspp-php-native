<?php
include('koneksi.php');

?>
<!DOCTYPE html>
<html>

<head>
  <title>Laporan</title>
  <link rel="shortcut icon" href="assets/img/myspp-logo.png">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
</head>

<body>

  <?php

  include('tampilan/header.php');
  include('tampilan/footer.php');
  include('tampilan/sidebar.php');
  ?>
  <div class="main-content bg-primary">
    <section class="section">
      <div class="section-header" data-aos="zoom-out" data-aos-offset="250">
        <h1>Laporan</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item text-primary">Laporan</div>
        </div>
      </div>
      <div class="card-body bg-white">


        <form method="POST" action="cetak-laporan.php" enctype="multipart/form-data" data-aos="fade-in" data-aos-delay="300">
          <div>
            <label>Dari Tanggal</label>
            <input type="date" name="daritanggal" class="form-control" autofocus="" required="" />
          </div>
          <div>
            <label>Sampai Tanggal</label>
            <input type="date" name="sampaitanggal" class="form-control" required="" />
          </div>
          <br>
          <div class="col-lg- col-md-6 text-left">
            <button type="submit" class="btn btn-icon btn-icon icon-right btn-primary">CETAK<i class=""></i></button>
          </div>

      </div>
    </section>
    </form>
</body>
<script src="assets/vendor/aos/aos.js"></script>
<script>
  AOS.init();
</script>

</html>