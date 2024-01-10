<?php
include('koneksi.php');

if (isset($_POST['daritanggal']) && isset($_POST['sampaitanggal'])) {
	$daritanggal = $_POST['daritanggal'];
	$sampaitanggal = $_POST['sampaitanggal'];

	$query_pembayaran = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE tgl_bayar BETWEEN '$daritanggal' AND '$sampaitanggal'");
	$data_pembayaran = mysqli_fetch_all($query_pembayaran, MYSQLI_ASSOC);

	$total_pembayaran = 0;

	foreach ($data_pembayaran as $pembayaran) {
		$total_pembayaran += $pembayaran['jumlah_bayar'];
	}
	?>
	<!DOCTYPE html>
	<html lang="en">

	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		<title>Laporan Pembayaran SPP</title>
		<style>
			body {
				font-family: Arial, sans-serif;
				margin: 0;
				padding: 0;
				background-color: #f4f4f4;
			}

			.container {
				width: 80%;
				margin: 20px auto;
				background-color: #fff;
				padding: 20px;
				border-radius: 8px;
				box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
			}

			h2 {
				text-align: center;
				color: #333;
			}

			h3 {
				text-align: center;
				color: #333;
			}

			p {
				margin-bottom: 10px;
			}

			.school-info {
				display: flex;
				align-items: center;
				justify-content: center;
				margin-bottom: 20px;
			}

			.school-logo {
				max-width: 250px;
				margin-right: 10px;
			}

			table {
				width: 100%;
				border-collapse: collapse;
				margin-top: 20px;
			}

			th,
			td {
				border: 1px solid #ddd;
				padding: 8px;
				text-align: left;
			}

			th {
				background-color: #f2f2f2;
			}

			.total {
				margin-top: 20px;
				text-align: right;
			}
		</style>
	</head>

	<body>
		<div class="container">
			<div class="school-info">
				<img src="assets/img/logo-sd.png" alt="Logo Sekolah" class="school-logo">

			</div>
			<h2>LAPORAN PEMBAYARAN SPP</h2>
			<h3>SD HANG TUAH 9 CANDI</h3>

			<p>Dari Tanggal:
				<?= $daritanggal ?>
			</p>
			<p>Sampai Tanggal:
				<?= $sampaitanggal ?>
			</p>

			<table>
				<tr>
					<th>ID Pembayaran</th>
					<th>Tanggal Bayar</th>
					<th>NISN</th>
					<th>Bulan Dibayar</th>
					<th>Tahun Dibayar</th>
					<th>Jumlah Bayar</th>
					<th>Status Pembayaran</th>
				</tr>
				<?php foreach ($data_pembayaran as $pembayaran): ?>
					<tr>
						<td>
							<?= $pembayaran['id_pembayaran'] ?>
						</td>
						<td>
							<?= $pembayaran['tgl_bayar'] ?>
						</td>
						<td>
							<?= $pembayaran['nisn'] ?>
						</td>
						<td>
							<?= $pembayaran['bulan_dibayar'] ?>
						</td>
						<td>
							<?= $pembayaran['tahun_dibayar'] ?>
						</td>
						<td>
							<?= $pembayaran['jumlah_bayar'] ?>
						</td>
						<td>
							<?= ($pembayaran['status_pembayaran'] == '1' ? 'Lunas' : 'Belum Lunas') ?>
						</td>
					</tr>
				<?php endforeach; ?>
			</table>

			<div class="total">
				<p>Total Jumlah Pembayaran: Rp
					<?= number_format($total_pembayaran, 0, ',', '.') ?>
				</p>
			</div>
		</div>
	</body>
	<script>
		window.onload = function () {
			window.print();
		}
	</script>

	</html>
	<?php
} else {
	echo 'Tidak ada data yang dipilih.';
}
?>