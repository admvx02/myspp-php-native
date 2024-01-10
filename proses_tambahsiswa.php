<?php
include 'koneksi.php';

$nisn = $_POST['nisn'];
$nis = $_POST['nis'];
$nama = $_POST['nama'];
$id_kelas = $_POST['id_kelas'];
$alamat = $_POST['alamat'];
$tahun = $_POST['tahun'];


$query = "INSERT INTO siswa VALUES ('$nisn', '$nis','$nama', '$id_kelas', '$alamat',  '$tahun')";
$result = mysqli_query($koneksi, $query);

if (!$result) {
  die("Query gagal dijalankan: " . mysqli_errno($koneksi) .
    " - " . mysqli_error($koneksi));
} else {
  $query_select = "SELECT * FROM siswa";
  $result_select = mysqli_query($koneksi, $query_select);
  echo "<script>alert('Data berhasil ditambah.');window.location='siswa.php';</script>";
}

?>