<?php
include 'koneksi.php';

$id_pembayaran = $_GET['id'];
$query_pembayaran = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE id_pembayaran='$id_pembayaran'");
$data_pembayaran = mysqli_fetch_array($query_pembayaran);

$nisn = $data_pembayaran['nisn'];
$query_siswa = mysqli_query($koneksi, "SELECT nama FROM siswa WHERE nisn='$nisn'");
$data_siswa = mysqli_fetch_array($query_siswa);
$nama_siswa = $data_siswa['nama'];

$tanggal_bayar = date('d-m-Y', strtotime($data_pembayaran['tgl_bayar']));

$nominal_bayar = "Rp " . number_format($data_pembayaran['jumlah_bayar'], 0, ',', '.');
  
echo '<html>
<head>
  <style>
    body {
      font-family: Arial, sans-serif;
    }

    .container {
      width: 600px;
      margin: 20px auto;
    }

    h1 {
      text-align: center;
    }

    .header {
      text-align: center;
      margin-bottom: 20px;
    }

    .logo {
      max-width: 100%;
      height: auto;
      margin-bottom: 10px;
    }

    .alamat {
      margin-bottom: 20px;
    }

    table {
      width: 100%;
      border-collapse: collapse;
      margin-bottom: 20px;
    }

    th, td {
      border: 1px solid #ddd;
      padding: 8px;
      text-align: left;
    }

    .ttd {
      margin-top: 20px;
      float: right;
    }

    .ttd p {
      margin: 5px 0;
    }
  </style>
</head>
<body>
  <div class="container">
    <div class="header">
      <img src="assets/img/logo-sd.png" alt="Logo Sekolah" class="logo" style="width: 200px;">
      <h2>KWITANSI PEMBAYARAN SPP</h2>
      <h3>SD HANG TUAH 9 CANDI</h3>
      <div class="alamat">
        <p><b>Alamat:</b> Perumahan TNI AL, Jl. Kalasan 7 No.16, Kayen, Kedungkendo, Kec. Candi, Kabupaten Sidoarjo, Jawa Timur 61217</p>
      </div>
    </div>

    <table>
      <tr>
        <th>ID Pembayaran</th>
        <td>' . $data_pembayaran['id_pembayaran'] . '</td>
      </tr>
      <tr>
        <th>Tanggal Bayar</th>
        <td>' . $tanggal_bayar . '</td>
      </tr>
      <tr>
        <th>NISN</th>
        <td>' . $data_pembayaran['nisn'] . '</td>
      </tr>
      <tr>
        <th>Nama Siswa</th>
        <td>' . $nama_siswa . '</td>
      </tr>
      <tr>
        <th>Bulan Dibayar</th>
        <td>' . $data_pembayaran['bulan_dibayar'] . '</td>
      </tr>
      <tr>
        <th>Tahun Dibayar</th>
        <td>' . $data_pembayaran['tahun_dibayar'] . '</td>
      </tr>
      <tr>
        <th>Jumlah Bayar</th>
        <td>' . $nominal_bayar . '</td>
      </tr>
      <tr>
        <th>Status Pembayaran</th>
        <td>' . ($data_pembayaran['status_pembayaran'] == '1' ? 'Lunas' : 'Belum Lunas') . '</td>
      </tr>
    </table>

    <!-- Kolom Tanda Tangan -->
    <div class="ttd">
      <p>Sidoarjo, ' . $tanggal_bayar . '</p>
      <br>
      <br>
      <br>
      <p>( ------------------------- )</p>
    </div>
  </div>


</body>
<script>
window.onload = function () {
  window.print();
}
</script>
</html>';
?>
