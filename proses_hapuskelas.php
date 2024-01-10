<?php
include 'koneksi.php';

$id = $_GET["id"];

$query = "DELETE FROM kelas WHERE id_kelas = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "i", $id);

if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Data berhasil dihapus.');window.location='kelas.php';</script>";
} else {
    die("Gagal menghapus data: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}

mysqli_stmt_close($stmt);
?>