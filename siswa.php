<?php
include('koneksi.php');


if (isset($_GET['keyword']) && !empty($_GET['keyword'])) {
    $keyword = $_GET['keyword'];
    $query = "SELECT * FROM siswa,kelas,spp WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp AND (nisn LIKE '%$keyword%' OR nama LIKE '%$keyword%') ORDER BY nisn ASC";
} else {
    $query = "SELECT * FROM siswa,kelas,spp WHERE siswa.id_kelas=kelas.id_kelas AND siswa.id_spp=spp.id_spp ORDER BY nisn ASC";
}

$result = mysqli_query($koneksi, $query);

if (!$result) {
    die("Query Error: " . mysqli_errno($koneksi) . " - " . mysqli_error($koneksi));
}
?>
<?php
include('tampilan/header.php');
include('tampilan/sidebar.php');
include('tampilan/footer.php');
?>

<!DOCTYPE html>
<html>

<head>
    <link href="assets/vendor/aos/aos.css" rel="stylesheet">
    <link href="css/scroll-bar.css" rel="stylesheet">
    <title>Data Siswa</title>
</head>

<body>
    <div class="main-content bg-primary">
        <section class="section">
            <div class="section-header" data-aos="zoom-out" data-aos-offset="250">
                <h1>DATA SISWA</h1>
                <div class="section-header-breadcrumb">
                    <div class="breadcrumb-item active"><a href="dashboard.php">Dashboard</a></div>
                    <div class="breadcrumb-item text-primary">Data Siswa</div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-header" data-aos="fade-left" data-aos-delay="400">
                            <a href="tambah_siswa.php" class="btn btn-primary"><i class="fas fa-plus"></i> Tambah
                                Siswa</a>
                            <h4></h4>
                            <div class="card-header-form">
                                <form method="GET" action="">
                                    <div class="input-group">
                                        <input type="text" class="form-control" name="keyword"
                                            placeholder="Cari NISN atau Nama Siswa"
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
                                            <th>NISN</th>
                                            <th>NIS</th>
                                            <th>NAMA</th>
                                            <th>KELAS</th>
                                            <th>ALAMAT</th>
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
                                                    <?php echo $row['nisn']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['nis']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['nama']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['nama_kelas']; ?>
                                                </td>
                                                <td>
                                                    <?php echo $row['alamat']; ?>
                                                </td>
                                                <td>
                                                    <a href="edit_siswa.php?id=<?php echo $row['nisn']; ?>"
                                                        class="btn btn-primary"><i class="fas fa-edit"></i></a>
                                                    <a href="proses_hapussiswa.php?id=<?php echo $row['nisn']; ?>"
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