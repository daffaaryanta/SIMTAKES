<!-- Sidebar -->
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
<ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">

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
<!-- <a class="sidebar-brand d-flex align-items-center justify-content-center" href="dashboard.php"> -->
    
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
    if (strpos($url, "aktivitas/aktivitas") !== false) {
        ?>
        <li class="nav-item active">
        <a class="nav-link" href="">
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

<!-- Nav Item - Pages Collapse Menu Report Data -->

<?php 
    if (strpos($url, "report") !== false) {
        ?>
        <li class="nav-item active">
        <?php
        } else { ?>
        <li class="nav-item ">
        <?php
     }
  ?> 
   <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseReport"
   aria-expanded="true" aria-controls="collapseReport">
        <i class="fas fa-fw fa-folder"></i>
        <span>Report Data</span>
    </a>
    <div id="collapseReport" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
        <div class="bg-white py-2 collapse-inner rounded">
        <h6 class="collapse-header">Cetak Fasyankes:</h6>
        <?php 
    if (strpos($url, "report/report_rumah") !== false) {
        ?>
        <a class="collapse-item active" href="">Rumah Sakit</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_rumah.php">Rumah Sakit</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_puskesmas") !== false) {
        ?>
        <a class="collapse-item active" href="">Puskesmas</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_puskesmas.php">Puskesmas</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_klinik") !== false) {
        ?>
        <a class="collapse-item active" href="">Klinik</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_klinik.php">Klinik</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_labkes") !== false) {
        ?>
        <a class="collapse-item active" href="">Labkes</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_labkes.php">Labkes</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_pmdu") !== false) {
        ?>
        <a class="collapse-item active" href="">PM Dokter Umum</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_pmdu.php">PM Dokter Umum</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_pmds") !== false) {
        ?>
        <a class="collapse-item active" href="">PM Dokter Spesialis</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_pmds.php">PM Dokter Spesialis</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_utd") !== false) {
        ?>
        <a class="collapse-item active" href="">Unit Transfusi Darah</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_utd.php">Unit Transfusi Darah</a>
        <?php
     }
  ?> 
  <div class="bg-white py-2 collapse-inner rounded">
  <h6 class="collapse-header">Cetak Akreditasi Fasyankes:</h6>
  <?php 
    if (strpos($url, "report/report_arumah") !== false) {
        ?>
        <a class="collapse-item active" href="">Akreditasi Rumah Sakit</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_arumah.php">Akreditasi Rumah Sakit</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_apuskesmas") !== false) {
        ?>
        <a class="collapse-item active" href="">Akreditasi Puskesmas</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_apuskesmas.php">Akreditasi Puskesmas</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_aklinik") !== false) {
        ?>
        <a class="collapse-item active" href="">Akreditasi Klinik</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_aklinik.php">Akreditasi Klinik</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_alabkes") !== false) {
        ?>
        <a class="collapse-item active" href="">Akreditasi Labkes</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_alabkes.php">Akreditasi Labkes</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_apmdu") !== false) {
        ?>
        <a class="collapse-item active" href="" style="font-size: 13px;">Akreditasi PM Dokter Umum</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_apmdu.php" style="font-size: 13px;">Akreditasi PM Dokter Umum</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_apmds") !== false) {
        ?>
        <a class="collapse-item active" href="" style="font-size: 12px;">Akreditasi PM Dokter Spesialis</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_apmds.php" style="font-size: 12px;">Akreditasi PM Dokter Spesialis</a>
        <?php
     }
  ?> 
  <?php 
    if (strpos($url, "report/report_autd") !== false) {
        ?>
        <a class="collapse-item active" href="" style="font-size: 12px;">Akreditasi Unit Transfusi Darah</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_autd.php" style="font-size: 12px;">Akreditasi Unit Transfusi Darah</a>
        <?php
     }
  ?> 
    <!-- <?php 
    if (strpos($url, "report/report_grafik") !== false) {
        ?>
        <a class="collapse-item active" href="">Cetak Grafik Fasyankes</a>
        <?php
        } else { ?>
        <a class="collapse-item" href="../report/report_grafik.php">Cetak Grafik Fasyankes</a>
        <?php
     }
  ?>  -->
             
        </div>
    </div>
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