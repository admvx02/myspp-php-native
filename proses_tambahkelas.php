<?php

include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama_kelas = $_POST['nama_kelas'];
    $kategori = $_POST['kategori'];

    if (!$koneksi) {
        die("Koneksi database gagal: " . mysqli_connect_error());
    }
    $query = "INSERT INTO kelas (nama_kelas, kategori) VALUES ('$nama_kelas', '$kategori')";
    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        echo "<script>alert('Data berhasil ditambah.');window.location='kelas.php';</script>";
    }
    mysqli_close($koneksi);
}
?>