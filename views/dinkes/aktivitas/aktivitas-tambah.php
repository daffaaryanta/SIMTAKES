<?php

        // servername => localhost
        // username => root
        // password => empty
        // database name => staff

        require '../../../koneksi.php';
        if (isset($_POST['simpan'])) {
            $nama = $_POST["nama"];
            $namac = ucwords($nama);
            $tempat = $_POST["tempat"];
            $tempatc = ucwords($tempat);
            $waktu = $_POST["waktu"];
            if ($_FILES["dokumentasi"]["error"] === 4) {
                echo "<script>
                         alert('Data gagal ditambahkan!');
                     </script>";
            }
            else {
                $fileName = $_FILES["dokumentasi"]["name"];
                $fileSize = $_FILES["dokumentasi"]["size"];
                $tmpName = $_FILES["dokumentasi"]["tmp_name"];

                $validImageExtension = ['jpg', 'jpeg', 'png'];
                $imageExtension = explode('.', $fileName);
                $imageExtension = strtolower(end($imageExtension));
                if(!in_array($imageExtension, $validImageExtension)){
                    echo "<script>
                         alert('Ekstensi foto salah!');
                     </script>";
                }
                elseif ($fileSize > 1000000) {
                    echo "<script>
                         alert('Ukuran foto terlalu besar!');
                     </script>";
                }
                else {
                    $a = uniqid();
                    $newImagename = $a.'.'.$imageExtension;

                    move_uploaded_file($tmpName,'../../../img/' . $newImagename);
                    $query = "INSERT INTO aktivitas VALUES ('', '$newImagename', '$namac', '$tempatc', '$waktu')";
                    mysqli_query($koneksi, $query);
                    echo "<script>
                         alert('Data berhasil ditambahkan!');
                         document.location.href = 'aktivitas.php';
                     </script>";
                }
            }
            // if (tambahaktivitas($_POST)) {
            //     echo "<script>
            //             alert('Data berhasil ditambahkan!');
            //             document.location.href = 'aktivitas.php';
            //         </script>";
            // } else {
            //     // Jika fungsi tambah jika data tidak tersimpan, maka munculkan alert dibawah
            //     echo "<script>
            //             alert('Data gagal ditambahkan!');
            //         </script>";
            // }
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

    <title>SIMTAKES - Klinik</title>

    <!-- Custom fonts for this template -->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- DATEPICKER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />
    
    

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
                        <h1 class="h3 mb-0 text-gray-800">Tambah Aktivitas</h1>
                        
                        
                    </div>

                    <!-- Content Row -->
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="card shadow mb-4">
                            
                                <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="dokumentasi"><strong>Dokumentasi</strong></label>
                                            <input type="file" name="dokumentasi" id="dokumentasi" placeholder="Masukkan Dokumentasi" autocomplete="off" class="input form-control" accept=".jpg, .jpeg, .png" value="" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nama"><strong>Nama Kegiatan</strong></label>
                                            <input type="text" name="nama" id="nama" placeholder="Masukkan Nama Kegiatan" autocomplete="off" class="form-control" required>
                                                
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="tempat"><strong>Tempat Kegiatan</strong></label>
                                                <div class="input-group ">
                                            
                                                <input type="text" name="tempat" id="tempat" placeholder="Masukkan Tempat Kegiatan" autocomplete="off" class="input form-control"  required>
                                               
                                                </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="waktu"><strong>Waktu Kegiatan</strong></label>
                                            <div class="input-group date" data-provide="datepicker" id="datepicker">
                                            <input  type="text"  name="waktu" id="waktu" placeholder="Masukkan Waktu Kegiatan" autocomplete="off" class="input form-control" class="datepicker" data-date-format="dd/mm/yyyy"required
                                            >
                                            <span class="input-group-append">
                                                <span class = "input-group-text bg-white">
                                            <i class = "fa fa-calendar"></i></span>
                                            </span>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    
                                </div>
                           
                        </div>
                        <div class="d-sm-flex align-items-right justify-content-between mb-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="simpan"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                <button type="reset" class="btn"><a href="aktivitas.php" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</a></button>
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
    <script src="../../../js/libs/moment.min.js"></script>
    <script src="../../../js/libs/bootstrap-datetimepicker.min.js"></script>
    <script src="../../../vendor/datatables/jquery.dataTables.min.js"></script>
    <script src="../../../vendor/datatables/dataTables.bootstrap4.min.js"></script>

    <script src="../../../js/demo/datatables-demo.js"></script>

     <!-- Datepicker -->
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js" charset="UTF-8"></script>
    

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
<script>
    $.fn.datepicker.defaults.format = "dd MM yyyy";
    $.fn.datepicker.dates['en'] = {
    days: ["Minggu", "Senin", "Selasa", "Rabu", "Kamis", "Jumat", "Sabtu"],
    daysShort: ["Sun", "Mon", "Tue", "Wed", "Thu", "Fri", "Sat"],
    daysMin: ["Su", "Mo", "Tu", "We", "Th", "Fr", "Sa"],
    months: ["Januari", "Pebruari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember"],
    monthsShort: ["Jan", "Peb", "Mar", "Apr", "Mei", "Jun", "Jul", "Ags", "Sept", "Okt", "Nop", "Des"],
    today: "Hari ini",
    clear: "Clear",
    format: "dd MM yyyy",
    titleFormat: "MM yyyy", /* Leverages same syntax as 'format' */
    weekStart: 0
};
    $('.datepicker').datepicker({
    language: 'id'
});
                                        </script>
    
    
</body>

</html>