<?php
// Memanggil atau membutuhkan file function.php
require '../../../koneksi.php';

$id_absen = $_GET['id_absen'];
// Menampilkan semua data dari table mahasiswa berdasarkan nim secara Descending
$klinik = query("SELECT * FROM absen WHERE id_absen = $id_absen")[0];
// $id_aktivitas = $klinik['id_aktivitas'];


if (isset($_POST['ubah'])) {
    if (ubahabsen($_POST) > 0) {

        
$aktivitas = mysqli_query($koneksi, "SELECT * FROM absen WHERE id_absen = $id_absen");
$result = mysqli_fetch_assoc($aktivitas);
$resultstring = $result['id_aktivitas'];

                echo '<script>
                var currString =';
                echo $resultstring;
                echo ';
                        alert("Data berhasil ditambahkan!");
                        window.location.href= "absen.php?id_aktivitas=" + currString;
                    </script>';
                
                //  header('Location: aktivitas_absen.php?id_aktivitas='.$aktivitas["id_aktivitas"]);
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

    <title>SIMTAKES - Absen</title>

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
                        <h1 class="h3 mb-0 text-gray-800">Edit Data Absen <?php echo $klinik["nama"] ?></h1>
                        
                        
                    </div>

                    <!-- Content Row -->
                    
                        <!-- Earnings (Monthly) Card Example -->
                        <div class="card shadow mb-4">
                            
                                <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <input type="hidden" name="id_absen" id="id_absen" value="<?= $klinik['id_absen']; ?>" autocomplete="off" class="form-control" readonly>
                                            <input type="hidden" name="id_aktivitas" id="id_aktivitas" value="<?= $klinik['id_aktivitas']; ?>" autocomplete="off" class="form-control" readonly>
                                            <label for="nama"><strong>Nama</strong></label>
                                            <input type="text" name="nama" id="nama" value="<?= $klinik['nama']; ?>" autocomplete="off" class="form-control" required>
                                        </div>
                                        <div class="form-group col-md-6">
                                            <label for="jabatan"><strong>Jabatan</strong></label>
                                            <input type="text" name="jabatan" id="jabatan" value="<?= $klinik['jabatan']; ?>" autocomplete="off" class="form-control" required>
                                                
                                        </div>
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                            <label for="instansi"><strong>Instansi</strong></label>
                                            <select name="instansi" id="instansi" class="form-control" required>
                                            
                                            
                                            
                                                <?php
                                                
                                                    $det = mysqli_query($koneksi, "SELECT * from data_kabkota");
                                                    while ($p = mysqli_fetch_array($det)) {
                                                ?>
                                                <option value="<?php echo 'Dinas Kesehatan '.$p['kabkota'] ?> " <?php if ($klinik['instansi'] == 'Dinas Kesehatan '.$p['kabkota']) { ?> selected='' <?php } ?>><?php echo 'Dinas Kesehatan '.$p['kabkota'] ?></option>
                                                <?php
                                                }
                                                ?> 
                                                <option value="Dinas Kesehatan Provinsi Kalimantan Selatan" <?php if ($klinik['instansi'] == 'Dinas Kesehatan Provinsi Kalimantan Selatan') { ?> selected='' <?php } ?>>Dinas Kesehatan Provinsi Kalimantan Selatan</option>
                                            </select>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="hp"><strong>Nomor HP/WA</strong></label>
                                                <div class="input-group ">
                                                <input type="text" name="hp" id="hp" placeholder="Masukkan Nomor HP/WA" autocomplete="off" class="input form-control"  value="<?= $klinik['hp']; ?>" required>
                                               </div>
                                        </div>
                                    
                                    </div>
                                    <div class="form-row">
                                        <div class="form-group col-md-6">
                                        <label for="alamat"><strong>Alamat</strong></label>
                                                <div class="input-group ">
                                                <input type="text" name="alamat" id="alamat" placeholder="Masukkan Alamat" autocomplete="off" class="input form-control" value="<?= $klinik['alamat']; ?>" required>
                                               </div>
                                        </div>
                                        <div class="form-group col-md-6">
                                        <label for="surat"><strong>Surat Tugas</strong></label>
                                                <div class="input-group ">
                                                <a href='../../../file/<?php echo $klinik['surat'];?>' target="_blank">Surat Tugas Sebelumnya</a>&nbsp;&nbsp;&nbsp;
                                                <input type="file" name="surat" id="surat" placeholder="Masukkan Surat Tugas" autocomplete="off" class="input form-control" accept=".pdf, .doc, .docx" value="" >
                                               </div>
                                        </div>
                                    </div>
                                </div>
                           
                        </div>
                        <div class="d-sm-flex align-items-right justify-content-between mb-4">
                            <div class="form-group">
                                <button type="submit" class="btn btn-primary" name="ubah"><i class="fa fa-save"></i>&nbsp;&nbsp;Simpan</button>
                                <button type="reset" class="btn"><a href="absen.php?id_aktivitas=<?= $klinik['id_aktivitas']; ?>" class="btn btn-danger"><i class="fa fa-times"></i>&nbsp;&nbsp;Batal</a></button>
                                
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