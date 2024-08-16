<?php
// Memanggil atau membutuhkan file function.php
require '../../../koneksi.php';

$id_aktivitas = $_GET['id_aktivitas'];
// Menampilkan semua data dari table mahasiswa berdasarkan nim secara Descending
$klinik = query("SELECT * FROM aktivitas WHERE id_aktivitas = $id_aktivitas")[0];


if (isset($_POST['ubah'])) {
   
    if (ubahaktivitas($_POST) > 0) {
        echo "<script>
                alert('Data berhasil diubah!');
                document.location.href = 'aktivitas.php';
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

    <title>SIMTAKES - Aktivitas</title>

    <!-- Custom fonts for this template -->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="../../../vendor/datatables/dataTables.bootstrap4.min.css" rel="stylesheet">

    <!-- DATEPICKER -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css"  />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"  />

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

    <?php
require '../template/sidebar.php';
   
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
                    <?php
                    require '../template/navbar.php';
                    ?>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Aktivitas</h1>
                        
                        
                    </div>

                    <!-- Content Row -->
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="card shadow mb-4">
                            
                                <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="hidden" name="id_aktivitas" id="id_aktivitas" value="<?= $klinik['id_aktivitas']; ?>" autocomplete="off" class="form-control" readonly>
                                            <label for="dokumentasi"><strong>Dokumentasi</strong></label>&nbsp;&nbsp;&nbsp;<br>
                                            <!-- <img src='../../../img/<?php echo $klinik['dokumentasi'];?>' width='auto' height='200px' > -->
                                            <a href='aktivitas-edit-dokumentasi.php?id_aktivitas=<?= $klinik['id_aktivitas']; ?>' class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Edit Dokumentasi</a>
                                            
                                            
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="nama"><strong>Nama Kegiatan</strong></label><br>
                                            <input type="text" name="nama" id="nama" value="<?= $klinik['nama']; ?>" autocomplete="off" class="form-control" required>
                                                
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="tempat"><strong>Tempat Kegiatan</strong></label>
                                                <div class="input-group ">
                                            
                                                <input type="text" name="tempat" id="tempat" value="<?= $klinik['tempat']; ?>" autocomplete="off" class="input form-control"  required>
                                               
                                                </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="waktu"><strong>Waktu Kegiatan</strong></label>
                                            <div class="input-group date" data-provide="datepicker" id="datepicker">
                                            
                                                <input type="text" name="waktu" id="waktu" value="<?= $klinik['waktu']; ?>" autocomplete="off" class="input form-control" class="datepicker" data-date-format="dd/mm/yyyy"   required>
                                                <span class="input-group-append">
                                                <span class = "input-group-text bg-white">
                                            <i class = "fa fa-calendar"></i></span>
                                            </span>
                                                </div>
                                        </div>
                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="notulen"><strong>Notulen Kegiatan</strong></label>
                                                <div class="input-group ">
                                            
                                                <textarea class="form-control" name="notulen" id="notulen" rows="5" required></textarea>
                                               
                                                </div>
                                        </div>
                                        
                                    
                                    </div>
                                    
                                </div>
                           
                        </div>
                        <div class="d-sm-flex align-items-right justify-content-between mb-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="ubah"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                <button type="reset" class="btn"><a href="aktivitas.php" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</a></button>
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