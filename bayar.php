<!DOCTYPE html>
<html>

<head>
  <title>Metode Pembayaran</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <link rel="shortcut icon" href="assets/img/myspp-logo.png">
</head>

<?php
include('koneksi.php');
include('tampilan/header.php');
include('tampilan/footer.php');
include('tampilan/sidebar.php');

$order_id = $_GET['order_id'];
$nisn = $_GET['nisn'];
$email = $_GET['email'];
$jumlah_bayar = $_GET['jumlah_bayar'];
?>

<body>
  <div class="main-content bg-primary">
    <section class="section">
      <div class="section-header">
        <h1>KONFIRMASI PEMBAYARAN</h1>
        <div class="section-header-breadcrumb">
          <div class="breadcrumb-item active"><a href="bayar.php">Konfirmasi Pembayaran</a></div>
        </div>
      </div>
      <div class="card-body bg-white">

        <form action="prosespayment.php" method="POST">
          <div class="mb-3">
            <label for="order_id" class="form-label">Order ID</label>
            <input type="text" class="form-control" id="order_id" name="order_id" value="<?php echo $order_id; ?>"
              required="">
          </div>

          <div class="mb-3">
            <label for="nisn" class="form-label">NISN</label>
            <input type="text" class="form-control" id="nisn" name="nisn" value="<?php echo $nisn; ?>" required="">
          </div>
          <div class="mb-3">
            <label for="email" class="form-label">EMAIL</label>
            <input type="email" class="form-control" id="email" name="email" value="<?php echo $email; ?>" required="">
          </div>
          <div class="mb-3">
            <label for="jumlah_bayar" class="form-label">Jumlah Bayar</label>
            <input type="text" class="form-control" id="jumlah_bayar" name="jumlah_bayar"
              value="<?php echo $jumlah_bayar; ?>" required="">
          </div>

          <button type="submit" class="btn btn-primary">KONFIRMASI</button>
        </form>
      </div>
    </section>
  </div>
</body>

</html>