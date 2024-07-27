<?php
// Memanggil atau membutuhkan file function.php
require '../../koneksi.php';

// Menampilkan semua data dari table mahasiswa berdasarkan nim secara Descending
$puskesmas = query("SELECT * FROM data_pkm ORDER BY kabkota");
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIMTAKES - Beranda</title>

    <!-- Custom fonts for this template-->
    <link href="../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
<?php
require 'template/sidebar.php';
   
    ?>
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        
                    </div>
                    <div class="row">
                    <div class="col-sm-6">
                    <div class="card shadow mb-4">
                    <div class="card-body">
                    <img src="../../img/dinkes.jpg" style=" display: block; margin-left: auto; margin-right: auto; width: 100%; height: auto; position: center;">
                    <br>
                        <h4 style = "color: black; text-align: center;">Selamat Datang di Sistem Data Kesehatan</h4>
                        <h6 style= "text-align: justify;">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin aliquam mi non magna pulvinar semper. Vestibulum vitae mollis arcu. Curabitur in mi vitae nisi posuere aliquet vitae a lectus. Vivamus euismod, odio ut auctor blandit, dui tellus auctor dui, id convallis est tortor et enim. Vivamus et mi lobortis, tincidunt ex at, fringilla leo. Cras consectetur lacus felis, eget euismod ex fermentum nec. Duis dictum erat lorem, egestas pellentesque mauris sodales non. Mauris malesuada porttitor arcu, sed ultricies dui faucibus eu. Cras id mauris luctus, maximus quam eget, scelerisque quam. Nulla purus augue, convallis et ex et, sagittis ornare leo. Suspendisse maximus, velit sed congue varius, leo dui placerat ex, id aliquam elit elit quis ex. Maecenas scelerisque urna ac congue dignissim.
                        </h6>
                    </div>
                    </div>
                    </div>
                    
                    
                    <div class="col-sm-6">
                    
                    <div class="card shadow mb-4">
                    <div class="card text-center">
                    <div class="card-header">
                        Total Data Faskes
                    </div>
                    </div>
                    <div class="card-body">
                    <div class="row">
                        
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-md-2 col-md-6 mb-4">
                                    <div class="card border-left-primary shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                    <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Data Rumah Sakit</div>
                                                        <?php
                                                            $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit");
                                                            $row = mysqli_num_rows($query);
                                                            ?>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                            <?php echo $row ?></div>
                                                </div>
                                                <div class="col-auto">
                                                    <i class="fas fa-folder fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                        
                                 <!-- Earnings (Monthly) Card Example -->
                                 <div class="col-md-2 col-md-6 mb-4">
                                    <div class="card border-left-success shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                                <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Data Puskesmas</div>
                                                        <?php
                                                        $query = mysqli_query($koneksi,"SELECT * FROM data_pkm");
                                                        $row = mysqli_num_rows($query);
                                                            ?>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                            <?php echo $row ?></div>
                                                            </div>
                                                <div class="col-auto">
                                                <i class="fas fa-folder fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-md-2 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Data Klinik</div>
                                                        <?php
                                                            $query = mysqli_query($koneksi,"SELECT * FROM data_klinik");
                                                            $row = mysqli_num_rows($query);
                                                            ?>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                            <?php echo $row ?></div>
                                                            </div>
                                                <div class="col-auto">
                                                <i class="fas fa-folder fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-md-2 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Data Labkes</div>
                                                        <?php
                                                            $query = mysqli_query($koneksi,"SELECT * FROM data_labkes");
                                                            $row = mysqli_num_rows($query);
                                                            ?>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                            <?php echo $row ?></div>
                                                            </div>
                                                <div class="col-auto">
                                                <i class="fas fa-folder fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                
                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-md-2 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Data Praktek Mandiri Dokter Umum</div>
                                                        <?php
                                                            $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum");
                                                            $row = mysqli_num_rows($query);
                                                            ?>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                            <?php echo $row ?></div>
                                                            </div>
                                                <div class="col-auto">
                                                <i class="fas fa-folder fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-md-2 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Data Praktek Mandiri Dokter Spesialis</div>
                                                        <?php
                                                            $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp");
                                                            $row = mysqli_num_rows($query);
                                                            ?>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                            <?php echo $row ?></div>
                                                            </div>
                                                <div class="col-auto">
                                                <i class="fas fa-folder fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Earnings (Monthly) Card Example -->
                                <div class="col-md-2 col-md-6 mb-4">
                                    <div class="card border-left-info shadow h-100 py-2">
                                        <div class="card-body">
                                            <div class="row no-gutters align-items-center">
                                            <div class="col mr-2">
                                                <div class="text-xs font-weight-bold text-primary text-uppercase mb-1">
                                                        Data Unit Transfusi Darah</div>
                                                        <?php
                                                            $query = mysqli_query($koneksi,"SELECT * FROM data_utd");
                                                            $row = mysqli_num_rows($query);
                                                            ?>
                                                            <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                            <?php echo $row ?></div>
                                                            </div>
                                                <div class="col-auto">
                                                <i class="fas fa-folder fa-2x text-gray-300"></i>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div> 
                     
                    </div>            
                    </div>
                    </div>
                </div>
                <!-- /.container-fluid -->

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
                    <a class="btn btn-primary" href="../../logout.php">Logout</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="../../vendor/jquery/jquery.min.js"></script>
    <script src="../../vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="../../vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="../../js/sb-admin-2.min.js"></script>

    <!-- Page level plugins -->
    <script src="../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../js/demo/chart-area-demo.js"></script>
    <script src="../../js/demo/chart-pie-demo.js"></script>

</body>

</html>