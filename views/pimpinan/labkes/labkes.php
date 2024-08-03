<?php
// Memanggil atau membutuhkan file function.php
require '../../../koneksi.php';

// Menampilkan semua data dari table mahasiswa berdasarkan nim secara Descending
$labkes = query("SELECT * FROM data_labkes ORDER BY kabkota");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIMTAKES - Lab Kesehatan</title>

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Lab Kesehatan</h1>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-download fa-sm text-white-50"></i>
                                    Download
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../../cetak/cetak_labkes.php">Cetak (.pdf)</a>
                                    <a class="dropdown-item" href="../../excel/excel_labkes.php">Excel (.xls)</a>
                                    
                                </div>
                            </div>
                        </div>
                        
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
                                            <th>Kabkota</th>
                                            <th>Kode Labkes</th>
                                            <th>Nama Labkes</th>
                                            <th>Jenis Labkes</th>
                                            <th>Alamat</th>
                                            
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($labkes as $data_labkes) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $data_labkes['kabkota'] ?></td>
                                                <td><?= $data_labkes['kodelabkes'] ?></td>
                                                <td><?= $data_labkes['namalabkes'] ?></td>
                                                <td><?= $data_labkes['jenislabkes'] ?></td>
                                                <td><?= $data_labkes['alamat'] ?></td>
                                                
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