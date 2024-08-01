<?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff

        require '../../../koneksi.php';
        if (isset($_POST['simpan'])) {
            if (tambahabsen($_POST)) {
                $id_aktivitasa = $_GET['id_aktivitas'];
$aktivitas = query("SELECT * FROM aktivitas WHERE id_aktivitas = $id_aktivitasa")[0];
                echo "<script>
                        alert('Data berhasil ditambahkan!');
                        
                    </script>";
                
                 header('Location: aktivitas_absen.php?id_aktivitas='.$aktivitas["id_aktivitas"]);
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
                    <ul class="navbar-nav ml-auto">
                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 ">Selamat Datang, 
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