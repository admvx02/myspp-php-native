<!DOCTYPE html>
<html>

<head>
    <title>TRANSAKSI</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/img/myspp-logo.png">
</head>

<body>
    <?php
    include('koneksi.php');
    include('tampilan/header.php');
    include('tampilan/footer.php');
    include('tampilan/sidebar.php');
    ?>

    <div class="main-content bg-primary">

        <section class="section">

            <div class="section-header">
                <h1>HISTORY</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="history.php">History</a></div>
                </div>
            </div>
            <div class="card-body bg-white">
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>History Pembayaran</h4>
                                <div class="card-header-form"></div>
                            </div>
                            <form action="" method="get">
                                <div class="form-group">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="nisn"
                                            placeholder="Masukkan NISN Anda" required>
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="submit" name="cari">
                                                <i class="fa fa-search"></i> Cari
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                            <?php
                            if (isset($_GET['nisn']) && $_GET['nisn'] != '') {
                                $query = mysqli_query($koneksi, "SELECT * FROM siswa WHERE nisn='$_GET[nisn]'");
                                $data = mysqli_fetch_array($query);
                                $nisn = $data['nisn'];
                                ?>

                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">NISN</th>
                                            <th scope="col">ID KELAS</th>
                                            <th scope="col">NAMA SISWA</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <td>
                                            <?php echo $data['id_kelas']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nisn']; ?>
                                        </td>
                                        <td>
                                            <?php echo $data['nama']; ?>
                                        </td>
                                    </tbody>
                                </table>
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th scope="col">ID Petugas</th>
                                            <th scope="col">NISN</th>
                                            <th scope="col">Tanggal Bayar</th>
                                            <th scope="col">Bulan Bayar</th>
                                            <th scope="col">Tahun Bayar</th>
                                            <th scope="col">ID SPP</th>
                                            <th scope="col">Jumlah</th>
                                            <th scope="col">Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $query = mysqli_query($koneksi, "SELECT * FROM pembayaran WHERE nisn='$data[nisn]' ORDER BY bulan_dibayar ASC");
                                        while ($data_pembayaran = mysqli_fetch_array($query)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $data_pembayaran['id_petugas']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_pembayaran['nisn']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_pembayaran['tgl_bayar']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_pembayaran['bulan_dibayar']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_pembayaran['tahun_dibayar']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_pembayaran['id_spp']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $data_pembayaran['jumlah_bayar']; ?>
                                                </td>
                                                <td>
                                                    <?php
                                                    if ($data_pembayaran['status_pembayaran'] == '1') {
                                                        echo '<span class="btn btn-success mt-2">Lunas</span>';
                                                        echo '<a class="btn btn-info mt-2" href="cetak-kwitansi.php?id=' . $data_pembayaran['id_pembayaran'] . '" target="_blank"><i class="bi bi-printer"></i> Cetak</a>';
                                                    } else {
                                                        echo '<a class="btn btn-primary" href="bayar.php?id=' . $data_pembayaran['id_pembayaran'] . '&order_id=' . $data_pembayaran['order_id'] . '&nisn=' . $data_pembayaran['nisn'] . '&email=' . $data_pembayaran['email'] . '&jumlah_bayar=' . $data_pembayaran['jumlah_bayar'] . '">Bayar</a>';
                                                    }
                                                    ?>
                                                </td>
                                            </tr>
                                            <?php
                                        }
                                        ?>
                                    </tbody>


                                </table>

                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
        </section>
    </div>
</body>

</html>