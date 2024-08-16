<?php
// Memanggil atau membutuhkan file function.php
require '../../../koneksi.php';
if (isset($_POST['simpan'])) {

    $cetak = $_REQUEST['cetak'];
    if ($cetak == 1) {
        
        echo "<script>
                
                document.location.href = '../../cetak/cetak_arumahsakit.php';
            </script>";
    } elseif ($cetak == 2) {
        
        echo "<script>
                
                document.location.href = '../../cetak/cetak_apuskesmas.php';
            </script>";
    } elseif ($cetak == 3) {
        
        echo "<script>
                
                document.location.href = '../../cetak/cetak_aklinik.php';
            </script>";
    } elseif ($cetak == 4) {
        
        echo "<script>
                
                document.location.href = '../../cetak/cetak_alabkes.php';
            </script>";
    } elseif ($cetak == 5) {
        
        echo "<script>
                
                document.location.href = '../../cetak/cetak_apmdu.php';
            </script>";
    } elseif ($cetak == 6) {
        
        echo "<script>
                
                document.location.href = '../../cetak/cetak_apmds.php';
            </script>";
    } elseif ($cetak == 7) {
        
        echo "<script>
                
                document.location.href = '../../cetak/cetak_atransfusi.php';
            </script>";
    } 
    else{
        echo "<script>
                        alert('Terjadi error!');
                        document.location.href = '../../dashboard/dashboard.php';
                    </script>";
       
    }
}
// Menampilkan semua data dari table mahasiswa berdasarkan nim secara Descending

?>

<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SIMTAKES - Cetak Akreditasi Fasyankes</title>

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

    <!-- Chart.js script-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/4.4.1/chart.min.js" integrity="sha512-L0Shl7nXXzIlBSUUPpxrokqq4ojqgZFQczTYlGjzONGTDAcLremjwaWv5A+EDLnxhQzY5xUZPWLOLqYRkY0Cbw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- <script src="https://cdn.jsdelivr.net/npm/chart.js"></script> -->

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
                    <?php
                    require '../template/navbar.php';
                    ?>

                    <!-- Topbar Navbar -->
                    

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- Page Heading -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Cetak Akreditasi Fasyankes</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>


                    
                    <div class="row ml-5">
                        <div class="col-sm-6">
                            <div class="card shadow mb-4">
                                <div class="card text-center">
                                    
                                </div>
                                <div class="card-body">
                                <form action="" method="post" enctype="multipart/form-data">
                                <!-- <canvas id="myChart" style="width:100%;max-width:700px"></canvas> -->
                                <label for="cetak"><strong>Cetak Akreditasi Fasyankes</strong></label>
                                <select name="cetak" id="cetak" class="form-control" required>
                                <option value="">-- Silahkan Pilih --</option>
                                <option value="1">Akreditasi Rumah Sakit</option>
                                <option value="2">Akreditasi Puskesmas</option>
                                <option value="3">Akreditasi Klinik</option>
                                <option value="4">Akreditasi Labkes</option>
                                <option value="5">Akreditasi Praktek Mandiri Dokter Umum</option>
                                <option value="6">Akreditasi Praktek Mandiri Dokter Spesialis</option>
                                <option value="7">Akreditasi Unit Transfusi Darah</option>
                                </select>
                                </div>
                            </div>
                                <div class="d-sm-flex align-items-right justify-content-between mb-4">
                                    <div class="form-group">
                                    <button type="submit" class="btn btn-primary" name="simpan"><i class="fas fa-download fa-sm text-white-50"></i>&nbsp;&nbsp;Cetak</button>
                                    </div>
                                </div>
                                </form>
                                
                            
                        </div>
                    
                         
                        
                    </div>
                </div>
                <!-- /.container-fluid -->

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

    <!-- Page level plugins -->
    <script src="../../../vendor/chart.js/Chart.min.js"></script>

    <!-- Page level custom scripts -->
    <script src="../../../js/demo/chart-area-demo.js"></script>
    <script src="../../../js/demo/chart-pie-demo.js"></script>

    <!-- Chart.js -->
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    
    <?php
     require '../../../js_chart/chart_2024.php';
    ?>

<script>
var ctx = document.getElementById('chartTotal1').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: ['2022', '2023', '2024'],
        datasets: [{
            label: 'Jumlah Faskes',
            data: [
                130, 170,180
            ],
            backgroundColor: [
                'rgba(255, 0, 0, 0.2)',
                'rgba(0, 0, 255, 0.2)',
                'rgba(255, 255, 0, 0.2)',
                'rgba(0, 255, 0, 0.2)',
                'rgba(255, 165, 0, 0.2)',
                'rgba(128, 0, 128, 0.2)',
                'rgba(139, 69, 19, 0.2)'
            ],
            borderColor: [
                'rgba(255, 0, 0, 1)',
                'rgba(0, 0, 255, 1)',
                'rgba(255, 255, 0, 1)',
                'rgba(0, 255, 0, 1)',
                'rgba(255, 165, 0, 1)',
                'rgba(128, 0, 128, 1)',
                'rgba(139, 69, 19, 1)'
            ],
            borderWidth: 1
        }]
    }
});

const selectchart = document.getElementById('selectchart');
selectchart.addEventListener('change', chartDropdown);
function chartDropdown(){
// console.log(selectchart.value);
// }
    const label = selectchart.options[selectchart.selectedIndex].text;
    myChart.data.datasets[0].label = label;
    myChart.data.datasets[0].data = selectchart.value.split(',');

    myChart.update();
}

</script>
    
    

<script>

    </script>


</body>

</html>