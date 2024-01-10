<?php

include('koneksi.php');
if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM kelas WHERE nama_kelas LIKE '%$keyword%' ORDER BY id_kelas ASC";
} else {
    $query = "SELECT * FROM kelas ORDER BY id_kelas ASC";
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
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="css/scroll-bar.css" rel="stylesheet">

<head>
    <title>DATA KELAS</title>
</head>

<body>
    <div class="main-content bg-primary">
        <section class="section">
            <div class="section-header" data-aos="zoom-out" data-aos-offset="250">
                <h1>DATA KELAS</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="#">Dashboard</a></div>
                    <div class="breadcrumb-item text-primary">Data kelas</div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-header" data-aos="fade-left" data-aos-delay="400">
                            <a href="tambah_kelas.php" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah
                                Kelas</a>
                            <h4></h4>
                            <div class="card-header-form">
                                <form method="GET" action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="keyword" placeholder="Cari kelas"
                                            value="<?php echo isset($_GET['keyword']) ? $_GET['keyword'] : ''; ?>">
                                        <div class="input-group-btn">
                                            <button class="btn btn-primary" type="submit"><i class="fas fa-search"></i>
                                                Cari</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="card-body p-0" data-aos="fade-in" data-aos-delay="300">
                            <div class="table-responsive">
                                <table class="table table-striped">
                                    <thead>
                                        <tr>
                                            <th>NO</th>
                                            <th>NAMA KELAS</th>
                                            <th>KATEGORI</th>
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
                                                    <?php echo $row['nama_kelas']; ?>
                                                </td>
                                                <td>
                                                    <?php echo substr($row['kategori'], 0, 20); ?>
                                                </td>
                                                <td>
                                                    <a href="edit_kelas.php?id=<?php echo $row['id_kelas']; ?>"
                                                        class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                    <a href="proses_hapuskelas.php?id=<?php echo $row['id_kelas']; ?>"
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