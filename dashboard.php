<?php
include('koneksi.php');
include('tampilan/header.php');
include('tampilan/sidebar.php');
include('tampilan/footer.php');

$query_count_siswa = "SELECT COUNT(*) as total_siswa FROM siswa";
$result_count_siswa = mysqli_query($koneksi, $query_count_siswa);
$row_count_siswa = mysqli_fetch_assoc($result_count_siswa);
$total_siswa = $row_count_siswa['total_siswa'];

$query_count_spp = "SELECT COUNT(*) as total_spp FROM spp";
$result_count_spp = mysqli_query($koneksi, $query_count_spp);
$row_count_spp = mysqli_fetch_assoc($result_count_spp);
$total_spp = $row_count_spp['total_spp'];

$query_count_transaksi = "SELECT COUNT(*) as total_transaksi FROM pembayaran";
$result_count_transaksi = mysqli_query($koneksi, $query_count_transaksi);
$row_count_transaksi = mysqli_fetch_assoc($result_count_transaksi);
$total_transaksi = $row_count_transaksi['total_transaksi'];
?>
<link href="assets/vendor/aos/aos.css" rel="stylesheet">
<link href="css/scroll-bar.css" rel="stylesheet">

<div class="main-content bg-primary">

    <section class="section">
        <div class="row">
            <div class="col-lg-4 col-md-2 col-sm-12" data-aos="zoom-out-down" data-aos-offset="250">
                <div class="card card-statistic-2">
                    <div class="card-stats">
                        <div class="card-stats-title"> TOTAL JUMLAH SISWA</div>
                        <div class="card-stats-items">
                            <div class="card-stats-item">
                                <div class="card-stats-item-count">
                                    <?php echo $total_siswa; ?>
                                </div>
                                <div class="card-stats-item-label">Siswa</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-icon shadow-info bg-primary">
                        <i class="fas fa-users"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-2 col-sm-12" data-aos="zoom-out" data-aos-delay="300">
                <div class="card card-statistic-2">
                    <div class="card-stats">
                        <div class="card-stats-title">TOTAL JUMLAH SPP</div>
                        <div class="card-stats-items">
                            <div class="card-stats-item">
                                <div class="card-stats-item-count">
                                    <?php echo $total_spp; ?>
                                </div>
                                <div class="card-stats-item-label">SPP</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-icon shadow-info bg-primary">
                        <i class="fas fa-file-invoice-dollar"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-4 col-md-2 col-sm-12" data-aos="zoom-out" data-aos-delay="400">
                <div class="card card-statistic-2">
                    <div class="card-stats">
                        <div class="card-stats-title">TOTAL TRANSAKSI</div>
                        <div class="card-stats-items">
                            <div class="card-stats-item">
                                <div class="card-stats-item-count">
                                    <?php echo $total_transaksi; ?>
                                </div>
                                <div class="card-stats-item-label">Transaksi</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-icon shadow-info bg-primary">
                        <i class="fas fa-money-bill-wave"></i>
                    </div>
                </div>
            </div>

            <div class="col-lg-6">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Diagram Chart</h5>
                        <canvas id="myBarChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            <div class="col-lg-4">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">Pie Chart</h5>
                        <canvas id="myPieChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>
        </div>

    </section>
</div>
<script src="assets/vendor/aos/aos.js"></script>
<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
    var totalSiswa = <?php echo $total_siswa; ?>;
    var totalSPP = <?php echo $total_spp; ?>;
    var totalTransaksi = <?php echo $total_transaksi; ?>;
    var ctxBar = document.getElementById('myBarChart').getContext('2d');
    var myBarChart = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ['Total Siswa', 'Total SPP', 'Total Transaksi'],
            datasets: [{
                label: 'Jumlah',
                data: [totalSiswa, totalSPP, totalTransaksi],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        },
        options: {
            scales: {
                y: {
                    beginAtZero: true
                }
            }
        }
    });

    var ctxPie = document.getElementById('myPieChart').getContext('2d');
    var myPieChart = new Chart(ctxPie, {
        type: 'pie',
        data: {
            labels: ['Total Siswa', 'Total SPP', 'Total Transaksi'],
            datasets: [{
                data: [totalSiswa, totalSPP, totalTransaksi],
                backgroundColor: [
                    'rgba(255, 99, 132, 0.2)',
                    'rgba(54, 162, 235, 0.2)',
                    'rgba(75, 192, 192, 0.2)'
                ],
                borderColor: [
                    'rgba(255, 99, 132, 1)',
                    'rgba(54, 162, 235, 1)',
                    'rgba(75, 192, 192, 1)'
                ],
                borderWidth: 1
            }]
        }
    });
    AOS.init();
</script>