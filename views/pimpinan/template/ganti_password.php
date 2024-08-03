<?php
// Memanggil atau membutuhkan file function.php
require '../../../koneksi.php';

$username = $_SESSION['username'];
// Menampilkan semua data dari table mahasiswa berdasarkan nim secara Descending
$klinik = query("SELECT * FROM user where username='$username'")[0];


if (isset($_POST['ubah'])) {
    if (ubahpassword($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = '../dashboard/dashboard.php';
            </script>";
    } else {
        // Jika fungsi ubah jika data tidak terubah, maka munculkan alert dibawah
        echo "<script>
                alert('Data gagal diubah!');
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

    <title>SIMTAKES - Ganti Password</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Ganti Password</h1>
                        
                        
                    </div>

                    <!-- Content Row -->
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="card shadow mb-4">
                            
                                <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="hidden" name="id_user" id="id_user" value="<?= $klinik['id_user']; ?>" autocomplete="off" class="form-control" readonly>
                                            <label for="passwordlama"><strong>Password Lama</strong></label>
                                                <div class="input-group ">
                                            
                                                <input type="password" name="passwordlama" id="passwordlama" value="" autocomplete="off" class="input form-control" aria-describedby="basic-addon1" placeholder="Masukkan Password Lama" required>
                                               
                                                </div>
                                                <input type="checkbox" onclick="myFunction()"> Show Password
                                        </div>
                                        
                                    </div>
                                    <div class="form-row">
                                    <div class="form-group col-md-6">
                                            <label for="passwordbaru"><strong>Password Baru</strong></label>
                                            <input type="password" name="passwordbaru" id="passwordbaru" value="" autocomplete="off" class="form-control" placeholder="Masukkan Password Baru" required >
                                            <input type="checkbox" onclick="myFunction1()"> Show Password  
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="passwordbaru"><strong>Konfirmasi Password Baru</strong></label>
                                            <input type="password" name="passwordbaru2" id="passwordbaru2" value="" autocomplete="off" class="form-control" placeholder="Konfirmasi Password Baru" required>
                                            <input type="checkbox" onclick="myFunction2()"> Show Password
                                        </div>
                                    
                                    </div>
                                    
                                </div>
                           
                        </div>
                        <div class="d-sm-flex align-items-right justify-content-between mb-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="ubah"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                <button type="reset" class="btn"><a href="../dashboard/dashboard.php" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</a></button>
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
  var x = document.getElementById("passwordlama");
  var y = document.getElementById("passwordbaru");
  var z = document.getElementById("passwordbaru2");
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

  if (y.type === "password") {
    y.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    y.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }

  if (z.type === "password") {
    z.type = "text";
    show_eye.style.display = "none";
    hide_eye.style.display = "block";
  } else {
    z.type = "password";
    show_eye.style.display = "block";
    hide_eye.style.display = "none";
  }
}
    </script>

    <script>
function myFunction() {
  var x = document.getElementById("passwordlama");
  var y = document.getElementById("passwordbaru");
  var z = document.getElementById("passwordbaru2");
  if (x.type === "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }

}

function myFunction1() {
  var y = document.getElementById("passwordbaru");
   if (y.type === "password") {
    y.type = "text";
  } else {
    y.type = "password";
  }

}

function myFunction2() {
    var z = document.getElementById("passwordbaru2");
   if (z.type === "password") {
    z.type = "text";
  } else {
    z.type = "password";
  }

}

    </script>
</body>

</html>