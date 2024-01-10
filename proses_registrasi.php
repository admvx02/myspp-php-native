<?php

include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];
$nama_petugas = $_POST['nama_petugas'];
$level = $_POST['level'];

if ($level === 'siswa') {
    $query = "INSERT INTO petugas (username, password, nama_petugas, level) VALUES ('$username', '$password', '$nama_petugas', '$level')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='login.php';</script>";
    }
} else {
    echo "<script>alert('Anda tidak memiliki izin untuk menambahkan petugas atau admin.');window.location='login.php';</script>";
}
?>