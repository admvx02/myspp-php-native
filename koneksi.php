<?php
$koneksi = mysqli_connect("localhost", "root", "root", "myspp-native");

if (mysqli_connect_errno()) {
	echo "Koneksi database gagal : " . mysqli_connect_error();
}

?>