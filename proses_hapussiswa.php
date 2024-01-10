<?php
include 'koneksi.php';

$id = $_GET["id"];

if (!is_numeric($id)) {
    die("ID tidak valid.");
}
$query = "DELETE FROM siswa WHERE nisn = ?";
$stmt = mysqli_prepare($koneksi, $query);
mysqli_stmt_bind_param($stmt, "s", $id);

if (mysqli_stmt_execute($stmt)) {
    echo "<script>alert('Data berhasil dihapus.');window.location='siswa.php';</script>";
} else {
    die("Gagal menghapus data: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}
mysqli_stmt_close($stmt);

?>