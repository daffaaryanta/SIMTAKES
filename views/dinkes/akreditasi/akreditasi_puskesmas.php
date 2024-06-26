<?php
// Memanggil atau membutuhkan file function.php
require '../../../koneksi.php';

// Menampilkan semua data dari table mahasiswa berdasarkan nim secara Descending
// $ak = query("SELECT * FROM view_apuskes ORDER BY kabkota");

if ($id_role == '15') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kota Banjarmasin' ORDER BY nama");
} elseif ($id_role == '3') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kabupaten Balangan' ORDER BY nama");
} elseif ($id_role == '4') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kabupaten Banjar' ORDER BY nama");
} elseif ($id_role == '5') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kabupaten Barito Kuala' ORDER BY nama");
} elseif ($id_role == '6') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kabupaten Hulu Sungai Selatan' ORDER BY nama");
} elseif ($id_role == '7') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kabupaten Hulu Sungai Tengah' ORDER BY nama");
} elseif ($id_role == '8') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kabupaten Hulu Sungai Utara' ORDER BY nama");
} elseif ($id_role == '9') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kabupaten Kotabaru' ORDER BY nama");
} elseif ($id_role == '10') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kabupaten Tabalong' ORDER BY nama");
} elseif ($id_role == '11') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kabupaten Tanah Bumbu' ORDER BY nama");
} elseif ($id_role == '12') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kabupaten Tanah Laut' ORDER BY nama");
} elseif ($id_role == '13') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kabupaten Tapin' ORDER BY nama");
} elseif ($id_role == '14') {
    $ak = query("SELECT * FROM view_apuskes WHERE kabkota = 'Kota Banjarbaru' ORDER BY nama");
} elseif ($id_role == '2') {
    $ak = query("SELECT * FROM view_apuskes ORDER BY kabkota");
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

    <title>SIMTAKES - Akreditasi Puskesmas</title>

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
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php">
                
                <div class="sidebar-brand-text mx-3">SIMTAKES</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item ">
                <a class="nav-link" href="../dashboard.php">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Beranda</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="../rumahsakit/rumahsakit.php">
                <i class="fas fa-fw fa-folder"></i>
                    <span>Data Rumah Sakit</span></a>
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link " href="../puskesmas/puskesmas.php" >
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Puskesmas</span>
                </a>
                
            </li>

            <!-- Nav Item - Utilities Collapse Menu -->
            <li class="nav-item ">
                <a class="nav-link " href="../klinik/klinik.php" >
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Klinik</span>
                </a>
                
            </li>

            

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link " href="../labkes/labkes.php" >
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Labkes</span>
                </a>
                
            </li>

            <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
                    aria-expanded="true" aria-controls="collapsePages">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Data Praktek Mandiri</span>
                </a>
                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Data Praktek Mandiri:</h6>
                        <a class="collapse-item" href="../praktekmandiri/pm_dokterumum.php">Dokter Umum</a>
                        <a class="collapse-item" href="../praktekmandiri/pm_doktersp.php">Dokter Spesialis</a>
                        
                    </div>
                </div>
            </li>

            <!-- Nav Item - Charts -->
            <li class="nav-item">
                <a class="nav-link" href="../transfusidarah/transfusidarah.php">
                <i class="fas fa-fw fa-folder"></i>
                    <span>Data Unit Tranfusi Darah</span></a>
            </li>

           <!-- Nav Item - Pages Collapse Menu -->
            <li class="nav-item active">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAkreditasi"
                    aria-expanded="true" aria-controls="collapseAkreditasi">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Akreditasi</span>
                </a>
                <div id="collapseAkreditasi" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Akreditasi:</h6>
                        <a class="collapse-item" href="../akreditasi/akreditasi_rumahsakit.php">Rumah Sakit</a>
                        <a class="collapse-item active" href="">Puskesmas</a>
                        <a class="collapse-item " href="../akreditasi/akreditasi_klinik.php">Klinik</a>
                        <a class="collapse-item" href="../akreditasi/akreditasi_labkes.php">Labkes</a>
                        <a class="collapse-item " href="../akreditasi/akreditasi_pmdu.php">PM Dokter Umum</a>
                        <a class="collapse-item" href="../akreditasi/akreditasi_pmds.php">PM Dokter Spesialis</a>
                        <a class="collapse-item " href="../akreditasi/akreditasi_transfusi.php">Unit Transfusi Darah</a>
                    </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Nav Item - Akun -->
            <?php 
            if ($id_role == 2) {
                echo $p  = '
                <li class="nav-item ">
                <a class="nav-link" href="../user/user.php">
                <i class="fas fa-fw fa-user"></i>
                    <span>Akun</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">';
            }
            
            ?>

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
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
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600">Selamat Datang, 
                                <?php $index = mysqli_query($koneksi,"SELECT nama from user where username='$username' AND id_role = '$id_role'");
                                $row = mysqli_fetch_array($index);
                                if ($row && $row["nama"] == !'') {
                                echo $row['nama'];
                                }else
                                {
                                echo "no class";
                                }
                                ?>
                                </span>
                                
                                    <i class="fas fa-caret-down fa-sm"></i>
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                
                                
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Data Akreditasi Puskesmas</h1>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <a href="apuskesmas-tambah.php" class="btn btn-primary btn-icon-split">
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
                                    <a class="dropdown-item" href="../../cetak/cetak_apuskesmas.php">Cetak (.pdf)</a>
                                    <a class="dropdown-item" href="#">Excel (.xls)</a>
                                    
                                </div>
                            </div>
                        </div>
                        
                    </div>

                    <!-- Content Row -->
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-dark" id="dataTable" width="100%" cellspacing="5">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Kabkota</th>
                                            <th>Kode Puskesmas</th>
                                            <th>Nama Puskesmas</th>
                                            <th>Alamat</th>
                                            <th>Tahun Akreditasi</th>
                                            <th>Jenis Akreditasi</th>
                                            <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($ak as $ak) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $ak['kabkota'] ?></td>
                                                <td><?= $ak['kode'] ?></td>
                                                <td><?= $ak['nama'] ?></td>
                                                <td><?= $ak['alamat'] ?></td>
                                                <td><?= $ak['tahun'] ?></td>
                                                <td><?= $ak['jenis_akreditasi'] ?></td>
                                                
                                                <td>
                                                <div class="container text-center">
                                                    <a href="apuskesmas-edit.php?id_ak=<?= $ak['id_ak']; ?>"class="btn btn-success btn-sm"><i class="fa fa-pen"></i></a>
                                                    <a  href="hapusapuskesmas.php?id_ak=<?= $ak['id_ak']; ?>" class="btn btn-danger btn-sm" onclick="return confirm('Apakah anda yakin ingin menghapus data Akreditasi Puskesmas <?= $ak['nama']; ?> ?');"><i class="fa fa-trash"></i></a></td>
                                                </div>
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
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; Your Website 2021</span>
                    </div>
                </div>
            </footer>
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
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
        aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="../../../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

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