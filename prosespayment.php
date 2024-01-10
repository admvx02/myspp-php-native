<?php

include "koneksi.php";

$order_id = isset($_POST['order_id']) ? $_POST['order_id'] : '';
$nisn = isset($_POST['nisn']) ? $_POST['nisn'] : '';
$email = isset($_POST['email']) ? $_POST['email'] : '';
$jumlah_bayar = isset($_POST['jumlah_bayar']) ? $_POST['jumlah_bayar'] : '';

$status = 1;

$get_id_pembayaran_query = mysqli_prepare($koneksi, "SELECT id_pembayaran FROM pembayaran WHERE order_id = ?");
mysqli_stmt_bind_param($get_id_pembayaran_query, 's', $order_id);
mysqli_stmt_execute($get_id_pembayaran_query);
mysqli_stmt_bind_result($get_id_pembayaran_query, $id_pembayaran);

if (mysqli_stmt_fetch($get_id_pembayaran_query)) {

  mysqli_stmt_close($get_id_pembayaran_query);

  $update_status_query = mysqli_prepare($koneksi, "UPDATE pembayaran SET status_pembayaran = ? WHERE id_pembayaran = ?");
  mysqli_stmt_bind_param($update_status_query, 'ii', $status, $id_pembayaran);

  if (mysqli_stmt_execute($update_status_query)) {
    header("location: ./Payment/examples/snap/checkout-process-simple-version.php?order_id=$order_id");
    exit;

  } else {
    echo "Error updating payment status: " . mysqli_error($koneksi);
  }

} else {
  echo "Error: id_pembayaran not found for order_id $order_id";
}

?>