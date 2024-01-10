<?php

include 'koneksi.php';

$id = $_POST['id'];
$nominal = $_POST['nominal'];

$query = "UPDATE spp SET nominal = '$nominal' WHERE id_spp = '$id'";
$result = mysqli_query($koneksi, $query);
if (!$result) {
  die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
    " - " . mysqli_error($koneksi));
} else {
  echo "<script>alert('Data berhasil diubah.');window.location='spp.php';</script>";
}

?>