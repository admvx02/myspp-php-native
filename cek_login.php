<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from petugas where username='$username' and password='$password'");
$cek = mysqli_num_rows($login);

if ($cek > 0) {
    $data = mysqli_fetch_assoc($login);
    if ($data['level'] == "admin") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "admin";

        header("location:dashboard.php");
        exit();
    } else if ($data['level'] == "petugas") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "petugas";
        header("location:dashboard.php");
        exit();
    } else if ($data['level'] == "siswa") {
        $_SESSION['username'] = $username;
        $_SESSION['level'] = "siswa";
        header("location:history.php");
        exit();
    } else {
        $_SESSION['login_message'] = "Login gagal. Level pengguna tidak valid.";
        header("location:login.php");
        exit();
    }
} else {
    $_SESSION['login_message'] = "Login gagal. Maaf, data yang anda inputkan salah! silahkan coba lagi.";
    header("location:login.php");
    exit();
}
?>