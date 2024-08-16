<?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff

        require '../../../koneksi.php';
        if (isset($_POST['simpan'])) {
            if (tambahabsen($_POST)) {
                $id_aktivitasa = $_GET['id_aktivitas'];
                $aktivitas = mysqli_query($koneksi, "SELECT * FROM aktivitas WHERE id_aktivitas = $id_aktivitasa");
                $result = mysqli_fetch_assoc($aktivitas);
                $resultstring = $result['id_aktivitas'];

                echo '<script>
                var currString =';
                echo $resultstring;
                echo ';
                        alert("Data berhasil ditambahkan!");
                        window.location.href= "aktivitas_absen.php?id_aktivitas=" + currString;
                    </script>';
                
                //  header('Location: aktivitas_absen.php?id_aktivitas='.$aktivitas["id_aktivitas"]);
            } else {
                // Jika fungsi tambah jika data tidak tersimpan, maka munculkan alert dibawah
                echo "<script>
                        alert('Data gagal ditambahkan!');
                    </script>";
            }
        }
        $id_aktivitasa = $_GET['id_aktivitas'];
$aktivitas = query("SELECT * FROM aktivitas WHERE id_aktivitas = $id_aktivitasa")[0];
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
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
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
<!-- Sidebar - Brand -->
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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Absen</h1>
                        
                        
                    </div>

                    <!-- Content Row -->
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="card shadow mb-4">
                            
                                <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="kabkota"><strong>Nama Kegiatan</strong></label>
                                            <select name="id_aktivitas" id="id_aktivitas" class="form-control" readonly>
                                            
                                                
                                                <option value="<?= $aktivitas['id_aktivitas']; ?>"><?= $aktivitas['nama']; ?></option>
                                                
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nama"><strong>Nama</strong></label>
                                            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama" autocomplete="off" class="form-control" required>
                                                
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="jabatan"><strong>Jabatan</strong></label>
                                            <div class="input-group ">
                                                <input type="text" name="jabatan" id="jabatan" placeholder="Masukkan Jabatan" autocomplete="off" class="input form-control"  required>
                                               </div>
                                        </div>
                                    
                                        <div class="form-group col-md-6">
                                            <label for="instansi"><strong>Instansi</strong></label>
                                            <select name="instansi" id="instansi" class="form-control" required>
                                            
                                            <option value="">-- Silahkan Pilih --</option>
                                            <option value="Dinas Kesehatan Provinsi Kalimantan Selatan">Dinas Kesehatan Provinsi Kalimantan Selatan</option>
                                                <?php
                                                
                                                    $det = mysqli_query($koneksi, "SELECT * from data_kabkota");
                                                    while ($p = mysqli_fetch_array($det)) {
                                                ?>
                                                <option value="<?php echo 'Dinas Kesehatan '.$p['kabkota'] ?> "><?php echo 'Dinas Kesehatan '.$p['kabkota'] ?></option>
                                                <?php
                                                }
                                                ?> 
                                                
                                            </select>
                                               
                                                
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="hp"><strong>Nomor HP/WA</strong></label>
                                                <div class="input-group ">
                                                <input type="text" name="hp" id="hp" placeholder="Masukkan Nomor HP/WA" autocomplete="off" class="input form-control"  required>
                                               </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="alamat"><strong>Alamat</strong></label>
                                                <div class="input-group ">
                                                <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat" autocomplete="off" class="input form-control"  required>
                                               </div>
                                        </div>
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="surat"><strong>Surat Tugas</strong></label>
                                            <input type="file" name="surat" id="surat" placeholder="Masukkan Surat Tugas" autocomplete="off" class="input form-control" accept=".pdf, .doc, .docx" value="" required>
                                        </div>
                                        
                                    </div>
                                </div>
                           
                        </div>
                        <div class="d-sm-flex align-items-right justify-content-between mb-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="simpan"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                <button type="reset" class="btn"><a href="aktivitas_absen.php?id_aktivitas=<?= $aktivitas['id_aktivitas']; ?>" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</a></button>
                                </form>
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

    <script>
        function password_show_hide() {
  var x = document.getElementById("password");
  var show_eye = document.getElementById("show_eye");
  var hide_eye = document.getElementById("hide_eye");
  hide_eye.classList.remove("d-none");
  if (x.type === "password") {
    x.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    x.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
    </script>

    <script>
function myFunction() {
  var x = document.getElementById("password");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}

    </script>
</body>

</html>