<?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff

        require '../../../koneksi.php';
        if (isset($_POST['simpan'])) {
            if (tambahrumah($_POST)) {
                echo "<script>
                        alert('Data berhasil ditambahkan!');
                        document.location.href = 'rumahsakit.php';
                    </script>";
            } else {
                // Jika fungsi tambah jika data tidak tersimpan, maka munculkan alert dibawah
                echo "<script>
                        alert('Data gagal ditambahkan!');
                    </script>";
            }
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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Tambah Data Rumah Sakit</h1>
                        
                        
                    </div>

                    <!-- Content Row -->
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="card shadow mb-4">
                            
                                <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="kabkota"><strong>Kabupaten/Kota</strong></label>
                                            <select name="kabkota" id="kabkota" class="form-control" required> <?php
                                                if ($id_role == '2') { ?>
                                                <option value="">-- Silahkan Pilih --</option>
                                                <option value="Kabupaten Balangan">Kabupaten Balangan</option>
                                                <option value="Kabupaten Banjar">Kabupaten Banjar</option>
                                                <option value="Kabupaten Barito Kuala">Kabupaten Barito Kuala</option>
                                                <option value="Kabupaten Hulu Sungai Selatan">Kabupaten Hulu Sungai Selatan</option>
                                                <option value="Kabupaten Hulu Sungai Tengah">Kabupaten Hulu Sungai Tengah</option>
                                                <option value="Kabupaten Hulu Sungai Utara">Kabupaten Hulu Sungai Utara</option>
                                                <option value="Kabupaten Kotabaru">Kabupaten Kotabaru</option>
                                                <option value="Kabupaten Tabalong">Kabupaten Tabalong</option>
                                                <option value="Kabupaten Tanah Bumbu">Kabupaten Tanah Bumbu</option>
                                                <option value="Kabupaten Tanah Laut">Kabupaten Tanah Laut</option>
                                                <option value="Kabupaten Tapin">Kabupaten Tapin</option>
                                                <option value="Kota Banjarbaru">Kota Banjarmasin</option>
                                                <option value="Kota Banjarmasin">Kota Banjarmasin</option>
                                                 <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '3') { ?>
                                                    <option value="Kabupaten Balangan">Kabupaten Balangan</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '4') { ?>
                                                    <option value="Kabupaten Banjar">Kabupaten Banjar</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '5') { ?>
                                                    <option value="Kabupaten Barito Kuala">Kabupaten Barito Kuala</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '6') { ?>
                                                    <option value="Kabupaten Hulu Sungai Selatan">Kabupaten Hulu Sungai Selatan</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '7') { ?>
                                                    <option value="Kabupaten Hulu Sungai Tengah">Kabupaten Hulu Sungai Tengah</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '8') { ?>
                                                    <option value="Kabupaten Hulu Sungai Utara">Kabupaten Hulu Sungai Utara</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '9') { ?>
                                                    <option value="Kabupaten Kotabaru">Kabupaten Kotabaru</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '10') { ?>
                                                    <option value="Kabupaten Tabalong">Kabupaten Tabalong</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '11') { ?>
                                                    <option value="Kabupaten Tanah Bumbu">Kabupaten Tanah Bumbu</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '12') { ?>
                                                    <option value="Kabupaten Tanah Laut">Kabupaten Tanah Laut</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '13') { ?>
                                                    <option value="Kabupaten Tapin">Kabupaten Tapin</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '14') { ?>
                                                    <option value="Kota Banjarbaru">Kota Banjarmasin</option> <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == '15') { ?>
                                                    <option value="Kota Banjarmasin">Kota Banjarmasin</option> <?php
                                                }
                                                ?>  
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="koderumah"><strong>Kode Rumah Sakit</strong></label>
                                            <input type="text" name="koderumah" id="koderumah" placeholder="Masukkan Kode Rumah Sakit" autocomplete="off" class="form-control" required>
                                                
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="namarumah"><strong>Nama Rumah Sakit</strong></label>
                                                <div class="input-group ">
                                            
                                                <input type="text" name="namarumah" id="namarumah" placeholder="Masukkan Nama Rumah Sakit" autocomplete="off" class="input form-control"  required>
                                               
                                                </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="kategorirumah"><strong>Kategori</strong></label>
                                            <select name="kategorirumah" id="kategorirumah" class="form-control" required>
                                                <option value="">-- Silahkan Pilih --</option>
                                                <option value="Rumah Sakit Umum">Rumah Sakit Umum</option>
                                                <option value="Rumah Sakit Ibu dan Anak">Rumah Sakit Ibu dan Anak</option>
                                                <option value="Rumah Sakit Khusus">Rumah Sakit Khusus</option>
                                                
                                            </select>
                                        </div>
                                    
                                    </div>
                                    <div class="form-row">
                                        
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
                                <button type="reset" class="btn"><a href="rumahsakit.php" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</a></button>
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