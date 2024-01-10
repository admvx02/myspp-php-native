<?php

include 'koneksi.php';
  if (isset($_GET['id'])) {
    $id = ($_GET["id"]);
    $query = "SELECT * FROM kelas WHERE id_kelas='$id'";
    $result = mysqli_query($koneksi, $query);
    if(!$result){
      die ("Query Error: ".mysqli_errno($koneksi).
         " - ".mysqli_error($koneksi));
    }
    $data = mysqli_fetch_assoc($result);
       if (!count($data)) {
          echo "<script>alert('Data tidak ditemukan pada database');window.location='kelas.php';</script>";
       }
  } else {
    echo "<script>alert('Masukkan data id.');window.location='kelas.php';</script>";
  }         
  ?>
<!DOCTYPE html>
<html>
  <head>
    <title>Edit KELAS</title>
   
  </head>
<body>
 
  <?php
  
  include ('tampilan/header.php');
  include ('tampilan/sidebar.php');
  include ('tampilan/footer.php');
?>

<div class="main-content bg-primary">
        <section class="section">
          <div class="section-header">
            <h1>EDIT KELAS</h1>
            <div class="section-header-breadcrumb">
              <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
              <div class="breadcrumb-item"><a href="kelas.php">Data Kelas</a></div>
              <div class="breadcrumb-item text-primary">Edit Kelas</div>
            </div>
          </div>
                  <div class="card-body bg-white">
                    <form class="wizard-content mt-2" method="post" action="proses_editkelas.php">
                      <div class="wizard-pane">
                        <input name="id" value="<?php echo $data['id_kelas']; ?>"  hidden />
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-black">NAMA KELAS</label>
                          <div class="col-lg-4 col-md-6">
                            <input type="text" name="nama_kelas" class="form-control" value="<?php echo $data['nama_kelas']; ?>" required=""/>
                          </div>
                        </div>
                        <div class="form-group row align-items-center">
                          <label class="col-md-4 text-md-right text-black"> KATEGORI</label>
                          <div class="col-lg-4 col-md-6">
                              <input type="text" name="kategori" class="form-control" value="<?php echo $data['kategori']; ?>" required=""/>
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