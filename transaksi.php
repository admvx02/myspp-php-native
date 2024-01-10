<?php
include('koneksi.php');

?>
<!DOCTYPE html>
<html>
<link href="assets/vendor/aos/aos.css" rel="stylesheet">

<head>
  <title>Transaksi</title>
  <link rel="shortcut icon" href="assets/img/myspp-logo.png">
  <link href="css/scroll-bar.css" rel="stylesheet">

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
        <h1>TRANSAKSI</h1>

        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="dahsboard.php">Dashboard</a></div>
          <div class="breadcrumb-item text-primary">Transaksi</div>
        </div>
      </div>
      <div class="card-body bg-white">
        <form action="proses_transaksi.php" method="post" data-aos="fade-in" data-aos-delay="300">
          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">ID Petugas</span>
            </div>
            <input type="text" name="id_petugas" class="form-control" placeholder="Masukkan ID Petugas"
              aria-label="Masukkan id petugas" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">NISN</span>
            </div>
            <input type="text" name="nisn" class="form-control" placeholder="Masukkan NISN" aria-label="Nisn"
              aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Tanggal Bayar</span>
            </div>
            <input type="date" name="tgl_bayar" class="form-control" placeholder="Tanggal Bayar" aria-label="tanggal"
              aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Bulan Bayar</label>
            </div>
            <select class="custom-select" name="bulan_dibayar" id="inputGroupSelect01">
              <option selected></option>
              <option value="Januari">Januari</option>
              <option value="Februari">Februari</option>
              <option value="Maret">Maret</option>
              <option value="April">April</option>
              <option value="Mei">Mei</option>
              <option value="Juni">Juni</option>
              <option value="Juli">Juli</option>
              <option value="Agustus">Agustus</option>
              <option value="September">September</option>
              <option value="Oktober">Oktober</option>
              <option value="November">November</option>
              <option value="Desember">Desember</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <label class="input-group-text" for="inputGroupSelect01">Tahun Bayar</label>
            </div>
            <select class="custom-select" name="tahun_dibayar" id="inputGroupSelect01">
              <option selected></option>
              <option value="2019">2019</option>
              <option value="2020">2020</option>
              <option value="2021">2021</option>
              <option value="2022">2022</option>
              <option value="2023">2023</option>
              <option value="2024">2024</option>
              <option value="2025">2025</option>
            </select>
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">ID SPP</span>
            </div>
            <input type="text" name="id_spp" class="form-control" placeholder="Masukkan ID SPP" aria-label="masukkan id"
              aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Jumlah</span>
            </div>
            <input type="text" name="jumlah_bayar" class="form-control" placeholder="Jumlah Bayar"
              aria-label="masukkan nominal" aria-describedby="basic-addon1">
          </div>

          <div class="input-group mb-3">
            <div class="input-group-prepend">
              <span class="input-group-text" id="basic-addon1">Email</span>
            </div>
            <input type="email" name="email" class="form-control" placeholder="Masukkan Email" aria-label="Nisn"
              aria-describedby="basic-addon1">
          </div>

          <div class="d-flex justify-content-left">
            <button type="submit" class="btn btn-primary">TAMBAH TRANSAKSI</button>


        </form>

      </div>
  </div>

  <br />


  <div class="card-body bg-white">
    <form action="" method="get">

      <div class="form-group">
        <div class="input-group">
          <input type="text" class="form-control" name="nisn" placeholder="Masukkan NISN Siswa" required>
          <div class="input-group-append">
            <button class="btn btn-primary" type="submit" name="cari">
              <i class="fa fa-search"></i> Cari
            </button>
          </div>
        </div>
      </div>
    </form>


    <?php
    if (isset($_GET['nisn']) && $_GET['nisn'] != '') {
      $query_siswa = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$_GET[nisn]'");
      $data_siswa = mysqli_fetch_array($query_siswa);

      if ($data_siswa) {
        ?>
        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID KELAS</th>
              <th scope="col">NISN</th>
              <th scope="col">NAMA SISWA</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <?php echo $data_siswa['id_kelas']; ?>
              </td>
              <td>
                <?php echo $data_siswa['nisn']; ?>
              </td>
              <td>
                <?php echo $data_siswa['nama']; ?>
              </td>
            </tr>
          </tbody>
        </table>

        <table class="table table-striped">
          <thead>
            <tr>
              <th scope="col">ID Petugas</th>
              <th scope="col">NISN</th>
              <th scope="col">Tanggal Bayar</th>
              <th scope="col">Bulan Bayar</th>
              <th scope="col">Tahun Bayar</th>
              <th scope="col">ID SPP</th>
              <th scope="col">Jumlah</th>
              <th scope="col">Status</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $query_pembayaran = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE nisn='$data_siswa[nisn]' ORDER BY bulan_dibayar ASC");

            while ($data_pembayaran = mysqli_fetch_array($query_pembayaran)) {
              ?>
              <tr>
                <td>
                  <?php echo $data_pembayaran['id_petugas']; ?>
                </td>
                <td>
                  <?php echo $data_pembayaran['nisn']; ?>
                </td>
                <td>
                  <?php echo $data_pembayaran['tgl_bayar']; ?>
                </td>
                <td>
                  <?php echo $data_pembayaran['bulan_dibayar']; ?>
                </td>
                <td>
                  <?php echo $data_pembayaran['tahun_dibayar']; ?>
                </td>
                <td>
                  <?php echo $data_pembayaran['id_spp']; ?>
                </td>
                <td>
                  <?php echo $data_pembayaran['jumlah_bayar']; ?>
                </td>

                <td>
                  <?php
                  if ($data_pembayaran['status_pembayaran'] == '1') {
                    echo '<span class="btn btn-success mt-2">Lunas</span>';
                    echo '<a class="btn btn-info mt-2" href="cetak-kwitansi.php?id=' . $data_pembayaran['id_pembayaran'] . '" target="_blank"><i class="bi bi-printer"></i> Cetak</a>';
                  } else {
                    echo '<a class="btn btn-primary" href="bayar.php?id=' . $data_pembayaran['id_pembayaran'] . '&order_id=' . $data_pembayaran['order_id'] . '&nisn=' . $data_pembayaran['nisn'] . '&email=' . $data_pembayaran['email'] . '&jumlah_bayar=' . $data_pembayaran['jumlah_bayar'] . '">Bayar</a>';

                  }
                  ?>
                </td>
              </tr>
              <?php
            }
            ?>
          </tbody>

        </table>
        <?php
      } else {
        echo "Data siswa tidak ditemukan.";
      }
    }
    ?>



    </tbody>

    </table>
    <?php

    ?>
  </div>
  </div>
  </div>
  </section>
  </div>
  </div>
  </div>

  </div>
</body>

<script src="assets/vendor/aos/aos.js"></script>
<script>
  AOS.init();
</script>

</html>