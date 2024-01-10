<?php

include 'koneksi.php';
if (isset($_GET['id'])) {
  $id = ($_GET["id"]);
  $query = "SELECT * FROM spp WHERE id_spp='$id'";
  $result = mysqli_query($koneksi, $query);

  if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) .
      " - " . mysqli_error($koneksi));
  }

  $data = mysqli_fetch_assoc($result);
  if (!count($data)) {
    echo "<script>alert('Data tidak ditemukan pada database');window.location='spp.php';</script>";
  }
} else {
  echo "<script>alert('Masukkan data id.');window.location='spp.php';</script>";
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>EDIT SPP</title>

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
        <h1>EDIT SPP</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
          <div class="breadcrumb-item"><a href="spp.php">Data SPP</a></div>
          <div class="breadcrumb-item text-primary">Edit SPP</div>
        </div>
      </div>

      <div class="card-body bg-white">
        <form class="wizard-content mt-2" method="post" action="proses_editspp.php">
          <div class="wizard-pane">
            <input name="id" value="<?php echo $data['id_spp']; ?>" hidden />
            <div class="form-group row align-items-center">
              <label class="col-md-4 text-md-right text-black">TAHUN</label>
              <div class="col-lg-4 col-md-6">
                <input type="text" name="tahun" class="form-control" value="<?php echo $data['tahun']; ?>"
                  disabled="disabled" />
              </div>
            </div>
            <div class="form-group row align-items-center">
              <label class="col-md-4 text-md-right text-black">NOMINAL</label>
              <div class="col-lg-4 col-md-6">
                <input type="text" name="nominal" class="form-control" value="<?php echo $data['nominal']; ?>"
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