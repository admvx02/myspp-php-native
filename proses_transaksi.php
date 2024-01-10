<?php
include 'koneksi.php';

$id_petugas = $_POST['id_petugas'];
$nisn = $_POST['nisn'];
$order_id = rand();
$tgl_bayar = $_POST['tgl_bayar'];
$bulan_dibayar = $_POST['bulan_dibayar'];
$tahun_dibayar = $_POST['tahun_dibayar'];
$id_spp = $_POST['id_spp'];
$jumlah_bayar = $_POST['jumlah_bayar'];
$email = $_POST['email'];

if (
    empty($id_petugas) || empty($nisn) || empty($tgl_bayar) ||
    empty($bulan_dibayar) || empty($tahun_dibayar) || empty($id_spp) ||
    empty($jumlah_bayar)
) {
    echo "<script>alert('Semua field harus diisi.');window.location='transaksi.php';</script>";
} else {

    $query = "INSERT INTO pembayaran (id_petugas, nisn, order_id, tgl_bayar, bulan_dibayar, tahun_dibayar, id_spp, jumlah_bayar, email)
              VALUES ('$id_petugas', '$nisn', '$order_id', '$tgl_bayar', '$bulan_dibayar', '$tahun_dibayar', '$id_spp', '$jumlah_bayar' , '$email')";

    $result = mysqli_query($koneksi, $query);

    if (!$result) {
        die("Query gagal dijalankan: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
    } else {
        $id_pembayaran_baru = mysqli_insert_id($koneksi);



        echo "<script>alert('Data berhasil ditambahkan');window.location='transaksi.php';</script>";
    }
}
?>