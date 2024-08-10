<?php
// Memanggil atau membutuhkan file function.php
require '../../../koneksi.php';

// Menampilkan semua data dari table mahasiswa berdasarkan nim secara Descending
// if ($id_role == '15') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kota Banjarmasin' ORDER BY namaklinik");
// } elseif ($id_role == '3') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kabupaten Balangan' ORDER BY namaklinik");
// } elseif ($id_role == '4') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kabupaten Banjar' ORDER BY namaklinik");
// } elseif ($id_role == '5') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kabupaten Barito Kuala' ORDER BY namaklinik");
// } elseif ($id_role == '6') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kabupaten Hulu Sungai Selatan' ORDER BY namaklinik");
// } elseif ($id_role == '7') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kabupaten Hulu Sungai Tengah' ORDER BY namaklinik");
// } elseif ($id_role == '8') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kabupaten Hulu Sungai Utara' ORDER BY namaklinik");
// } elseif ($id_role == '9') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kabupaten Kotabaru' ORDER BY namaklinik");
// } elseif ($id_role == '10') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kabupaten Tabalong' ORDER BY namaklinik");
// } elseif ($id_role == '11') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kabupaten Tanah Bumbu' ORDER BY namaklinik");
// } elseif ($id_role == '12') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kabupaten Tanah Laut' ORDER BY namaklinik");
// } elseif ($id_role == '13') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kabupaten Tapin' ORDER BY namaklinik");
// } elseif ($id_role == '14') {
//     $klinik = query("SELECT * FROM aktivitas WHERE kabkota = 'Kota Banjarbaru' ORDER BY namaklinik");
// }elseif ($id_role == '2') {
//     $klinik = query("SELECT * FROM aktivitas ORDER BY kabkota");
// } else {
//     echo "<script>alert('Anda harus login ulang!');
// 		document.location = '../../../index.php';
// 		</script>";
//     exit(); // Terminate script execution after the redirect
// }
$id_aktivitasa = $_GET['id_aktivitas'];
$aktivitas = query("SELECT * FROM aktivitas WHERE id_aktivitas = $id_aktivitasa")[0];

$klinik = query("SELECT * FROM absen WHERE id_aktivitas = $id_aktivitasa");
if ($id_role == FALSE) {
    echo "<script>alert('Anda harus login ulang!');
 		document.location = '../../../index.php';
		</script>";
    exit(); // Terminate script execution after the redirect
}
$ab = $id_aktivitasa;
$_SESSION['id_aktivitas'] = $ab;
?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIMTAKES - Absen Aktivitas</title>

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
        <!-- Sidebar -->
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

