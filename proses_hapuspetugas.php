<?php
include 'koneksi.php';
$id = $_GET["id"];

$query = "DELETE FROM petugas WHERE id_petugas='$id' ";
$hasil_query = mysqli_query($koneksi, $query);

if (!$hasil_query) {
  die("Gagal menghapus data: " . mysqli_errno($koneksi) .
    " - " . mysqli_error($koneksi));
} else {
  echo "<script>alert('Data berhasil dihapus.');window.location='petugas.php';</script>";
}