<?php

include('koneksi.php');

if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM petugas WHERE nama_petugas LIKE '%$keyword%' ORDER BY id_petugas ASC";
} else {
    $query = "SELECT * FROM petugas ORDER BY id_petugas ASC";
}

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}

include('tampilan/header.php');
include('tampilan/sidebar.php');
include('tampilan/footer.php');
?>

<!DOCTYPE html>
<html>

<head>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="css/scroll-bar.css" rel="stylesheet">
    <title>Pengguna</title>
</head>

<body>
    <!-- Main Content -->
    <div class="main-content bg-primary">
        <section class="section">
            <div class="section-header" data-aos="zoom-out" data-aos-offset="250">
                <h1>DATA PENGGUNA</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item text-primary">Data pengguna</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" data-aos="fade-left" data-aos-delay="400">
                            <a href="tambah_petugas.php" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah
                                Pengguna</a>
                            <h4></h4>
                            <div class="card-header-form">
                                <form method="GET" action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="keyword"
                                            placeholder="Cari pengguna"
                                            value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i>
                                                Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0">
                            <div class="table-responsive" data-aos="fade-in" data-aos-delay="300">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>USERNAME</th>
                                            <th>PASSWORD</th>
                                            <th>NAMA PENGGUNA</th>
                                            <th>LEVEL</th>
                                            <th>ACTION</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php
                                        $no = 1;
                                        while ($row = mysqli_fetch_assoc($result)) {
                                            ?>
                                            <tr>
                                                <td>
                                                    <?php echo $no; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['username']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['password']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['nama_petugas']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['level']; ?>
                                                </td>
                                                <td>
                                                    <a href="edit_petugas.php?id=<?php echo $row['id_petugas']; ?>"
                                                        class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                    <a href="proses_hapuspetugas.php?id=<?php echo $row['id_petugas']; ?>"
                                                        class="btn btn-danger"
                                                        onClick="return confirm('Anda yakin akan menghapus data ini?')"><i
                                                            class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                            <?php
                                            $no++;
                                        }
                                        ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
</body>
<script src="assets/vendor/aos/aos.js"></script>
<script>
    AOS.init();
</script>

</html>