<!-- Sidebar - Brand -->
<?php  
    if(isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on')   
         $url = "https://";   
    else  
         $url = "http://";   
    // Append the host(domain name, ip) to the URL.   
    $url.= $_SERVER['HTTP_HOST'];   
    
    // Append the requested resource location to the URL   
    $url.= $_SERVER['REQUEST_URI'];    
      
    ?>

<?php 
    if (strpos($url, "dashboard/dashboard") !== false) {
        ?>
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="">
            <?php
        
     } else {
        ?>
        <a class="sidebar-brand d-flex align-items-center justify-content-center" href="../dashboard/dashboard.php">
        <?php
     }
  ?> 
    
    <div class="sidebar-brand-text mx-3">SIMTAKES</div>
</a>



<!-- Divider -->
<hr class="sidebar-divider my-0">

<!-- Nav Item - Dashboard -->
<?php 
    if (strpos($url, "dashboard") !== false) {
        ?>
        <li class="nav-item active">
        <a class="nav-link" href="">
            <?php
        
     } else {
        ?>
        <li class="nav-item ">
        <a class="nav-link " href="../dashboard/dashboard.php" >
        <?php
     }
  ?> 

        <i class="fas fa-fw fa-tachometer-alt"></i>
        <span>Beranda</span></a>
</li>

<!-- Divider -->
<hr class="sidebar-divider">

<!-- Nav Item - Charts -->
<?php 
    if (strpos($url, "rumahsakit/rumahsakit") !== false) {
        ?>
        <li class="nav-item active">
        <a class="nav-link" href="">
            <?php
        
     } else {
        ?>
        <li class="nav-item ">
        <a class="nav-link" href="../rumahsakit/rumahsakit.php">
        <?php
     }
  ?> 
    
    <i class="fas fa-fw fa-folder"></i>
        <span>Data Rumah Sakit</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->
<?php 
    if (strpos($url, "puskesmas/puskesmas") !== false) {
        ?>
        <li class="nav-item active">
        <a class="nav-link" href="">
            <?php
        
     } else {
        ?>
        <li class="nav-item ">
        <a class="nav-link " href="../puskesmas/puskesmas.php" >
        <?php
     }
  ?>
    
        <i class="fas fa-fw fa-folder"></i>
        <span>Data Puskesmas</span>
    </a>
    
</li>

<!-- Nav Item - Utilities Collapse Menu -->
    <?php 
    if (preg_match("%klinik/klinik%", $url ) ) {
        ?>
        <li class="nav-item active">
        <a class="nav-link" href="">
            <?php
        
     } else {
        ?>
        <li class="nav-item ">
        <a class="nav-link" href="../klinik/klinik.php">
        <?php
     }
  ?>  
    
        <i class="fas fa-fw fa-folder"></i>
        <span>Data Klinik</span>
    </a>
    
</li>



<!-- Nav Item - Pages Collapse Menu -->
<?php 
    if (strpos($url, "labkes/labkes") !== false) {
        ?>
        <li class="nav-item active">
        <a class="nav-link" href="">
            <?php
        
     } else {
        ?>
        <li class="nav-item ">
        <a class="nav-link " href="../labkes/labkes.php" >
        <?php
     }
  ?> 
    
        <i class="fas fa-fw fa-folder"></i>
        <span>Data Labkes</span>
    </a>
    
</li>

<!-- Nav Item - Pages Collapse Menu -->
<?php 
    if (strpos($url, "praktekmandiri") !== false) {
        ?>
        <li class="nav-item active">
        <?php
        } else { ?>
        <li class="nav-item ">
        <?php
     }
  ?> 
    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages"
        aria-expanded="true" aria-controls="collapsePages">
        <i class="fas fa-fw fa-folder"></i>
        <span>Data Praktek Mandiri</span>
    </a>
    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Data Praktek Mandiri:</h6>
        <?php 
    if (strpos($url, "praktekmandiri/pm_dokterumum") !== false) {
        ?>
        <a class="collapse-item" href="">Dokter Umum</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../praktekmandiri/pm_dokterumum.php">Dokter Umum</a>
        <?php
     }
  ?> 
            
            <?php 
    if (strpos($url, "praktekmandiri/pm_doktersp") !== false) {
        ?>
        <a class="collapse-item" href="">Dokter Spesialis</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../praktekmandiri/pm_doktersp.php">Dokter Spesialis</a>
        <?php
     }
  ?> 
      </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<?php 
    if (strpos($url, "transfusidarah/transfusidarah") !== false) {
        ?>
        <li class="nav-item active">
        <a class="nav-link" href="">
            <?php
        
     } else {
        ?>
        <li class="nav-item ">
        <a class="nav-link" href="../transfusidarah/transfusidarah.php">
        <?php
     }
  ?> 
    
    <i class="fas fa-fw fa-folder"></i>
        <span>Data Unit Tranfusi Darah</span></a>
</li>

<!-- Nav Item - Pages Collapse Menu -->

<?php 
    if (strpos($url, "akreditasi") !== false) {
        ?>
        <li class="nav-item active">
        <?php
        } else { ?>
        <li class="nav-item ">
        <?php
     }
  ?> 
   <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseAkreditasi"
   aria-expanded="true" aria-controls="collapseAkreditasi">
        <i class="fas fa-fw fa-folder"></i>
        <span>Akreditasi</span>
    </a>
    <div id="collapseAkreditasi" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Akreditasi:</h6>
        <?php 
    if (strpos($url, "akreditasi/akreditasi_rumahsakit") !== false) {
        ?>
        <a class="collapse-item active" href="">Rumah Sakit</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../akreditasi/akreditasi_rumahsakit.php">Rumah Sakit</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "akreditasi/akreditasi_puskesmas") !== false) {
        ?>
        <a class="collapse-item active" href="">Puskesmas</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../akreditasi/akreditasi_puskesmas.php">Puskesmas</a>
        <?php
     }
  ?> 
    <?php 
    if (strpos($url, "akreditasi/akreditasi_klinik") !== false) {
        ?>
        <a class="collapse-item active" href="">Klinik</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../akreditasi/akreditasi_klinik.php">Klinik</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "akreditasi/akreditasi_labkes") !== false) {
        ?>
        <a class="collapse-item active" href="">Labkes</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../akreditasi/akreditasi_labkes.php">Labkes</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "akreditasi/akreditasi_pmdu") !== false) {
        ?>
        <a class="collapse-item active" href="">PM Dokter Umum</a>
        <?php
        } else { ?>
        <a class="collapse-item " href="../akreditasi/akreditasi_pmdu.php">PM Dokter Umum</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "akreditasi/akreditasi_pmds") !== false) {
        ?>
        <a class="collapse-item active" href="">PM Dokter Spesialis</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../akreditasi/akreditasi_pmds.php">PM Dokter Spesialis</a>
        <?php
     }
  ?> 
    <?php 
    if (strpos($url, "akreditasi/akreditasi_transfusi") !== false) {
        ?>
        <a class="collapse-item active" href="">Unit Transfusi Darah</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../akreditasi/akreditasi_transfusi.php">Unit Transfusi Darah</a>
        <?php
     }
  ?>              
        </div>
    </div>
