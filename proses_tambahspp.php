<?php
include 'koneksi.php';

$tahun = $_POST['tahun'];
$nominal = $_POST['nominal'];

$query = "INSERT INTO spp (tahun, nominal) VALUES ('$tahun', '$nominal')";
$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
} else {
    echo "<script>alert('Data berhasil ditambah.');window.location='spp.php';</script>";
}
?>