<?php
require '../../../koneksi.php';

// Mengambil data dari nis dengan fungsi get
$idx = $_GET['idx'];
$sql = "DELETE FROM data_labkes WHERE idx = $idx";

// Jika fungsi hapus jika data terhapus, maka munculkan alert dibawah
if(mysqli_query($koneksi, $sql)){
    $message = "Data Berhasil Dihapus!";
echo "<script type='text/javascript'>alert('$message');
window.location.href= 'labkes.php';
</script>";

    

    
} else{
    echo "ERROR: Hush! Sorry $sql. "
        . mysqli_error($koneksi);
}

// Close connection

?>