</li>

<!-- Nav Item - Charts -->
<?php 
    if (strpos($url, "aktivitas") !== false) {
        ?>
        <li class="nav-item active">
        <a class="nav-link" href="aktivitas.php">
            <?php
        
     } else {
        ?>
        <li class="nav-item ">
        <a class="nav-link" href="../aktivitas/aktivitas.php">
        <?php
     }
  ?> 
    
    <i class="fas fa-fw fa-folder"></i>
        <span>Aktivitas</span></a>
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
<hr class="sidebar-divider d-none d-md-block">;';
}

?>





<!-- Sidebar Toggler (Sidebar) -->
<div class="text-center d-none d-md-inline">
    <button class="rounded-circle border-0" id="sidebarToggle"></button>
</div>

</ul>

<!-- End of Sidebar -->
 <script>
    // Get the container element
var btnContainer = document.getElementById("myDIV");

// Get all buttons with class="btn" inside the container
var btns = btnContainer.getElementsByClassName("nav-item");

// Loop through the buttons and add the active class to the current/clicked button
for (var i = 0; i < btns.length; i++) {
  btns[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    current[0].className = current[0].className.replace(" active", "");
    this.className += " active";
  });
}
    </script>
        
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
                        <h1 class="h3 mb-0 text-gray-800">Absen Aktivitas <?=$aktivitas['nama']  ?>
                        </h1>
                        <div class="d-sm-flex align-items-center justify-content-between mb-4">
                            <a href="absen-tambah.php?id_aktivitas=<?= $aktivitas['id_aktivitas']; ?>" class="btn btn-primary btn-icon-split">
                                            <span class="icon text-white-50">
                                                <i class="fas fa-plus"></i>
                                            </span>
                                            <span class="text">Tambah Absen</span>
                            </a>&nbsp;&nbsp;
                            
                            <?php
                            if ($id_role == 2) {
                                echo $p  = '
                            <div class="btn-group">
                                <button type="button" class="btn btn-primary dropdown-toggle " data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><i
                                    class="fas fa-download fa-sm text-white-50"></i>
                                    Download
                                </button>
                                <div class="dropdown-menu">
                                    <a class="dropdown-item" href="../../cetak/cetak_absen.php">Cetak (.pdf)</a>
                                    <a class="dropdown-item" href="../../excel/excel_absen.php">Excel (.xls)</a>
                                    
                                </div>
                            </div>';
                            }
                            ?>
                        </div>
                        
                    </div>

                    <!-- Content Row -->
                    <form action="hapusabsen.php" method="post" enctype="multipart/form-data">
                        <input type="text" name="id" value="<?php $_GET['id_aktivitas'] ?>" hidden>
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="card shadow mb-4">
                            <div class="card-body">
                                <div class="table-responsive">
                                    <table class="table table-bordered text-dark" id="dataTable" width="100%" cellspacing="0">
                                        <thead>
                                            <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Jabatan</th>
                                            <th>Instansi</th>
                                            <th>No. HP/WA</th>
                                            <th>Alamat</th>
                                            <th>Opsi</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php $no = 1; ?>
                                            <?php foreach ($klinik as $a) : ?>
                                            <tr>
                                                <td><?= $no++ ?></td>
                                                <td><?= $a['nama'] ?></td>
                                                <td><?= $a['jabatan'] ?></td>
                                                <td><?= $a['instansi'] ?></td>
                                                <td><?= $a['hp'] ?></td>
                                                <td><?= $a['alamat'] ?></td>
                                                <td>
                                                <div class="container text-center">
                                                    <a href="absen-edit.php?id_absen=<?= $a['id_absen']; ?>"class="btn btn-success btn-sm" data-toggle="tooltip" data-placement="top" title="Edit Absen"><i class="fa fa-pen"></i></a>
                                                    <a  href="hapusabsen.php?id_absen=<?= $a['id_absen']; ?>" class="btn btn-danger btn-sm" data-toggle="tooltip" data-placement="top" title="Hapus Absen" onclick="return confirm('Apakah anda yakin ingin menghapus data <?= $a['nama']; ?> ?');"><i class="fa fa-trash"></i></a></td>
                                                </div>
                                            </tr>
                                            <?php endforeach ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        </form>
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
    <script>
        $(function () {
  $('[data-toggle="tooltip"]').tooltip()
})
    </script>
</body>

</html>