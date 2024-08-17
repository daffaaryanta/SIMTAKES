<?php
// Memanggil atau membutuhkan file function.php
require '../../../koneksi.php';

// Menampilkan semua data dari table mahasiswa berdasarkan nim secara Descending
// $rumah = query("SELECT * FROM data_rumahsakit ORDER BY kabkota");

if ($id_role == '15') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kota Banjarmasin' ORDER BY namarumah");
} elseif ($id_role == '3') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Balangan' ORDER BY namarumah");
} elseif ($id_role == '4') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Banjar' ORDER BY namarumah");
} elseif ($id_role == '5') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Barito Kuala' ORDER BY namarumah");
} elseif ($id_role == '6') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Hulu Sungai Selatan' ORDER BY namarumah");
} elseif ($id_role == '7') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Hulu Sungai Tengah' ORDER BY namarumah");
} elseif ($id_role == '8') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Hulu Sungai Utara' ORDER BY namarumah");
} elseif ($id_role == '9') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Kotabaru' ORDER BY namarumah");
} elseif ($id_role == '10') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tabalong' ORDER BY namarumah");
} elseif ($id_role == '11') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tanah Bumbu' ORDER BY namarumah");
} elseif ($id_role == '12') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tanah Laut' ORDER BY namarumah");
} elseif ($id_role == '13') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tapin' ORDER BY namarumah");
} elseif ($id_role == '14') {
    $rumah = query("SELECT * FROM data_rumahsakit WHERE kabkota = 'Kota Banjarbaru' ORDER BY namarumah");
} elseif ($id_role == '2') {
    $rumah = query("SELECT * FROM data_rumahsakit ORDER BY kabkota");
} else {
    echo "<script>alert('Anda harus login ulang!');
		document.location = '../../../index.php';
		</script>";
    exit(); // Terminate script execution after the redirect
}
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIMTAKES - Rumah Sakit</title>

    <!-- Custom fonts for this template -->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <?php
        require '../template/sidebar.php';
        ?>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <form class="form-inline">
                        <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                            <i class="fa fa-bars"></i>
                        </button>
                    </form>

                    <!-- Topbar Search -->
                     

                    <!-- Topbar Navbar -->
                    <?php
                    require '../template/navbar.php';
                    ?>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center left-content-between mb-4">
                            <a href="../../cetak/cetak_rumah.php" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-download fa-sm text-white-50"></i>
                                            </span>
                                            <span class="text">Cetak PDF</span>
                            </a>&nbsp;&nbsp;
                            <a href="../../excel/excel_rumahsakit.php" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-download fa-sm text-white-50"></i>
                                            </span>
                                            <span class="text">Cetak Excel</span>
                            </a>&nbsp;&nbsp;
                            <!-- <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-download fa-sm text-white-50"></i>
                                    Download
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../../cetak/cetak_rumah.php">Cetak (.pdf)</a>
                                    <a class="dropdown-item" href="../../excel/excel_rumahsakit.php">Excel (.xls)</a>
                                    
                                </div>
                            </div> -->
                        <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <a href="rumahsakit-tambah.php" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-plus"></i>
                                            </span>
                                            <span class="text">Tambah Data</span>
                            </a>&nbsp;&nbsp;
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-download fa-sm text-white-50"></i>
                                    Download
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../../cetak/cetak_rumah.php">Cetak (.pdf)</a>
                                    <a class="dropdown-item" href="../../excel/excel_rumahsakit.php">Excel (.xls)</a>
                                    
                                </div>
                            </div>
                        </div> -->
                        
                    </div>

                    <!-- Content Row -->
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Kab kota</th>
                                            <th>Kode Rumah Sakit</th>
                                            <th>Nama Rumah Sakit</th>
                                            <th>Jenis Rumah Sakit</th>
                                            <th>Alamat</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($rumah as $data_klinik) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data_klinik['kabkota'] ?></td>
                                                <td><?= $data_klinik['koderumah'] ?></td>
                                                <td><?= $data_klinik['namarumah'] ?></td>
                                                <td><?= $data_klinik['kategorirumah'] ?></td>
                                                <td><?= $data_klinik['alamat'] ?></td>
                                                
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    
                </div>
            </div>
            <!-- End of Main Content -->

            <!-- Footer -->
<?php
            require '../template/footer.php';
            ?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <?php
        require '../template/logout_modal.php';
        ?>

    <!-- Bootstrap core JavaScript-->
    <script src="../../../vendor/jquery/jquery.min.js"></script>
    <script src="../../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../../js/sb-admin-2.min.js"></script>

   

    <!-- Datatables -->
    
    <script src="../../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="../../../js/demo/datatables-demo.js"></script>
</body>

</html>