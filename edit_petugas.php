<?php

include 'koneksi.php';
if (isset($_GET['id'])) {
  $id = ($_GET["id"]);

  $query = "SELECT * FROM petugas WHERE id_petugas='$id'";
  $result = mysqli_query($koneksi, $query);
  if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) .
      " - " . mysqli_error($koneksi));
  }
  $data = mysqli_fetch_assoc($result);
  if (!count($data)) {
    echo "<script>alert('Data tidak ditemukan pada database');window.location='petugas.php';</script>";
  }
} else {
  echo "<script>alert('Masukkan data id.');window.location='petugas.php';</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>EDIT PENGGUNA</title>

</head>

<body>

  <?php

  include('tampilan/header.php');
  include('tampilan/sidebar.php');
  include('tampilan/footer.php');
  ?>

  <div class="main-content bg-primary">
    <section class="section">
      <div class="section-header">
        <h1>EDIT PENGGUNA</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="petugas.php">Data Pengguna</a></div>
          <div class="breadcrumb-item text-primary">Edit Pengguna</div>
        </div>
      </div>
      <div class="card-body bg-white">

        <form class="wizard-content mt-2" method="post" action="proses_editpetugas.php">
          <div class="wizard-pane">
            <input name="id" value="<?php echo $data['id_petugas']; ?>" hidden />
            <div class="form-group row align-items-center">
              <label class="col-md-4 text-md-right text-black">USERNAME</label>
              <div class="col-lg-4 col-md-6">
                <input type="text" name="username" class="form-control" value="<?php echo $data['username']; ?>"
                  required="" />
              </div>
            </div>
            <div class="form-group row align-items-center">
              <label class="col-md-4 text-md-right text-black">PASSWORD</label>
              <div class="col-lg-4 col-md-6">
                <input type="text" name="password" class="form-control" value="<?php echo $data['password']; ?>"
                  required="" />
              </div>
            </div>
            <div class="form-group row align-items-center">
              <label class="col-md-4 text-md-right text-black">NAMA PENGGUNA</label>
              <div class="col-lg-4 col-md-6">
                <input type="text" name="nama_petugas" class="form-control" value="<?php echo $data['nama_petugas']; ?>"
                  required="" />
              </div>
            </div>
            <div class="form-group row align-items-center">
              <label class="col-md-4 text-md-right text-black">LEVEL</label>
              <div class="col-lg-4 col-md-6">
                <input type="text" name="level" class="form-control" value="<?php echo $data['level']; ?>"
                  required="" />
              </div>
            </div>
            <div class="form-group row">
              <div class="col-md-4"></div>
              <div class="col-lg-4 col-md-6 text-right">
                <button type="submit" class="btn btn-icon icon-right btn-primary">UBAH<i class=""></i></button>
              </div>
            </div>
          </div>
        </form>
      </div>
  </div>
  </div>
  </div>
  </div>
  </section>
  </div>

  </div>
  </div>