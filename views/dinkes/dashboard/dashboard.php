<?php
// Memanggil atau membutuhkan file function.php
require '../../../koneksi.php';

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

    <title>SIMTAKES - Beranda</title>

    <!-- Custom fonts for this template-->
    <link href="../../../vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="../../../css/sb-admin-2.min.css" rel="stylesheet">

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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                        <!-- <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a> -->
                    </div>


                    <div class="row">
                    <div class="col-sm-6">
                    <div class="card shadow mb-4">
                    <div class="card-body">
                    <img src="../../../img/dinkes.jpg" style=" display: block; margin-left: auto; margin-right: auto; width: 100%; height: auto; position: center;">
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
                                                if ($id_role == 2) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 3) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Balangan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 4) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Banjar'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 5) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Barito Kuala'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 6) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 7) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 8) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 9) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Kotabaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 10) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tabalong'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 11) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 12) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tanah Laut'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 13) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kabupaten Tapin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 14) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kota Banjarbaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 15) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_rumahsakit WHERE kabkota = 'Kota Banjarmasin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                
                                            
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
                                                if ($id_role == 2) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 3) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Balangan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 4) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Banjar'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 5) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Barito Kuala'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 6) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 7) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 8) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 9) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Kotabaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 10) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tabalong'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 11) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 12) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tanah Laut'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 13) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kabupaten Tapin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 14) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kota Banjarbaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 15) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pkm WHERE kabkota = 'Kota Banjarmasin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
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
                                                if ($id_role == 2) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 3) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Balangan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 4) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Banjar'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 5) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Barito Kuala'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 6) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 7) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 8) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 9) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Kotabaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 10) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tabalong'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 11) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 12) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tanah Laut'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 13) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kabupaten Tapin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 14) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kota Banjarbaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 15) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_klinik WHERE kabkota = 'Kota Banjarmasin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
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
                                                if ($id_role == 2) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 3) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Balangan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 4) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Banjar'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 5) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Barito Kuala'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 6) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 7) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 8) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 9) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Kotabaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 10) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Tabalong'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 11) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 12) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Tanah Laut'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 13) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kabupaten Tapin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 14) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kota Banjarbaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 15) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_labkes WHERE kabkota = 'Kota Banjarmasin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
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
                                                if ($id_role == 2) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 3) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Balangan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 4) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Banjar'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 5) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Barito Kuala'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 6) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 7) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 8) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 9) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Kotabaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 10) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Tabalong'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 11) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 12) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Tanah Laut'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 13) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kabupaten Tapin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 14) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kota Banjarbaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 15) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrumum WHERE kabkota = 'Kota Banjarmasin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
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
                                                if ($id_role == 2) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 3) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Balangan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 4) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Banjar'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 5) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Barito Kuala'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 6) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 7) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 8) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 9) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Kotabaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 10) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tabalong'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 11) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 12) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tanah Laut'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 13) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kabupaten Tapin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 14) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kota Banjarbaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 15) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_pmdrsp WHERE kabkota = 'Kota Banjarmasin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
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
                                                if ($id_role == 2) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 3) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Balangan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 4) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Banjar'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 5) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Barito Kuala'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 6) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Hulu Sungai Selatan'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 7) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Hulu Sungai Tengah'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 8) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Hulu Sungai Utara'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 9) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Kotabaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 10) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Tabalong'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 11) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Tanah Bumbu'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 12) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Tanah Laut'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 13) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kabupaten Tapin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 14) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kota Banjarbaru'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
                                                <?php
                                                if ($id_role == 15) { 
                                                    $query = mysqli_query($koneksi,"SELECT * FROM data_utd WHERE kabkota = 'Kota Banjarmasin'");
                                                    $row = mysqli_num_rows($query);
                                                    ?>
                                                    <div class="h5 mb-0 font-weight-bold text-gray-800">
                                                    <?php echo $row ?></div>
                                                    <?php
                                                }
                                                ?>
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

</body>

</html>